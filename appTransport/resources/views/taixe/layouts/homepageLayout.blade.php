<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>
        @yield('title')
    </title>
    @include('taixe.partial.head')
    <style type="text/css">
        @yield('style')
        .container
        {
            font-family: "Segoe UI";
            font-size: 16px;
            width: 100%;
            padding-bottom: 5%;
            width: 360px;
            margin: 0px auto;
        }
    </style>
</head>
<body STYLE="background: #E8E8E8;">
<div class="container">
    <!--headder-->
    @include('taixe.partial.header')
    <div class="row" style="background: #E8E8E8;padding-bottom: 5%;" >
        @yield('content')
    </div>
</div>
</body>
</html>

