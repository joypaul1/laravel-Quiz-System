@extends('layouts.app')
@section('title') Introduction @endsection
@section('content')

<section class="bg-light">
    <div class="container">
        <!-- breadcrumb -->
        <!-- Breadcrumb -->
        <ul class="breadcrumbs mb-4 text-center">
            <li class="breadcrumbs__item">
                <a href="{{route('home')}}" class="breadcrumbs__url">
                    <i class="fa fa-home"></i> Home</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__url">Introduction</a>
            </li>
        </ul>
        <!-- breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-left">
                    @foreach($Introduction as $data)
                        <h2>{{$data->title}}</h2>
                        <h5>{{$data->sub_title}}</h5>
                        <hr>
                        <span>
                            {!! $data->content !!}
                        </span>
                   @endforeach
                </div>

            </div>
            <div class="col-md-12">
                @if(auth()->user()->set_rone_submit == true && auth()->user()->set_rtwo_submit == false )
                    @php
                        $round = 'two';
                        if(!auth()->user()->set_rone_submit)  $round = 'one';
                    @endphp
                    <div class="text-left">
                        <h5>{{ auth()->user()->name??' ' }},You are done Question Set One Round One</h5>
                        <strong> Go to the Question Set One Round Two
                            <a href="{{ route('start_quiz_one_set') }}?type={{ $round }}"
                            rel="noopener noreferrer">Clik Here </a>
                        </strong>
                    </div>
                @endif

                @if(auth()->user()->set_two_rone_submit == true && auth()->user()->set_two_rtwo_submit == false )
                    @php
                        $round = 'two';
                        if(!auth()->user()->set_two_rone_submit)  $round = 'one';
                    @endphp
                    <div class="text-left">
                        <h5>{{ auth()->user()->name??' ' }},You are done Question Set Two Round One</h5>
                        <strong> Go to the Question Set Two Round Two
                            <a href="{{ route('start_quiz_two_set') }}?type={{ $round }}"
                            rel="noopener noreferrer">Clik Here </a>
                        </strong>
                    </div>
                @endif

            </div>
        </div>
    </div>
</section>
@endsection
