@extends('layouts.app')
@section('title') Register @endsection
@section('content')

{{-- <div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{route('home')}}" class="link">home</a></li>
<li class="item-link"><span>Register</span></li>
</ul>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
        <div class=" main-content-area">
            <div class="wrap-login-item ">
                <div class="register-form form-item ">

                    @if($message = Session::get('success'))
                    <div class="alert alert-success bg-info text-white">
                        {{ $message }}
                    </div>
                    @endif

                    @if($message = Session::get('error'))
                    <div class="alert alert-danger bg-info text-white">
                        {{ $message }}
                    </div>
                    @endif

                    <form class="form-stl" action="{{route('register.custom')}}" name="frm-login" method="POST">
                        @csrf

                        <fieldset class="wrap-title">
                            <h3 class="form-title text-center">Create an account</h3>
                        </fieldset>

                        <fieldset class="wrap-input">
                            <label for="frm-reg-lname">Name*</label>
                            <input type="text" id="frm-reg-lname" name="name" placeholder="Your Name"
                                class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}"
                                autofocus>
                            @error('name')
                            <strong class="text-danger"> {{$message}} </strong>
                            @enderror
                        </fieldset>

                        <fieldset class="wrap-input">
                            <label for="frm-reg-lname">Mobile*</label>
                            <input type="text" id="frm-reg-lname" name="mobile" placeholder="Enter Mobile Number"
                                class="form-control @error('mobile') is-invalid @enderror" value="{{old('mobile')}}"
                                autofocus>
                            @error('mobile')
                            <strong class="text-danger"> {{$message}} </strong>
                            @enderror
                        </fieldset>

                        <fieldset class="wrap-input">
                            <label for="frm-reg-email">Email Address*</label>
                            <input type="email" id="frm-reg-email" name="email" placeholder="Email address" name="phone"
                                class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}"
                                autofocus>
                            @error('email')
                            <strong class="text-danger"> {{$message}} </strong>
                            @enderror
                        </fieldset>

                        <fieldset class="wrap-input item-width-in-half left-item ">
                            <label for="frm-reg-pass">Password *</label>
                            <input type="password" id="frm-reg-pass" name="password" placeholder="Enter Password"
                                class="form-control @error('password') is-invalid @enderror" autofocus>
                            @error('password')
                            <strong class="text-danger"> {{$message}} </strong>
                            @enderror
                        </fieldset>

                        <fieldset class="wrap-input item-width-in-half ">
                            <label for="frm-reg-cfpass">Confirm Password *</label>
                            <input type="password" id="frm-reg-cfpass" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                placeholder="Confirm Password">
                            @error('password_confirmation')
                            <strong class="text-danger"> {{$message}} </strong>
                            @enderror
                        </fieldset>

                        <fieldset class="wrap-input ">
                            <label for="frm-reg-pass">Address *</label>
                            <textarea name="address" id="frm-reg-email" cols="12" rows="1" placeholder="Enter Address"
                                class="form-control @error('address') is-invalid @enderror" autofocus> </textarea>
                            @error('address')
                            <strong class="text-danger"> {{$message}} </strong>
                            @enderror
                        </fieldset>

                        <fieldset class="wrap-input">
                            <label class="remember-field">
                                <input class="frm-input " name="rememberme" id="rememberme" value="forever"
                                    type="checkbox"><span>Remember me</span>
                            </label>
                            <a class="link-function left-position" href="{{route('login')}}" title="Login">Already have
                                an account ?</a>
                        </fieldset>

                        <input type="submit" class="btn btn-sign" value="Register" name="register">
                    </form>
                </div>
            </div>
        </div>
        <!--end main products area-->
    </div>
</div>
<!--end row-->

</div> --}}
<!--end container-->

<!-- register -->
<section class="wrap__section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- register -->
                <!-- Form Register -->

                <div class="card mx-auto" style="max-width:520px;">
                    <article class="card-body">
                        <header class="mb-4">
                            <h4 class="card-title">Sign up</h4>
                        </header>

                        @if($message = Session::get('success'))
                        <div class="alert alert-success bg-info text-white">
                            {{ $message }}
                        </div>
                        @endif

                        @if($message = Session::get('error'))
                        <div class="alert alert-danger bg-info text-white">
                            {{ $message }}
                        </div>
                        @endif

                        <form action="{{route('register.custom')}}" method="POST">
                            @csrf
                            <div class="form-row">

                                <div class="col form-group">
                                    <label>Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter Your Name" value="{{old('name')}}" autofocus>
                                    @error('name')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="col form-group">
                                    <label>Mobile</label>
                                    <input type="text" name="mobile"
                                        class="form-control @error('mobile') is-invalid @enderror"
                                        placeholder="Enter Your Mobile Number" value="{{old('mobile')}}" autofocus>
                                    @error('mobile')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Enter Your Email" value="{{old('email')}}" autofocus>
                                @error('email')
                                <strong class="text-danger"> {{$message}} </strong>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" @error('password')
                                        is-invalid @enderror placeholder=" Password">
                                    @error('password')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Confirm password</label>
                                    <input type="password" name="password_confirmation"
                                        class="form-control @error('password_confirmation') is-invalid @enderror"
                                        placeholder="Confirm Password">
                                    @error('password_confirmation')
                                    <strong class="text-danger"> {{$message}} </strong>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" cols="12" rows="1" placeholder="Enter Address"
                                    class="form-control @error('address') is-invalid @enderror" autofocus> </textarea>
                                @error('address')
                                <strong class="text-danger"> {{$message}} </strong>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Register </button>
                            </div> <!-- form-group// -->
                            <div class="form-group">

                                <span class=""> Already Have an account ? <a
                                    href="{{route('login')}}">Sign In</a> </span>

                            </div> <!-- form-group end.// -->
                        </form>
                    </article><!-- card-body.// -->
                </div>
                <!-- end register -->
            </div>
        </div>
    </div>
</section>
<!-- end register -->

@endsection
