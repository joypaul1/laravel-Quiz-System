@extends('layouts.backend')
@section('title') Add Banner @endsection
@section('content')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i
                                    class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add New Banner</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Banner</h5>
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

                 <form action="{{ route('admin.store-banner') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">

                                <div class="mb-3">
                                    <label class="form-label">Banner Image *(1920*960)</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}" required>
                                    @error('image')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Enter title">
                                    @error('title')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Sub Title</label>
                                    <input type="text" name="sub_title"  class="form-control @error('sub_title') is-invalid @enderror" value="{{old('sub_title')}}"
                                        placeholder="Enter sub title">
                                    @error('title')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" name="button_text" class="form-control @error('button_text') is-invalid @enderror" value="{{old('button_text')}}" placeholder="Enter Button Text">
                                    @error('button_text')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Link</label>
                                    <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{old('link')}}" placeholder="Enter link">
                                    @error('link')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Type</label>
                                    <select name="type" class="form-select @error('type') is-invalid @enderror" value="{{old('type')}}">
                                        <option>Select Type</option>
                                        <option value="home_slider">Home Slider</option>
                                        <option value="home_slider2">Home Slider2</option>
                                    </select>
                                    @error('type')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select @error('status') is-invalid @enderror" value="{{old('status')}}">
                                        <option>Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    @error('status')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save Banner</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <a href="{{route('admin.banner-list')}}" class="btn btn-info">Back</a>
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
