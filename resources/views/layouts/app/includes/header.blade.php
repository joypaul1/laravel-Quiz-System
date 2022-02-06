<!-- loading -->
<div class="loading-container">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <ul class="list-unstyled">
            <li>
                <img src="{{URL::asset('frontend/assets/images/placeholder/loading.png')}}" alt="Alternate Text"
                    height="100" />

            </li>
            <li>

                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>

                </div>

            </li>
            <li>
                <p>Loading</p>
            </li>
        </ul>
    </div>
</div>
<!-- End loading -->

<!-- Header news -->
<header class="bg-light ">
    <!-- Navbar top -->
    <div class="topbar d-sm-block">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="topbar-left">
                       @auth
                        {{-- <div class="topbar-text">
                            Hi , {{ auth()->user()->name ??' ' }} . Welcome to our website!
                        </div> --}}
                       @endauth


                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="list-unstyled topbar-right">
                        <ul class="topbar-link">
                            {{-- <li><a href="{{route('login')}}" title="Login">Login</a></li>
                            <li><a href="{{route('register')}}" title="Register">Register</a></li> --}}
                            @guest
                            {{-- The user is not authenticated... --}}
                            <li><a href="{{route('login')}}" title="Login">Login</a></li>
                            <li><a href="{{route('register')}}" title="Register">Register</a></li>
                            @endguest

                            @auth
                            {{--The user is authenticated... --}}
                            <li><a href="{{route('home')}}" title="Workshop">{{ auth()->user()->name ??' ' }}</a></li>
                            <li><a href="{{route('workshop')}}" title="Workshop">Workshop</a></li>
                            <li><a href="{{route('user-deshboard')}}" title="Dashboard">Dashboard</a></li>
                            <li><a href="{{route('signout')}}" title="Logout">Logout</a></li>
                            @endauth
                        </ul>
                        {{-- <ul class="topbar-sosmed">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar top -->

    <!-- Navbar -->
    {{-- <div class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <figure class="pt-4 pb-4 mb-0 text-center my-auto d-none d-sm-block">
                        <a href="{{route('home')}}">
    <img src="{{URL::asset('frontend/assets/images/placeholder/logo.jpg')}}" alt="" class="img-fluid logo">
    </a>
    </figure>
    </div>

    </div>
    </div>
    </div> --}}

    <!-- Navbar menu  -->
    <div class="navigation-wrap navigation-shadow bg-white ">

        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
            <div class="container">
                <div class="offcanvas-header">
                    <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                        <span class="navbar-toggler-icon"></span>
                    </div>
                </div>
                {{-- <figure class="mb-0 mx-auto d-block d-sm-none">
                    <a href="{{route('home')}}">
                        <img src="{{URL::asset('frontend/assets/images/placeholder/logo.jpg')}}" alt=""
                            class="img-fluid logo-mobile">
                    </a>
                </figure> --}}
                <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                    {{-- <a href="{{route('home')}}">
                        <img src="{{URL::asset('frontend/assets/images/placeholder/logo.jpg')}}" alt=""
                            class="img-fluid logo">
                    </a> --}}
                    <ul class="navbar-nav mx-auto">

                        @guest
                        {{-- The user is not authenticated... --}}
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}"> Home </a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{route('about')}}"> About Us </a></li> --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="{{route('contact')}}"> Contact </a></li> --}}
                        @endguest

                        @auth
                        {{--The user is authenticated... --}}
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}"> Home </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('introduction')}}"> Introduction </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('setOne')}}"> Question Set One </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('setTwo')}}"> Question Set Two </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('survey')}}"> Survey </a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{route('about')}}"> About Us</a></li> --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="{{route('contact')}}"> Contact </a></li> --}}
                        @endauth


                        {{-- <li class="nav-item"><a class="nav-link" href="{{route('home')}}"> Home </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}"> Introduction </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Question Set One </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> Question Set Two </a></li> --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="{{route('about')}}"> About </a></li> --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="{{route('blog')}}"> Blogs </a></li> --}}
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Blogs </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a class="dropdown-item" href="{{route('blog')}}"> Blog List </a>
                        </li>
                        <li><a class="dropdown-item" href="{{route('blog_details')}}"> Blog Details </a>
                        </li>
                    </ul>
                    </li> --}}
                    {{-- <li class="nav-item"><a class="nav-link" href="{{route('contact')}}"> Contact </a></li> --}}


                    </ul>

                    <!-- Search bar.// -->
                    {{-- <ul class="navbar-nav ">
                        <li class="nav-item search hidden-xs hidden-sm "> <a class="nav-link" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul> --}}
                    <!-- Search content bar.// -->
                    {{-- <div class="top-search navigation-shadow">
                        <div class="container">
                            <div class="input-group ">
                                <form action="#">

                                    <div class="row no-gutters mt-3">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0"
                                                type="search" value="" placeholder="Search " id="example-search-input4">
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                href="/search-result.html">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Search content bar.// -->
                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>
    </div>
    <!-- End Navbar menu  -->

    <!-- Navbar sidebar menu  -->
    <div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-aside" role="document">
            <div class="modal-content">
                {{-- <div class="modal-header">
                    <div class="widget__form-search-bar  ">
                        <div class="row no-gutters">
                            <div class="col">
                                <input class="form-control border-secondary border-right-0 rounded-0" value=""
                                    placeholder="Search">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> --}}
                <div class="modal-body">
                    <nav class="list-group list-group-flush">
                        <ul class="navbar-nav ">

                            <li class="nav-item"><a class="nav-link  text-dark" href="{{route('home')}}"> Home </a>
                            @auth
                                <li class="nav-item"><a class="nav-link  text-dark" href="{{route('introduction')}}"> Introduction </a></li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="{{route('workshop')}}"> Workshop </a></li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="{{route('setOne')}}"> Question Set One </a></li>
                                <li class="nav-item"><a class="nav-link  text-dark" href="{{route('setTwo')}}"> Question Set Two </a></li>
                            @endauth
                            {{-- <li class="nav-item"><a class="nav-link  text-dark" href="{{route('about')}}"> About Us </a> --}}
                                {{-- <li class="nav-item"><a class="nav-link  text-dark" href="{{route('blog')}}"> Blogs
                                </a>

                            <li class="nav-item dropdown">
                                <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                    Blogs
                                </a>
                                <ul class="dropdown-menu dropdown-menu-left">
                                    <li><a class="dropdown-item text-dark" href="{{route('blog')}}"> Blog List </a>
                                    </li>
                                    <li><a class="dropdown-item text-dark" href="{{route('blog_details')}}"> Blog
                                            Details </a>
                                    </li>
                                </ul>
                            </li> --}}

                            {{-- <li class="nav-item"><a class="nav-link  text-dark" href="{{route('contact')}}"> Contact Us
                                </a>
                            </li> --}}
                        </ul>

                    </nav>
                </div>
                <div class="modal-footer">
                    <p>© 2022 <a href="#"
                            title="Premium WordPress news &amp; magazine theme">{{config('app.company')}}</a>
                        -
                        Premium template news, blog & magazine &amp;
                        magazine theme by <a href="#" title="retenvi">{{config('app.company')}}</a>.</p>
                </div>
            </div>
        </div> <!-- modal-bialog .// -->
    </div> <!-- modal.// -->
    <!-- End Navbar sidebar menu  -->
    <!-- End Navbar -->


</header>
<!-- End Header news -->
