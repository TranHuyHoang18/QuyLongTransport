<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>
        @yield('title')
    </title>
    @include('qtv.partial.head')
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
        .sidebar
        {
            width: 90%;
            background: #666666;
            float: left;
            margin-left: -15px;
            padding-top: 5%;
        }
        .sidebar ul li
        {
            list-style: none;
            color: white;
            margin-top: 10%;
            padding-bottom: 5%;
            font-size: 20px;
            margin-left: 0px;
            float: left;
        }

    </style>
</head>
<body>
<div class="container">
    <!--headder-->
    @include('qtv.partial.header')
    <div class="row" style="background: #E8E8E8;padding-bottom: 5%">
        <!--Sidebar -->
        <div class="row-left" style="width: 23%;float: left;margin-left: 15px">
            @include('qtv.partial.sidebar')
        </div>
        <div class="row-right" style="width: 75%;float: right;">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>

