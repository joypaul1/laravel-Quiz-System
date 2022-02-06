@extends('layouts.app')
@section('title') Login @endsection
@push('css')
<style>

</style>
@endpush
@section('content')

{{-- <div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>login</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
            <div class=" main-content-area">
                <div class="wrap-login-item ">
                    <div class="login-form form-item form-stl">

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

<form name="frm-login" action="{{ route('login-info') }}" method="POST">
    @csrf

    <fieldset class="wrap-title">
        <h3 class="form-title">Log in to your account</h3>
    </fieldset>

    <fieldset class="wrap-input">
        <label for="frm-login-uname">Email Address:</label>
        <input type="email" id="frm-login-uname" name="email" placeholder="Type your email address"
            class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" autofocus>
        @error('email')
        <strong class="text-danger"> {{$message}} </strong>
        @enderror
    </fieldset>

    <fieldset class="wrap-input">
        <label for="frm-login-pass">Password:</label>
        <input type="password" id="frm-login-pass" name="password"
            class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password" autofocus>
        @error('password')
        <strong class="text-danger"> {{$message}} </strong>
        @enderror
    </fieldset>

    <fieldset class="wrap-input">
        <label class="remember-field">
            <input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Remember
                me</span>
        </label>
        <a class="link-function left-position" href="{{route('register')}}" title="Register">Don't have an account ?</a>
    </fieldset>

    <input type="submit" class="btn btn-submit" value="Login" name="submit">

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


<!-- login -->
<section class="wrap__section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Form Login -->
                <div class="card mx-auto" style="max-width: 380px;">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sign in</h4>

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

                        <form name="frm-login" action="{{ route('login-info') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" value="{{old('email')}}" autofocus>
                                @error('email')
                                 <strong class="text-danger"> {{$message}} </strong>
                                @enderror
                            </div>


                            <div class="form-group">
                                <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password">
                                @error('password')
                                    <strong class="text-danger"> {{$message}} </strong>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                                        class="custom-control-input" checked="">
                                    <span class="custom-control-label"> Remember </span>
                                </label>
                            </div> <!-- form-group form-check .// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"> Login </button>
                            </div> <!-- form-group// -->
                        </form>
                    </div> <!-- card-body.// -->
                </div> <!-- card .// -->

                <p class="text-center mt-4">Don't have account? <a href="{{route('register')}}">Sign up</a></p>
            </div>
        </div>
    </div>
</section>
<!-- end login -->


@endsection
