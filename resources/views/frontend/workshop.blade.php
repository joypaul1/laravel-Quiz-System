@extends('layouts.app')
@section('title') Workshop @endsection
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
                <a href="#" class="breadcrumbs__url">Workshop</a>
            </li>
        </ul>
        <!-- breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">

                    @foreach($Workshop as $data)
                        <h2>{{$data->title}}</h2>
                        <h5>{{$data->sub_title}}</h5>
                        <hr>
                        <span>
                            {!! $data->content !!}
                        </span>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
