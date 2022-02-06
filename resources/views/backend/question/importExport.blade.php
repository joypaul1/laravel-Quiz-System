@extends('layouts.backend')
@section('title', 'Enter exel')
@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Enter Exel File</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Enter Exel File</h5>
                <hr />
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
                <div class="mt-4">
                    <form action="{{ route('admin.import') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">

                                    <div class="mb-3">
                                        <label class="form-label">File</label>
                                        <input type="file" id="" name="file"
                                            class="form-control @error('file') is-invalid @enderror"
                                            required
                                            placeholder="Enter excel file">
                                        @error('file')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Upload Question</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                        <a href="{{route('admin.list-question')}}" class="btn btn-info">Back</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>

</div>
</div>
<!--end page wrapper -->
@endsection
@push('js')
<script>


</script>
@endpush
