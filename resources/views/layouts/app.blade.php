<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.company')}} | @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <meta name="title" content="{{ Auth::User->title }}"/>
        <meta name="author" content="{{$OthersData->author}}">
        <meta name="keywords" content="{{$OthersData->meta_keyword}}">
        <meta name="description" content="{{$OthersData->meta_description}}">
        <meta name="robots" content="{{$OthersData->robots}}"> --}}

        <!-- Add site Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('frontend/assets/images/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{URL::asset('frontend/icon.png')}}">
        <meta name="theme-color" content="#030303">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- All CSS is here
        ============================================ -->
        @include('layouts.app.includes.head-scripts')
        @stack('css')
    </head>
    <body>
        {{-- Header Section Include --}}
        @include('layouts.app.includes.header')

        {{-- Main Content Here --}}
        @yield('content')

        {{-- Footer Section Include --}}
        @include('layouts.app.includes.footer')

        <!-- All JS is here -->
        @include('layouts.app.includes.footer-scripts')
    </body>
</html>
