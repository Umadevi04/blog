<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('webadmin/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('webadmin/css/pace.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name', 'Laravel')}}</title>
    <!-- CSS -->
    @include('webadmin.layouts.partials.css_scripts')
    @stack('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- HEADER & TOP NAVIGATION -->
        @include('webadmin.layouts.partials.navbar')
            <!-- SIDEBAR -->
            @include('webadmin.layouts.partials.sidebar')
                @yield('breadcrumb')
                {{-- @include('flash::message') --}}
                @yield('content')
        </div>
        <!-- Scripts -->
        @include('webadmin.layouts.partials.js_scripts')
        @stack('js')
    </body>
</html>
