@extends('layouts.backend')
@section('title') Surveys Answer Summary @endsection
@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Surveys Answer Summary </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col">
                <h6 class="mb-0 text-uppercase">Surveys Answer Summary</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        @if($message = Session::get('success'))
                        <div class="alert alert-success bg-success text-white">
                            {{ $message }}
                        </div>
                        @endif

                        @if($message = Session::get('error'))
                        <div class="alert alert-danger bg-danger text-white">
                            {{ $message }}
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Opps!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <h5 class="card-title">{{ $user->name??' ' }}</h5>
                        <p class="card-text ">Email: {{ $user->email }} <br> Mobile : {{ $user->mobile??'-' }}
                        </p>
                        {{-- @dd($user, ($user->score_so_one /20)) --}}
                        <div class="card text-left">
                            <div class="card-header bg-info text-white">Question Set One: Round One</div>
                            <div class="card-body">
                                <p>Number of questions: 20</p>
                                <p>Number of correct answers : {{ $user->score_so_one??0 }}</p>
                                @if ($user->score_so_one > 0 )
                                <p>% of correct answers (based on historical data): {{ round(($user->score_so_one /20)*100)??0 }}</p>
                                @else
                                 <p>%  of correct answers (based on historical data): 0 </p>
                                @endif
                            </div>
                        </div>

                        <div class="card text-left">
                            <div class="card-header bg-info text-white">Question Set Two: Round One</div>
                            <div class="card-body">
                                <p>Number of questions: 20</p>
                                <p>Number of correct answers : {{ $user->score_st_one??0 }}</p>
                                @if ($user->score_st_one > 0)
                                <p>% of correct answers (based on historical data): {{ round(($user->score_st_one /20)*100)??0 }}</p>
                                @else
                                <p>%  of correct answers (based on historical data): 0 </p>
                                @endif
                            </div>
                        </div>

                        @php
                            $average_correct = 0;
                            $total_answer  = ($user->score_so_one  +$user->score_st_one);
                            if ($totalUser > 0) {
                                $average_correct = $total_answer / $totalUser;
                            }

                            $percent_answer = ($total_answer/40)*100;

                        @endphp
                        <div class="card text-left">
                            <div class="card-header bg-success text-white" >Group Results:
                            </div>
                            <div class="card-body">
                                <p> Number of Users: {{ $totalUser }} </p>
                                <p>Average % of correct answers: {{  round($average_correct)??0 }}</p>
                                {{-- <p>Average Number of correct answers:  {{ round($percent_answer)??0 }}</p> --}}


                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
@endsection
