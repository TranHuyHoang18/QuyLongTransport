@extends('qtv.layouts.homepageLayout')
@section('title')
    Trang quản trị viên
@endsection
@section('content')
    <h1> Xin chào <?php echo Auth::user()->name?></h1>
@endsection
