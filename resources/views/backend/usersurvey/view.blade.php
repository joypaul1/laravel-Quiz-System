@extends('layouts.backend')
@section('title') User Servey @endsection
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
                        <li class="breadcrumb-item active" aria-current="page">User Servey</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col">
                <h6 class="mb-0 text-uppercase">Users List</h6>
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
                        <table class="table mb-0 table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SL. No</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Answer Key</th>
                                    <th scope="col">User Answer</th>
                                    <th scope="col">Correct / Not</th>
                                    <th scope="col">Difficulty Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questions as $key=>$data)
                                @php
                                    $answer='';
                                    $answer =  App\Models\backend\UserAnswerSheet::whereUserId($id)->where('question_id', $data['id'])
                                    ->where('set_no', $data['set_no'])
                                    ->first();

                                @endphp
                                <tr>
                                    <td> {{ $data['serial_no']??' ' }}</td>
                                    <td>{{$data['question']}}</td>
                                    <td> {{ $data['type']??' ' }}</td>
                                    <td>{{$data['answer_key']}}</td>

                                    <td> {{ $answer->answer_key??'No Asnwer' }}</td>
                                    <td>
                                        @if (($answer->answer_key??' ') != ($data['answer_key']??' ') )
                                            <span class="badge rounded-pill bg-danger">Not Correct </span>
                                        @else
                                            <span class="badge rounded-pill bg-info"> Correct</span>
                                        @endif
                                    </td>
                                    <td>{{$answer['difficulty_rating']??'No Asnwer '}}</td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{-- <p class="text-center"> {{ $users->links() }}</p> --}}
                </div>

            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
@endsection
