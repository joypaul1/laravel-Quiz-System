@extends('layouts.app')
@section('title') Survey  @endsection
@section('content')
<style>
    .pagination{
        display: -webkit-inline-box !important;
    }
    .rating {
      float:left;
    }

    /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t
      follow these rules. Every browser that supports :checked also supports :not(), so
      it doesn’t make the test unnecessarily selective */
    .rating:not(:checked) > input {
        position:absolute;
        top:-9999px;
        clip:rect(0,0,0,0);s
    }

    .rating:not(:checked) > label {
        float:right;
        width:1em;
        /* padding:0 .1em; */
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:300%;
        /* line-height:1.2; */
        color:#ddd;
    }

    .rating:not(:checked) > label:before {
        content: '★ ';
    }

    .rating > input:checked ~ label {
        color: #f7ba0f;

    }

    .rating:not(:checked) > label:hover,
    .rating:not(:checked) > label:hover ~ label {
        color: #f7ba0f;

    }

    .rating > input:checked + label:hover,
    .rating > input:checked + label:hover ~ label,
    .rating > input:checked ~ label:hover,
    .rating > input:checked ~ label:hover ~ label,
    .rating > label:hover ~ input:checked ~ label {
        color: #f7ba0f;

    }

    .rating > label:active {
        position:relative;
        top:2px;
        left:2px;
    }
</style>
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
                <a href="#" class="breadcrumbs__url"> Survey</a>
            </li>
        </ul>
        <!-- breadcrumb -->
        <div class="row">
            <div class="col-lg-12">

                <div class="text-left">
                    <strong >Final Survey </strong>
                    <hr>
                    @forelse ($surveys as $key => $data)
                        <div class="row">
                        <div class="col-md-12">
                            @php
                                $dummuValue = ["1","2","3",'4',"5"];
                                $answer     =  App\Models\UserSurveyAnswer::where('survey_id',  $data->id)->where('user_id', auth()->id())->first();
                            @endphp
                            <span style="display: inherit">{{ $key+1 }}.{{ $data->survey }} : </span>
                            @if ($data->type == 'rating')
                                <div class="rating">
                                    <input type="radio" @if ($answer) {{ $dummuValue[4] === $answer->ratting ?'Checked': ' ' }} @endif data-id={{$data->id}} class="survey"id="star-{{ $data->id."-". $dummuValue[0]}}" name="{{ $key}}-rating" value="5" /><label for="star-{{ $data->id."-". $dummuValue[0]}}">5 stars</label>
                                    <input type="radio" @if ($answer) {{ $dummuValue[3] === $answer->ratting ?'Checked': ' ' }} @endif data-id={{$data->id}} class="survey" id="star-{{ $data->id."-". $dummuValue[1]}}" name="{{ $key}}-rating" value="4" /><label for="star-{{ $data->id."-". $dummuValue[1]}}" >4 stars</label>
                                    <input type="radio" @if ($answer) {{ $dummuValue[2] === $answer->ratting ?'Checked': ' ' }} @endif data-id={{$data->id}} class="survey" id="star-{{ $data->id."-". $dummuValue[2]}}" name="{{ $key}}-rating" value="3" /><label for="star-{{ $data->id."-". $dummuValue[2]}}" >3 stars</label>
                                    <input type="radio" @if ($answer) {{ $dummuValue[1] === $answer->ratting ?'Checked': ' ' }} @endif data-id={{$data->id}} class="survey" id="star-{{ $data->id."-". $dummuValue[3]}}" name="{{ $key}}-rating" value="2" /><label for="star-{{ $data->id."-". $dummuValue[3]}}" >2 stars</label>
                                    <input type="radio" @if ($answer) {{ $dummuValue[0] === $answer->ratting ?'Checked': ' ' }} @endif data-id={{$data->id}} class="survey"id="star-{{ $data->id."-". $dummuValue[4]}}" name="{{ $key}}-rating" value="1" /><label for="star-{{ $data->id."-". $dummuValue[4]}}" >1 star</label>
                                </div>
                            @else
                                <br>
                                <p> <input type="text" class="surveyInput" data-id={{$data->id}} name="{{ $key}}-rating"
                                    @if ($answer)
                                        value={{ $answer->ratting??' ' }}
                                    @endif
                                >
                                </p>
                            @endif


                        </div>
                        </div>
                    @empty

                    @endforelse

                </div>
                <div class="text-center">
                    {{ $surveys->links() }}
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
@push('js')
<script>

    $('.survey').on('click', function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var userId      ='{{ auth()->id() }}';
        var question_id = $(this).attr('data-id');
        var ratting     = $(this).val();
        $.ajax({
            type:'GET',
            url:"{{ route('survey-answer') }}",
            data:{userId:userId, ratting:ratting, question_id:question_id},
            success:function(data){
                console.log(data);
            },
            error:function(data){
                console.log(data);
            }
        });
    });
    $('.surveyInput').on('input', function(){
        var userId      ='{{ auth()->id() }}';
        var question_id = $(this).attr('data-id');
        var ratting     = $(this).val();
        console.log(ratting);

        $.ajax({
            type:'GET',
            url:"{{ route('survey-answer') }}",
            data:{userId:userId, ratting:ratting, question_id:question_id},
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
