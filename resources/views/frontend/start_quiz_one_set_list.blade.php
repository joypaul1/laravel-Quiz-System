@extends('layouts.app')
@section('title') Question Set One @endsection
@push('css')
<style>
    .question {
        width: 75%
    }

    .options {
        position: relative;
        padding-left: 40px
    }

    #options label {
        display: block;
        margin-bottom: 15px;
        font-size: 14px;
        cursor: pointer
    }

    .options input {
        opacity: 0
    }

    .checkmark {
        position: absolute;
        top: -1px;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #ffffff;
        border: 1px solid #818181;
        border-radius: 50%
    }

    .options input:checked~.checkmark:after {
        display: block
    }

    .options .checkmark:after {
        content: "";
        width: 10px;
        height: 10px;
        display: block;
        background: white;
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: 300ms ease-in-out 0s
    }

    .options input[type="checkbox"]:checked~.checkmark {
        background: #21bf73;
        transition: 300ms ease-in-out 0s
    }

    .options input[type="checkbox"]:checked~.checkmark:after {
        transform: translate(-50%, -50%) scale(1)
    }

    .btn-primary {
        background-color: #555;
        color: #ddd;
        border: 1px solid #ddd
    }

    .btn-primary:hover {
        background-color: #21bf73;
        border: 1px solid #21bf73
    }

    .btn-success {
        background-color: #21bf73
    }

    @media(max-width:576px) {
        .question {
            width: 100%;
            word-spacing: 2px
        }
    }
</style>

@endpush
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
                <a href="#" class="breadcrumbs__url">Question Set One List</a>
            </li>
        </ul>

        <!-- breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="text-left">
                    <h5>{{ auth()->user()->name??' ' }}</h5>
                    @foreach ($data as $key=>$item)
                    <section class="row">
                        <div class="col-sm-8 col-md-8">
                            <p class="text-justify">
                                Question {{ $key+1 }}. Lorem Ipsum has been the industry's
                                {{$item->question??' '}}
                            </p>
                        </div>
                        @php
                            $type = auth()->user()->set_rone_submit == false?'one':'two';
                        @endphp
                        <div class="col-sm-4 col-md-4">
                            <span>
                                <a href="{{route('start_quiz_one_set') }}?page={{ $key+1 }}&type={{'one'}}&lockded={{ true }}"
                                    class="text-success">
                                    <input type="checkbox" >
                                    Go For Review  <i class="fas fa-forward text-info"></i>
                                </a>
                            </span>
                        </div>
                    </section>


                    @endforeach
                    @if (auth()->user()->set_rone_submit && auth()->user()->set_rtwo_submit)
                    <div class="d-flex align-items-center pt-3">

                        <div class="ml-auto">
                            <a href="{{ url('user/deshboard') }}">
                                <button type="submit" class="btn btn-md btn-success" > Dashboard <i
                                        class="fas fa-forward"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    @else
                    <div class="d-flex align-items-center pt-3">

                        <div class="ml-auto">
                            <a href="{{ route('start_quiz_one_set.rone.submit') }}">
                                <button type="submit" class="btn btn-md btn-success" > Submit <i
                                        class="fas fa-forward"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    @endif


                </div>


            </div>
        </div>
    </div>
</section>

@endsection
@push('js')
<script>
</script>
@endpush
