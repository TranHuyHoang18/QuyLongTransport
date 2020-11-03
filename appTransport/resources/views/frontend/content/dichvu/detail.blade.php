@extends('frontend.layouts.HomePageLayout')
@section('title')
    {{$parent->name}}
@endsection
@section('meta')
    <meta name="keywords" content="{{$page->keywords}}">
    <meta name="description" content="{{$page->description}}">
    <meta property="og:title" content="{{$page->title}}">
    <meta property="og:description" content="{{$page->description}}">
@endsection
@section('content')
    <div class="menuHeader" style="background: white;padding-top: 20px;padding-bottom: 20px">
        <div class="uk-container uk-padding-remove">
            <div class="uk-text-left">
                <a href="{{url('/')}}" style="color: #FFAA00">Trang chủ </a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/dich-vu')}}" style="color: #FFAA00">Dịch vụ</a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/dich-vu/'.$parent->slug)}}" style="color: #FFAA00">{{$parent->name}}  </a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px" >
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span> {{$page->name}}</span></div>
                    <div class="uk-text-right" style="color: #b8b6b6;font-family: 'Segoe UI'"> Ngày đăng : {{$page->created_at}}</div>
                    <div >
                        <?php
                        echo $page->desc;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

