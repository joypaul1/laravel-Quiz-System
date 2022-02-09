@extends('layouts.app')
@section('title') User Deshboard @endsection
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
                <a href="#" class="breadcrumbs__url">User Deshboard</a>
            </li>
        </ul>
        <!-- breadcrumb -->
        <div class="row">
            <div class="col-lg-12">

                    <div class="text-center">

                        <h5>Hello, {{ auth()->user()->name  }}</h5>
                        <hr>

                        <div class="card text-left">
                            <div class="card-header bg-info">Question Set One: Round One</div>
                            <div class="card-body">
                                <p> {{ Auth::user()->name  }} Results</p>
                                <p>Number of questions: 20</p>
                                <p>Number of correct answers : {{ auth()->user()->score_so_one??0 }}</p>
                                @if (auth()->user()->score_so_one > 0 )
                                <p>% of correct answers (based on historical data): {{ round((auth()->user()->score_so_one /20)*100)??0 }}</p>
                                @else
                                <p>%  of correct answers (based on historical data): 0 </p>
                                @endif
                                <p>Average of difculty rating across all questions: {{ round($set_one_r_one_d_r)}} </p>
                                @if (auth()->user()->set_rone_submit && auth()->user()->set_rtwo_submit)
                                    <p>You Can see the asnwer of Question Set One <a href="{{ url('user/start_quiz_one_set/list?&justView=true') }}" class="btn btn-sm btn-success">Cliek Here</a> </p>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="card text-left">
                            <div class="card-header bg-info">Question Set Two: Round One</div>
                            <div class="card-body">
                                <p> {{ Auth::user()->name  }} Results</p>
                                <p>Number of questions: 20</p>
                                <p>Number of correct answers : {{ auth()->user()->score_st_one??0 }}</p>
                                @if (auth()->user()->score_st_one > 0)
                                <p>% of correct answers (based on historical data): {{ round((auth()->user()->score_st_one /20)*100)??0 }}</p>
                                @else
                                <p>%  of correct answers (based on historical data): 0 </p>
                                @endif
                                <p>Average of difculty rating across all questions: {{ round($set_two_r_one_d_r)}} </p>
                                @if (auth()->user()->set_two_rone_submit && auth()->user()->set_two_rtwo_submit)
                                    <p>You Can see the asnwer of Question Set Two <a href="{{ url('user/start-quiz-two-set/list?&justView=true') }}" class="btn btn-sm btn-success">Cliek Here</a> </p>
                                @endif
                            </div>
                        </div>

                        <br>
                        @php
                            $average_correct = 0;
                            $total_answer  = (auth()->user()->score_so_one  + auth()->user()->score_st_one);
                            if ($totalUser > 0) {
                                $average_correct = $total_answer / $totalUser;
                            }

                            $percent_answer = ($total_answer/40)*100;

                        @endphp
                        <div class="card text-left">
                            <div class="card-header bg-success">Group Results:
                            </div>
                            <div class="card-body">
                                <p> Number of Users: {{ $totalUser }} </p>
                                <p>Average % of correct answers: {{  round($average_correct)??0 }}</p>
                                <p>Average Number of correct answers:  {{ round($percent_answer)??0 }}</p>
                                <p>Average of difculty rating across all questions and all raters:
                                    {{ round($averageDifficultyRating)??0 }}</p>

                            </div>
                        </div>



                    </div>


            </div>
        </div>
    </div>
</section>

@endsection
