@extends('layouts.backend')
@section('title', 'Add Survey Question')
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
                        <li class="breadcrumb-item active" aria-current="page">Add Survey New Question</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add Survey New Question</h5>
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

                    <form action="{{ route('admin.store-survey') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label class="form-label">Survey Ratting Type</label>
                                        <select name="type" class="form-select
                                        @error('type') is-invalid @enderror" required>
                                            <option value={{null}}>Select Type</option>
                                            <option value="rating" @if (old('type')=='rating')selected @endif>Star Rating</option>
                                            <option value="input" @if (old('type')=='input')selected @endif>Input Box Ratting </option>
                                        </select>
                                        @error('type')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Survey Question</label>
                                        <input type="text" name="survey"
                                            class="form-control @error('survey') is-invalid @enderror"
                                            value="{{old('survey')}}" placeholder="Enter survey" required>
                                        @error('survey')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Save Question</button>
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
