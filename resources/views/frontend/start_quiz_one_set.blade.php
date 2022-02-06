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
        /* display: block; */
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
    .options input[type="radio"]:checked~.checkmark {
        background: #21bf73;
        transition: 300ms ease-in-out 0s
    }

    .options input[type="radio"]:checked~.checkmark:after {
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
        /* padding: 5px 25px; */
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
                <a href="#" class="breadcrumbs__url">Question Set One {{ $type == 'one'? 'one':'two'}}</a>
            </li>
        </ul>

        <!-- breadcrumb -->
        <div class="row">
            <div class="col-lg-8">
                <div class="text-left">
                    <h5>{{ auth()->user()->name??' ' }}</h5>
                    @foreach ($data as $item)

                        <p class="text-justify">
                         Topic :   {{$item->topic??' '}}
                        </p>
                        <p class="text-justify">
                            Question {{ $item->serial_no??' ' }} .
                            {{$item->question??' '}}
                        </p>

                        @if ($type == 'two')


                            @if ( ($answer_rone->answer_key) == ($item->answer_key))
                                <p> Your Score <input type="text" value="1" disabled> </p>
                            @else
                                <p> Your Score <input type="text" value="0" disabled> </p>
                            @endif
                            @if ( ($answer_rone->answer_key) != ($item->answer_key))
                                <strong class="text-danger">This corret key is : {{ ($item->answer_key) }}</strong>
                            @endif

                        @endif
                        @foreach ($item->options as $option)
                            <div class="question pt-2">
                                <div class="ml-md-2 ml-sm-2 pl-md-2 pt-sm-0 pt-3" id="options">
                                    {{-- <label > <strong class="text-info">{{ $option->key??' ' }}</strong> </label> --}}
                                    <label class="options">{{ $option->option }}
                                        <input
                                        @if ($questionType == "MR")
                                            type="checkbox"
                                        @else
                                            type="radio"
                                        @endif

                                            class="check"  name="radio"
                                            value="{{$option->key}}"

                                                    @if($answer_rone)
                                                        @foreach (json_decode( $answer_rone->answer_key) as  $answeritem)
                                                            @if( $answeritem == $option->key )
                                                            Checked
                                                            @endif
                                                        @endforeach

                                                    @endif
                                                    @if($type =='two')
                                                    disabled
                                                    @endif

                                        >
                                        <span class="checkmark"></span>
                                    </label>

                                </div>
                            </div>
                        @endforeach

                        <p> {{ $type=='two'?'Round One ':''}} Question Difculty Rating (0-100):
                            <input type="text"
                            {{ $type =='two'?'':"id=dis_rating"}}
                            @if ($answer_rone)
                                @if( $answer_rone->difficulty_rating )
                                    value={{ $answer_rone->difficulty_rating }}
                                @endif
                            @endif
                            @if($type=='two')
                            disabled
                            @endif
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </p>
                        @if($type=='two')
                            <p> Round Two Question Difculty Rating (0-100):
                                <input type="text" id="dis_rating"
                                @if ($answer_rtwo)
                                    @if( $answer_rtwo->difficulty_rating )
                                        value={{ $answer_rtwo->difficulty_rating }}
                                    @endif
                                @endif
                                onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                            </p>
                        @endif

                        <div class="d-flex align-items-center pt-3">
                            <div id="prev">
                                <a href="{{ $previousPageUrl }}">
                                    <button type="button" class="btn btn-md btn-secondary"
                                    @if (!$previousPageUrl)
                                        disabled
                                    @endif>
                                        <i class="fas fa-backward"></i>
                                        Back
                                    </button>
                                </a>
                            </div>
                            <div class="ml-auto">
                                <a href="{{ $nextPageUrl }}">
                                {{-- <a href="#"> --}}
                                    <button type="button" class="btn btn-md btn-success"

                                    disabled> Next <i
                                            class="fas fa-forward"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            @if($type=='two')
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            Question Difficualty : {{ $data[0]->difficulty_rating??0 }}
                        </div>
                        <div class="card-body">
                            Group Summary <br>
                            <span>N Of responses : {{ $response??0  }} </span> <br>
                            <span>% Of correct : {{ $correct_ans}} </span> <br>
                            <span> Avarage : {{ round($average) }} </span> <br>
                            <span> SD : 20 **</span> <br>
                            <span> Min : {{ $min }} </span> <br>
                            <span> Max : {{ $max }} </span> <br>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

@endsection
@push('js')
<script>
$(document).ready(function(){
    var questionType='{{ $questionType }}';
    if(questionType =='MR'){
        $('.checkmark').css('border-radius', '0');
    }
    var answer_key =$('input[name="radio"]:checked').val();
    var ratting = $("#dis_rating").val();
    if(answer_key && ratting ){
        $('.btn-success').prop("disabled", false);
    }else{
        $('.btn-success').prop("disabled", true)
    }

});

$('#dis_rating').on('input', function(e){

        if( rating() && checked() ){
            $('.btn-success').prop("disabled", false);
        }else{
            $('.btn-success').prop("disabled", true)
        }
    });

    $('.check').click(function() {
        if( rating() && checked() ){
            $('.btn-success').prop("disabled", false);
        }else{
            $('.btn-success').prop("disabled", true)
        }
    });

    function rating(){
        var inVal = parseInt($('#dis_rating').val());
        if( inVal > 100){
            confirm('Difculty Rating Value must be 0-100');
            $('#dis_rating').val(0);
            return false;
        }
        if(isNaN(inVal)){
            return false;
        }
        return true;
    }

    function checked(){
        if ($('.check').is(':checked')) {
           return true;
        }
        return false;
    }


$('.btn-success').on('click', function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var set_no      = '{{ $data[0]->set_no }}';
    var round       = '{{ $type }}';
    var question_id = '{{ $data[0]->id }}';
    var answer_key  = $('input:checked').map(function(i, e) {return e.value}).toArray();
    var ratting     = $("#dis_rating").val();
    $.ajax({
        type:'POST',
        url:"{{ route('question-answer') }}",
        data:{set_no:set_no, answer_key:answer_key, ratting:ratting, question_id:question_id, round:round},
        success:function(data){
            console.log(data);
        },
        error:function(data){
            console.log(data);
        }
    });
});
</script>
@endpush
