@extends('layouts.backend')
@section('title') Website Setting @endsection
@section('content')

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Website Setting</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Setting</li>
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
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-primary" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#profileSetting"
                                                    role="tab" aria-selected="true">
                                                    <div class="d-flex align-items-center">
                                                        <div class="tab-icon"><i class='bx bx-user font-18 me-1'></i>
                                                        </div>
                                                        <div class="tab-title">Basic Setting</div>
                                                    </div>
                                                </a>
                                            </li>
                                            {{-- <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" href="#passwordSetting"
                                                    role="tab" aria-selected="false">
                                                    <div class="d-flex align-items-center">
                                                        <div class="tab-icon"><i class='bx bx-cog font-18 me-1'></i>
                                                        </div>
                                                        <div class="tab-title">Advance Setting</div>
                                                    </div>
                                                </a>
                                            </li> --}}

                                            {{-- <li class="nav-item" role="presentation">
                                                <a class="nav-link" data-bs-toggle="tab" href="#seoSetting" role="tab"
                                                    aria-selected="false">
                                                    <div class="d-flex align-items-center">
                                                        <div class="tab-icon"><i
                                                                class='bx bx-line-chart font-18 me-1'></i>
                                                        </div>
                                                        <div class="tab-title">Seo Setting</div>
                                                    </div>
                                                </a>
                                            </li> --}}
                                        </ul>
                                        <form action="{{route('admin.update-store-setting')}}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="tab-content py-3">
                                                <div class="tab-pane fade show active" id="profileSetting"
                                                    role="tabpanel">
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
                                                                <strong>Opps!</strong> There were some problems with
                                                                your
                                                                input.<br><br>
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif

                                                            <div class="row g-3">

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Company
                                                                        Name</label>
                                                                    <input type="text" name="company_name"
                                                                        class="form-control @error('company_name') is-invalid @enderror"
                                                                        value="{{$storeData->company_name}}"
                                                                        placeholder="Enter Company Name">
                                                                    @error('company_name')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                {{-- <div class="col-md-6">
                                                                    <label for="name" class="form-label">Company
                                                                        Slogan</label>
                                                                    <input type="text" name="company_slogan"
                                                                        class="form-control @error('company_slogan') is-invalid @enderror"
                                                                        value="{{$storeData->company_slogan}}"
                                                                        placeholder="Enter Company Slogan">
                                                                    @error('company_slogan')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div> --}}

                                                                <div class="col-md-5">
                                                                    <label for="name" class="form-label">Logo</label>
                                                                    <input type="file" name="logo"
                                                                        class="form-control @error('logo') is-invalid @enderror">
                                                                    @error('logo')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-1 pt-4">
                                                                    <div class="form-group">
                                                                        @if ($storeData->logo)
                                                                        <img src="{{ asset($storeData->logo) }}"
                                                                            id="img-view" style="height: 40px; width:40px;"
                                                                            alt="Empty Image!" />
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                {{-- <div class="col-md-5">
                                                                    <label for="name" class="form-label">Dark Logo</label>
                                                                    <input type="file" name="dark_logo"
                                                                        class="form-control @error('dark_logo') is-invalid @enderror">
                                                                    @error('dark_logo')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-1 pt-4">
                                                                    <div class="form-group">
                                                                        @if ($storeData->dark_logo)
                                                                        <img src="{{ asset($storeData->dark_logo) }}"
                                                                            id="img-view" style="height: 40px; width:40px;"
                                                                            alt="Empty Image!" />
                                                                        @endif
                                                                    </div>
                                                                </div> --}}

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Phone</label>
                                                                    <input type="text" name="phone"
                                                                        class="form-control @error('phone') is-invalid @enderror"
                                                                        value="{{$storeData->phone}}"
                                                                        placeholder="Enter Phone Number">
                                                                    @error('phone')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name"
                                                                        class="form-label">Copyright</label>
                                                                    <input type="text" name="copyright"
                                                                        class="form-control @error('copyright') is-invalid @enderror"
                                                                        value="{{$storeData->copyright}}"
                                                                        placeholder="Enter Copyright Text">
                                                                    @error('copyright')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">About
                                                                        Company</label>
                                                                    <textarea name="about_company"
                                                                        class="form-control @error('about_company') is-invalid @enderror"
                                                                        placeholder="Write About Company" rows="1"
                                                                        cols="20">{{$storeData->about_company}}</textarea>
                                                                    @error('about_company')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-12">
                                                                    <button type="submit"
                                                                        class="btn btn-primary px-5">Update</button>
                                                                </div>
                                                            </div>

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
                                                                <strong>Opps!</strong> There were some problems with
                                                                your
                                                                input.<br><br>
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif

                                                            <div class="row g-3">


                                                                <div class="col-md-5">
                                                                    <label for="name" class="form-label">Fav
                                                                        Icon</label>
                                                                    <input type="file" name="fav_icon"
                                                                        class="form-control @error('fav_icon') is-invalid @enderror">
                                                                    @error('fav_icon')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-1 pt-4">
                                                                    <div class="form-group">
                                                                        @if ($storeData->fav_icon)
                                                                        <img src="{{ asset($storeData->fav_icon) }}"
                                                                            id="img-view" style="height: 40px; width:40px;"
                                                                            alt="Empty Image!" />
                                                                        @endif
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-5">
                                                                    <label for="name" class="form-label">Not Found
                                                                        Image</label>
                                                                    <input type="file" name="notfound_image"
                                                                        class="form-control @error('notfound_image') is-invalid @enderror">
                                                                    @error('notfound_image')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-1 pt-4">
                                                                    <div class="form-group">
                                                                        @if ($storeData->notfound_image)
                                                                        <img src="{{ asset($storeData->notfound_image) }}"
                                                                            id="img-view" style="height: 40px; width:40px;"
                                                                            alt="Empty Image!" />
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-5">
                                                                    <label for="name" class="form-label">Payment Method
                                                                        Logo</label>
                                                                    <input type="file" name="payment_method_logo"
                                                                        class="form-control @error('payment_method_logo') is-invalid @enderror">
                                                                    @error('payment_method_logo')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-1 pt-4">
                                                                    <div class="form-group">
                                                                        @if ($storeData->payment_method_logo)
                                                                        <img src="{{ asset($storeData->payment_method_logo) }}"
                                                                            id="img-view" style="height: 40px; width:40px;"
                                                                            alt="Empty Image!" />
                                                                        @endif
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Mobile 2</label>
                                                                    <input type="text" name="mobile2"
                                                                        class="form-control @error('mobile2') is-invalid @enderror"
                                                                        value="{{$storeData->mobile2}}"
                                                                        placeholder="Enter Mobile2 Number">
                                                                    @error('mobile2')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Email 2</label>
                                                                    <input type="email" name="email2"
                                                                        class="form-control @error('email2') is-invalid @enderror"
                                                                        value="{{$storeData->email2}}"
                                                                        placeholder="Enter Email 2">
                                                                    @error('email2')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Email 3</label>
                                                                    <input type="email" name="email3"
                                                                        class="form-control @error('email3') is-invalid @enderror"
                                                                        value="{{$storeData->email3}}"
                                                                        placeholder="Enter Email 3">
                                                                    @error('email3')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Address
                                                                        2</label>
                                                                    <input type="text" name="address2"
                                                                        class="form-control @error('address2') is-invalid @enderror"
                                                                        value="{{$storeData->address2}}"
                                                                        placeholder="Enter Address 2">
                                                                    @error('address2')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Address
                                                                        3</label>
                                                                    <input type="text" name="address3"
                                                                        class="form-control @error('address3') is-invalid @enderror"
                                                                        value="{{$storeData->address3}}"
                                                                        placeholder="Enter Address 3">
                                                                    @error('address3')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                {{-- <div class="col-md-6">
                                                                    <label for="name" class="form-label">Free Shipping
                                                                        Sms</label>
                                                                    <textarea name="free_shipping_sms"
                                                                        class="form-control @error('free_shipping_sms') is-invalid @enderror"
                                                                        placeholder="Enter Free Shipping Sms" rows="1"
                                                                        cols="20"> {{$storeData->free_shipping_sms}}</textarea>
                                                                    @error('free_shipping_sms')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Support
                                                                        Sms</label>
                                                                    <textarea name="support_sms"
                                                                        class="form-control @error('support_sms') is-invalid @enderror"
                                                                        placeholder="Enter Support Sms" rows="1"
                                                                        cols="20">  {{$storeData->support_sms}}</textarea>
                                                                    @error('support_sms')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Money Return
                                                                        Sms</label>
                                                                    <textarea name="money_return_sms"
                                                                        class="form-control @error('money_return_sms') is-invalid @enderror"
                                                                        placeholder="Enter Money Return Sms" rows="1"
                                                                        cols="20"> {{$storeData->money_return_sms}}</textarea>
                                                                    @error('money_return_sms')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div> --}}

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Google
                                                                        Map</label>
                                                                    <input type="text" name="map"
                                                                        class="form-control @error('map') is-invalid @enderror"
                                                                        value="{{$storeData->map}}"
                                                                        placeholder="Enter Google Map">
                                                                    @error('map')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <label for="name" class="form-label">Messenger Live
                                                                        Chat</label>
                                                                    <input type="text" name="live_chat"
                                                                        class="form-control @error('live_chat') is-invalid @enderror"
                                                                        value="{{$storeData->live_chat}}"
                                                                        placeholder="Enter Messenger Live Chat Code">
                                                                    @error('live_chat')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="col-12">
                                                                    <button type="submit"
                                                                        class="btn btn-primary px-5">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="seoSetting" role="tabpanel">
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
                                                                <strong>Opps!</strong> There were some problems with
                                                                your
                                                                input.<br><br>
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                            @endif


                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Author</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="text" name="author"
                                                                        class="form-control @error('author') is-invalid @enderror"
                                                                        value="{{$storeData->author}}"
                                                                        placeholder="Enter Author Name" />
                                                                    @error('author')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Title</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="text" name="title"
                                                                        class="form-control @error('title') is-invalid @enderror"
                                                                        value="{{$storeData->title}}"
                                                                        placeholder="Enter Title" />
                                                                    @error('title')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Meta Description</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <textarea name="meta_description"
                                                                        class="form-control @error('meta_description') is-invalid @enderror"
                                                                        placeholder="Enter Meta Description" rows="1"
                                                                        cols="20">{{$storeData->meta_description}}</textarea>
                                                                    @error('meta_description')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Meta Keyword</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <textarea name="meta_keyword"
                                                                        class="form-control @error('meta_keyword') is-invalid @enderror"
                                                                        placeholder="Enter Meta Keyword" rows="1"
                                                                        cols="20">{{$storeData->meta_keyword}}</textarea>
                                                                    @error('meta_keyword')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Select Robots</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <select
                                                                        class="form-control @error('robots') is-invalid @enderror"
                                                                        name="robots">
                                                                        <option value="{{$storeData->robots}}" selected>
                                                                            {{$storeData->robots}}</option>
                                                                        <option value=" " disabled>Select Robots
                                                                        </option>
                                                                        <option value="index">Index</option>
                                                                        <option value="follow">Follow</option>
                                                                        <option value="index,follow">Index, Follow
                                                                        </option>
                                                                        <option value="noindex, nofollow">No index, No
                                                                            follow</option>
                                                                    </select>
                                                                    @error('robots')
                                                                    <strong class="text-danger"> {{$message}} </strong>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="submit" class="btn btn-primary px-4"
                                                                        value="Update Seo Info" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
