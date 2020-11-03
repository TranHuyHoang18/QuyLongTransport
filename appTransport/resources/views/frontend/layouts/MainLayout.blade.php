<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>
        @yield('title')
    </title>
    @include('frontend.partials.head')
    <style type="text/css">
        @yield('style')
    </style>
</head>
<body>
<div class="container">
    @include('frontend.partials.header')
    @yield('content')
    @include('frontend.partials.footer')
</div>
</body>
</html>
