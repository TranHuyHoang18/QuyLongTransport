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
    @include('quanly.partial.header')
    <div class="row" style="background: #E8E8E8">
        <!--Sidebar -->
        <div class="col-sm-3" style="float: left">
            @include('quanly.partial.sidebar')
        </div>
        <!-- maincontent -->
        <div class="col-sm-9">
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>

