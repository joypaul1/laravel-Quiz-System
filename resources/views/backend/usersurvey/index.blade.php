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
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Round One Status</th>
                                    <th scope="col">Round Two Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key=>$data)
                                <tr>
                                   <td > {{ $key+1 }}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->mobile}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>
                                        @if ($data->set_rone_submit && $data->set_rtwo_submit)
                                        <span class="badge rounded-pill bg-info">Done </span>
                                        @else
                                        <span class="badge rounded-pill bg-danger">Not Done</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->set_two_rone_submit && $data->set_two_rtwo_submit)
                                            <span class="badge rounded-pill bg-info">Done </span>
                                        @else
                                            <span class="badge rounded-pill bg-danger">Not Done</span>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
											<a href="{{route('admin.survey.summary', $data->id)}}" class="btn btn-outline-info btn-sm"
                                                 data-toggle="tooltip" data-placement="top" title="answer summary">
                                                <i class="bx bx-card"></i>
                                            </a>

											<a href="{{route('admin.survey.answer', $data->id)}}" class="btn btn-outline-warning btn-sm"
                                                 data-toggle="tooltip" data-placement="top" title="answer list">
                                                <i class="bx bx-credit-card-front"></i>
                                            </a>

										</div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <p class="text-center"> {{ $users->links() }}</p>
                </div>

            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
@endsection
