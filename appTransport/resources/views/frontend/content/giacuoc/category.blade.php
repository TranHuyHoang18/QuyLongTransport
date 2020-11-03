@extends('frontend.layouts.NoBanner')
@section('title')
    Giá cước {{$parent->name}}
@endsection
@section('content')
    <div class="container" style="margin-top: 2%">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="row">
                    <h5 style="color: #FFAA00"><a href="{{url('/')}}" style="color: #FFAA00">Trang chủ</a> <span style="color:#707070 "> ></span><a href="{{url('/gia-cuoc')}}" style="color: #FFAA00">Giá Cước </a><span style="color:#707070 "> ></span> <a href="{{url('/gia-cuoc/'.$parent->slug)}}"  style="color:#FFAA00 ">{{$parent->name}}</a></h5>
                </div>
                <div class="row" style="margin-left: 5%">
                     <h3 style="font-weight: bold; color: black">Giá cước {{$parent->name}}</h3>
                    <div class="row">
                        <h5 style="color: #b8b6b6;margin-left: 1%">Tổng hợp các thông tin ̣ {{$parent->name}} của công ty,... </h5>
                    </div>
                </div>
                @foreach($catess as $cate)
                    <div class="row">
                        <h4>{{$cate->name}}</h4>
                    </div>
                    @foreach($pages[$cate->id] as $page)
                        <div class="row" style="margin-left: 5%;margin-top: 2%">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-3">
                                <img src="{{ $page->image }}" style="width: 100%;max-height: 120px; border: 2px solid #8e8e8e; max-width: 200px ">
                            </div>
                            <div class="col-sm-7">
                                <div class="row" style="width: 75%;">
                                    <div class="col-sm-4">
                                        <label style="font-weight: bold">Tên: </label>
                                    </div>
                                    <div class="col-sm-8" style="color:#707070 ">
                                        {{$page->name}}
                                    </div>
                                </div>
                                <div class="row" style="width: 75%;">
                                    <div class="col-sm-4">
                                        <label style="font-weight: bold">Ngày đăng: </label>
                                    </div>
                                    <div class="col-sm-8" style="color:#707070 ">
                                        {{$page->created_at}}
                                    </div>
                                </div>
                                <div class="row" style="width: 75%;">
                                    <div class="col-sm-4">
                                        <label style="font-weight: bold">Views: </label>
                                    </div>
                                    <div class="col-sm-8" style="color:#707070 ">
                                        {{$page->views}}
                                    </div>
                                </div>
                                <div class="row" style="width: 75%;">
                                    <div class="col-sm-4">
                                        <label style="font-weight: bold">Comments: </label>
                                    </div>
                                    <div class="col-sm-8" style="color:#707070 ">
                                        {{$page->comments}}
                                    </div>
                                </div>
                                <div class="row" style="width: 75%;">
                                    <a href="{{url('gia-cuoc/'.$cate->slug.'/'.$page->slug)}}" ><button class="btn btn-success" style="text-align: center;float: right">Chi tiết</button></a>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    @endforeach
                @endforeach

            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection

