@extends('layouts.backend')
@section('title') Introduction @endsection
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
                        <li class="breadcrumb-item active" aria-current="page">Introduction</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add Introduction</h5>
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

                 <form action="{{ route('admin.store-introduction') }}" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$Introduction->title}}" placeholder="Enter title">
                                    @error('title')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Sub Title</label>
                                    <input type="text" name="sub_title"  class="form-control @error('sub_title') is-invalid @enderror" value="{{$Introduction->sub_title}}"
                                        placeholder="Enter sub title">
                                    @error('title')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"> Content</label>
                                    <textarea name="content" id="mytextarea" class="form-control @error('content') is-invalid @enderror" placeholder="Enter content">
                                        {{$Introduction->content}}
                                    </textarea>
                                    @error('content')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save Content</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
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

@section('js')
<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
</script>
@endsection
