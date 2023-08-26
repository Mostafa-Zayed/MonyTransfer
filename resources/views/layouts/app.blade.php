<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rlt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <title>{{ config('app.name', 'Mony Transfer') }}</title>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>

<body>
    <div id="layout-wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')
        @yield('content')
        @include('layouts.footer')
    </div>
    @include('layouts.right_bar')
    <div class="rightbar-overlay"></div>
    <script src="{{asset('js/app.js')}}"></script>
    @yield('js')
</body>

</html>