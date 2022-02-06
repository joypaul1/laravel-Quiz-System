@extends('layouts.app')
@section('title') Question Set One @endsection

@section('content')

<section class="bg-light">
    <div class="container">
        <!-- breadcrumb -->
        <ul class="breadcrumbs mb-4 text-center">
            <li class="breadcrumbs__item">
                <a href="{{route('home')}}" class="breadcrumbs__url">
                    <i class="fa fa-home"></i> Home</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__url">Question Set One</a>
            </li>
        </ul>
        <!-- breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                @if(auth()->user()->set_rone_submit && auth()->user()->set_rtwo_submit)
                    <div class="text-left">
                        <h5>{{ auth()->user()->name??' ' }},You are done Question Set One Round One & Round Two.</h5>
                        <strong> Go to the Question Set Two
                            <a href="{{ route('setTwo') }}" target="_blank"
                            rel="noopener noreferrer">Clik Here </a>
                        </strong>
                    </div>
                @else

                    <div class="text-left">

                        <h5>{{ auth()->user()->name??' ' }}, Welcome to Question Set One {{ auth()->user()->set_rone_submit == false ?'Round One.' : 'Round Two.' }}</h5>

                        <p class="text-justify">
                            In this round, you will answer 20 questions and provide difculty rating for
                            each question.
                        </p>
                        <p class="text-justify">
                            You have to answer the question and enter the rating before moving to
                            the next question, but you can mark the question for later review.
                            You can also write notes for the questions.
                        </p>
                        <p class="text-justify">
                            Ready? Let's begin!
                        </p>

                    </div>
                    <div class="text-right">
                        @php
                            $round = 'two';
                            if(!auth()->user()->set_rone_submit)  $round = 'one';
                        @endphp
                        <a href="{{ route('start_quiz_one_set') }}?type={{ $round }}">
                            <button type="button" class="btn btn-success">start</button>
                        </a>
                    </div>
                @endif
            </div>
        </div>




    </div>
</section>

@endsection
