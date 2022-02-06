@extends('layouts.backend')
@section('title') Question List @endsection
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
                        <li class="breadcrumb-item active" aria-current="page">Question</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col">
                <h6 class="mb-0 text-uppercase">Question List</h6>
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
                                    <th scope="col">Set Type</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Answer key</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($questions as $data)
                                <tr>
                                    <td>{{$data->set_no == 1?"Set One":"Set Two"}}</td>
                                    <td>{{$data->question??' '}}</td>
                                    <td>{{$data->topic}}</td>
                                    <td>
                                        {{ ($data->answer_key)}}
                                    </td>
                                    <td>
                                        @if ($data->status == 1)
                                        <span class="badge rounded-pill bg-success">Active</span>
                                        @else
                                        <span class="badge rounded-pill bg-danger">Inactive</span>
                                        @endif</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
											<a href="{{route('admin.edit-question', $data->id)}}" class="btn btn-outline-info btn-sm"><i class="bx bx-edit-alt"></i>
                                            </a>

                                            <form action="{{route('admin.delete-banner',$data->id)}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="bx bx-trash"></i>
                                                </button>
                                            </form>
										</div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">{{ $questions->links() }}</div>
                </div>

            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
@endsection
