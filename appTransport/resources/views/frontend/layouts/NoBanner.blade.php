<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('meta')
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
    @include('frontend.partials.menu')
    @yield('content')

</div>
@include('frontend.partials.footer')
</body>
</html>
