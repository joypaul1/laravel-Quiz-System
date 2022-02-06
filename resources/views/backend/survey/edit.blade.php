@extends('layouts.backend')
@section('title', 'Edit survey')
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
                        <li class="breadcrumb-item active" aria-current="page">Edit survey</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit survey</h5>
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

                    <form action="{{ route('admin.update-survey', $survey->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">

                                    <div class="mb-3">
                                        <label class="form-label">Survey Ratting Type</label>
                                        <select name="type" class="form-select
                                        @error('type') is-invalid @enderror" required>
                                            <option value={{null}}>Select Type</option>
                                            <option value="rating" @if (old('type', $survey->type) =='rating')selected @endif>Star Rating</option>
                                            <option value="rating" @if (old('type', $survey->type) =='input')selected @endif>INput Box Rating</option>
                                        </select>
                                        @error('type')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label">survey</label>
                                        <input type="text" name="survey"
                                            class="form-control @error('survey') is-invalid @enderror"
                                            value="{{old('survey', $survey->survey)}}"
                                            placeholder="Enter sub title">
                                        @error('survey')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update survey</button>
                                        <button type="reset" class="btn btn-warning">Reset</button>
                                        <a href="{{route('admin.list-survey')}}" class="btn btn-info">Back</a>
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
    $('#txtOnly').keypress(function (e) {
        console.log(231232);
		// 	var regex = new RegExp("^[a-zA-Z]+$");
		// 	var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
		// 	if (regex.test(str)) {
		// 		return true;
		// 	}
		// 	else
		// 	{
		// 	    e.preventDefault();
        //         $('.error').show();
        //         $('.error').text('Please Enter Alphabate');
		// 	return false;
        // }
    });

</script>
@endpush
