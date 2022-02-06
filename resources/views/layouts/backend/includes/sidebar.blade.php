<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <a href="{{route('admin.dashboard')}}">
                    <img src="{{ URL::asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo Image">
                </a>
            </div>
            <div>
                <a href="{{route('admin.dashboard')}}">
                <h4 class="logo-text">{{config('app.company')}}</h4>
                </a>
            </div>

            <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">

            <li>
                <a href="{{route('admin.dashboard')}}">
                    <div class="parent-icon"><i class='bx bx-home'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-credit-card-front'></i>
                    </div>
                    <div class="menu-title">Question Manage</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin.list-question')}}"><i class="bx bx-right-arrow-alt"></i>Question List</a>
                    </li>
                    <li> <a href="{{route('admin.add-question')}}"><i class="bx bx-right-arrow-alt"></i>Add Question </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-credit-card-front'></i>
                    </div>
                    <div class="menu-title">Banner Manage</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin.banner-list')}}"><i class="bx bx-right-arrow-alt"></i>Banner List</a>
                    </li>
                    <li> <a href="{{route('admin.add-banner')}}"><i class="bx bx-right-arrow-alt"></i>Add Banner</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{route('admin.workshop')}}">
                    <div class="parent-icon"><i class='bx bx-book'></i>
                    </div>
                    <div class="menu-title">Workshop</div>
                </a>
            </li>

            <li>
                <a href="{{route('admin.introduction')}}">
                    <div class="parent-icon"><i class='bx bx-detail'></i>
                    </div>
                    <div class="menu-title">Introduction</div>
                </a>
            </li>
            <li>
                <a href="{{route('admin.user.survey')}}">
                    <div class="parent-icon"><i class='bx bx-detail'></i>
                    </div>
                    <div class="menu-title">User Servery</div>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-message'></i>
                    </div>
                    <div class="menu-title">Survey</div>
                </a>
                <ul>
                    <li> <a href="{{ route('admin.list-survey') }}"><i class="bx bx-right-arrow-alt"></i>Question List</a>
                    </li>
                    <li> <a href="{{ route('admin.add-survey') }}"><i class="bx bx-right-arrow-alt"></i>Add Question</a>
                    </li>
                </ul>
            </li>

            <li class="menu-label">Setting</li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class='bx bx-cog'></i>
                    </div>
                    <div class="menu-title">Setting</div>
                </a>
                <ul>
                    <li> <a href="{{route('admin.profile')}}"><i class='bx bx-user'></i> Profile Setting</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="{{route('signout')}}">
                    <div class="parent-icon"><i class='bx bx-log-out-circle'></i>
                    </div>
                    <div class="menu-title">Logout</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
