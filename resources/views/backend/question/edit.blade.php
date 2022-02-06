@extends('layouts.backend')
@section('title', 'Edit Question')
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
                        <li class="breadcrumb-item active" aria-current="page">Edit Question</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Question</h5>
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
                    {{-- @dd($question); --}}
                    <form action="{{ route('admin.update-question', $question->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">

                                    <div class="mb-3">
                                        <label class="form-label">Question Set Type</label>
                                        <select name="set_no" class="form-select
                                        @error('set_no') is-invalid @enderror">
                                            <option value={{null}}>Select Type</option>
                                            <option value="1" @if ( $question->set_no == 1)selected @endif
                                                >Set One</option>
                                            <option value="2" @if ($question->set_no == 2)selected @endif
                                                >Set Two</option>
                                        </select>
                                        @error('set_no')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Topic</label>
                                        <input type="text" name="topic"
                                            class="form-control @error('topic') is-invalid @enderror"
                                            value="{{old('topic',  $question->topic)}}" placeholder="Enter Topic">
                                        @error('topic')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Question</label>
                                        <input type="text" name="question"
                                            class="form-control @error('question') is-invalid @enderror"
                                            value="{{old('question', $question->question)}}"
                                            placeholder="Enter sub title">
                                        @error('question')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-row">
                                            @foreach ($question->options as $option)
                                            <div class="col-md-6">
                                                <label for="inputCity">Option {{ $option->key??" " }}</label>
                                                <input type="text" name="options[]" class="form-control"
                                                    value="{{ $option->option }}" required placeholder="Enter option A">
                                            </div>
                                            @endforeach
                                        </div>

                                        @error('question')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Answer Key</label>
                                        <input type="text" id="txtOnly" name="answer_key"
                                            class="form-control @error('answer_key') is-invalid @enderror"
                                            value="{{old('answer_key', ($question->answer_key))}}"
                                            placeholder="Enter answer key (Exmp: A,B,C,D)">
                                        @error('answer_key')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Difficulty Rating (0-100) </label>
                                        <input type="text" name="difficulty_rating" class="form-control
                                    @error('difficulty_rating') is-invalid @enderror"
                                            value="{{old('difficulty_rating', $question->difficulty_rating)}}"
                                            placeholder="Enter difficulty rating" onkeypress="return (event.charCode !=8 && event.charCode == 0 ||
                                     (event.charCode >= 48 && event.charCode <= 57))">
                                        @error('difficulty_rating')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">serial No</label>
                                        <input type="text" name="serial_no"
                                            class="form-control @error('serial_no') is-invalid @enderror"
                                            value="{{old('serial_no', $question->serial_no)}}"
                                            placeholder="Enter serial no(Exm:1,2,3..)" onkeypress="return (event.charCode !=8 && event.charCode == 0 ||
                                    (event.charCode >= 48 && event.charCode <= 57))">
                                        @error('serial_no')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>
                                    {{-- {{old('status')}} --}}

                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" class="form-select @error('status') is-invalid @enderror">
                                            <option>Select Status</option>
                                            <option value="1" @if($question->status == 1 ) selected @endif>Active
                                            </option>
                                            <option value="0" @if($question->status == 0 ) selected @endif>Inactive
                                            </option>
                                        </select>
                                        @error('status')
                                        <strong class="text-danger"> {{$message}} </strong>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update Question</button>
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
