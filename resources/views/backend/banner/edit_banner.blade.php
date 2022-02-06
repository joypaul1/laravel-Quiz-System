@extends('layouts.backend')
@section('title') Edit Banner @endsection
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
                        <li class="breadcrumb-item active" aria-current="page">Edit Banner</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Banner</h5>
                <hr />
                <div class="mt-4">
                 <form action="{{ route('admin.update-banner', $Banner->id ) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">

                                <div class="mb-3">
                                    <label class="form-label">Banner Image (1920*960</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label>Image View</label> <br>
                                    <img src="{{ asset($Banner->image) }}" id="img-view" style="height: 50px; width:50px;"
                                        alt="Empty Image!" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$Banner->title}}" placeholder="Enter title">
                                    @error('title')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Sub Title</label>
                                    <input type="text" name="sub_title"  class="form-control @error('sub_title') is-invalid @enderror" value="{{$Banner->sub_title}}"
                                        placeholder="Enter sub title">
                                    @error('sub_title')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" name="button_text" class="form-control @error('button_text') is-invalid @enderror" value="{{$Banner->button_text}}" value="{{$Banner->button_text}}">
                                    @error('button_text')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Link</label>
                                    <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{$Banner->link}}" placeholder="Enter link">
                                    @error('link')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Type</label>
                                    <select name="type" class="form-select @error('type') is-invalid @enderror" value="{{$Banner->type}}">
                                        <option>Select Type</option>
                                        @if ($Banner->type == 'home_slider')
                                        <option value="home_slider" selected>Home Slider</option>
                                        <option value="home_slider2">Home Slider 2</option>
                                        @elseif ($Banner->type == 'home_slider2')
                                        <option value="{{$Banner->type == 'home_slider2'}}" selected>Home Slider 2</option>
                                        <option value="home_slider">Home Slider</option>
                                        @endif
                                    </select>
                                    @error('type')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-select @error('status') is-invalid @enderror" value="{{$Banner->status}}">
                                        <option>Select Status</option>
                                        @if ($Banner->status == 1)
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                        @elseif ($Banner->status == 0)
                                        <option value="{{$Banner->status == 0}}" selected>Inactive</option>
                                        <option value="1">Active</option>
                                        @endif
                                    </select>
                                    @error('status')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Update Banner</button>
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
