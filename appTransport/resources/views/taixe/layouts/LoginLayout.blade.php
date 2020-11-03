<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>
        @yield('title')
    </title>
    @include('backend.partial.head')
    <style type="text/css">
        @yield('style')
        .container
        {
            font-family: "Segoe UI";
            font-size: 16px;
            width: 100%;

        }
        .row
        {
            width: 100%;
            font-family: "Segoe UI";
            margin-left: 0px;
            margin-right: 0px;
        }
        .topk ul li
        {
            float:left;
            margin-left: 20px;
            list-style: none;
            margin-top: 20px;
        }
        .topk
        {
            width: 90%;
            float: right;
            background:#4D4D4D;
            height: 100%;
        }

    </style>
</head>
<body>
<div class="container" style="background: #F9F9F9;">
    <!--headder-->
    <div class="row" style="margin-top: 5%">
        @yield('content')
    </div>
</div>
</body>
</html>

