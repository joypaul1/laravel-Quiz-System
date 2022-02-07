@extends('layouts.backend')
@section('title') User Management @endsection
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
                        <li class="breadcrumb-item active" aria-current="page">User Management</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col">
                <h6 class="mb-0 text-uppercase">User  List</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">

                        @if($message = Session::get('success'))
                            <div class="alert alert-success bg-success text-white">
                                {{ $message }}
                            </div>
                        @endif

                        <table class="table mb-0 table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SL No,</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Block Status</th>
                                    <th scope="col">Change Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $key=>$data)
                                <tr>
                                    <td>{{ $key+1 ??' '}}</td>
                                    <td>{{$data->name??' '}}</td>
                                    <td>{{$data->email??' '}}</td>
                                    <td>{{$data->mobile??' '}}</td>
                                    <td>
                                        @if ($data->status == true)
                                            <span class="badge rounded-pill bg-info"><i class="bx bx-check mr-1"></i> Active </span>
                                        @else
                                            <span class="badge rounded-pill bg-danger"> <i class="bx bx-block mr-1"></i> Block</span>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{ route('admin.user-changeStatus', $data->id) }}" class="btn btn-outline-warning btn-sm"
                                            data-toggle="tooltip" data-placement="top" title="change status"
                                            ><i class="bx bx-pencil"></i>Click Here</a>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">

                                            <form action="{{route('admin.delete-user',$data->id)}}" method="GET">

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
                    <div class="text-center">{{ $users->links() }}</div>
                </div>

            </div>
        </div>
        <!--end row-->
    </div>
</div>
<!--end page wrapper -->
@endsection
