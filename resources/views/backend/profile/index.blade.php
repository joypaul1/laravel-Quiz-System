@extends('layouts.backend')
@section('title') Profile @endsection
@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">User Profile</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>
            {{-- <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div> --}}
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ asset($profileData->profile) }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                    <div class="mt-3">
                                        <h4>{{Auth::User()->name}}</h4>
                                        <p class="text-secondary mb-1">{{Auth::User()->email}}</p>
                                        <p class="text-muted font-size-sm">{{Auth::User()->address}}</p>
                                        <a href="{{route('home')}}" target="_blank" class="btn btn-outline-primary btn-block">Frontend</a>
                                    </div>
                                </div>
                                {{-- <hr class="my-4" /> --}}
                                {{-- <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                                        <span class="text-secondary">https://codervent.com</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github me-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                                        <span class="text-secondary">codervent</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter me-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                                        <span class="text-secondary">@codervent</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram me-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                                        <span class="text-secondary">codervent</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                                        <span class="text-secondary">codervent</span>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-primary" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#profileSetting" role="tab" aria-selected="true">
                                                    <div class="d-flex align-items-center">
                                                        <div class="tab-icon"><i class='bx bx-user font-18 me-1'></i>
                                                        </div>
                                                        <div class="tab-title">Profile</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" href="#passwordSetting" role="tab" aria-selected="false">
                                                    <div class="d-flex align-items-center">
                                                        <div class="tab-icon"><i class='bx bx-cog font-18 me-1'></i>
                                                        </div>
                                                        <div class="tab-title">Password Change</div>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="profileSetting" role="tabpanel">
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
                                                        <form action="{{route('admin.profile-update')}}" method="post" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Profile Picture</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                                <input type="file" name="profile" class="form-control @error('profile') is-invalid @enderror"/>
                                                                @error('profile')
                                                                 <strong class="text-danger"> {{$message}} </strong>
                                                                @enderror
                                                            </div>

                                                            <div class="col-sm-2 text-secondary">
                                                                <div class="form-group">
                                                                    @if ($profileData->profile)
                                                                    <img src="{{ asset($profileData->profile) }}"
                                                                        id="img-view" style="height: 40px; width:40px;"
                                                                        alt="Empty Image!" />
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Full Name</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$profileData->name}}" />
                                                                @error('name')
                                                                 <strong class="text-danger"> {{$message}} </strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Email</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$profileData->email}}" />
                                                                @error('email')
                                                                 <strong class="text-danger"> {{$message}} </strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Mobile</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="text" name="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{$profileData->mobile}}" />
                                                                @error('mobile')
                                                                 <strong class="text-danger"> {{$message}} </strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Address</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{$profileData->address}}" />
                                                                @error('address')
                                                                 <strong class="text-danger"> {{$message}} </strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-3"></div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="passwordSetting" role="tabpanel">
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

                                                        <form action="{{route('admin.password-update')}}" method="post">
                                                        @csrf
                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Current Password</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" value="" placeholder="Current Password" />

                                                                @error('current_password')
                                                                <strong class="text-danger"> {{$message}} </strong>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">New Password</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="" placeholder="New Password" />
                                                                @error('password')
                                                                <strong class="text-danger"> {{$message}} </strong>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-sm-3">
                                                                <h6 class="mb-0">Re-Type New
                                                                    Password</h6>
                                                            </div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" value="" placeholder="Re-Type New Password" />
                                                                @error('password_confirmation')
                                                                <strong class="text-danger"> {{$message}} </strong>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-3"></div>
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="submit" class="btn btn-primary px-4" value="Update Password" />
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="d-flex align-items-center mb-3">Project Status</h5>
                                        <p>Web Design</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Website Markup</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>One Page</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Mobile Template</p>
                                        <div class="progress mb-3" style="height: 5px">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Backend API</p>
                                        <div class="progress" style="height: 5px">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->

@endsection
