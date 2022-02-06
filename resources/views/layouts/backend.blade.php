<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor3 color-header headercolor1">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Ecommerce Website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<title>{{config('app.company')}} | @yield('title')</title>
    @include('layouts.backend.includes.head-scripts')
</head>

<body>

        {{--Start Sidebar --}}
        @include('layouts.backend.includes.sidebar')
		<!--end sidebar wrapper -->

		<!--start header -->
        @include('layouts.backend.includes.header')
		<!--end header -->

        {{-- Start Main Content --}}
        @yield('content')
        {{-- End Main Content --}}

        {{-- Start Footer  --}}
        @include('layouts.backend.includes.footer')
        {{-- End footer  --}}

        {{-- Start Footer Scripts --}}
        @include('layouts.backend.includes.footer-scripts')
        {{-- End Fooetr Scripts --}}

</body>

</html>
