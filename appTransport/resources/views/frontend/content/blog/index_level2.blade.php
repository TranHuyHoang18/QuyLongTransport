@extends('frontend.layouts.HomePageLayout')
@section('title')
    {{$cate2->name}}
@endsection
@section('meta')
    <meta name="keywords" content="{{$cate2->seo_keywords}}">
    <meta name="description" content="{{$cate2->seo_desc}}">
    <meta property="og:title" content="{{$cate2->seo_title}}">
    <meta property="og:description" content="{{$cate2->seo_desc}}">
@endsection
@section('style')
    .text1 a:hover{
    color: #ffaa00 !important;
    text-decoration: none !important;
    }
    .text1 {
    margin-bottom: 1px;
    }
@endsection
@section('content')
    <div class="menuHeader" style="background: white;padding-top: 20px;padding-bottom: 20px">
        <div class="uk-container uk-padding-remove">
            <div class="uk-text-left">
                <a href="{{url('/')}}" style="color: #FFAA00">Trang chủ </a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tin-tuc')}}" style="color: #FFAA00">Tin Tức</a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tin-tuc/'.$cate1->slug)}}" style="color: #FFAA00">{{$cate1->name}}</a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tin-tuc/'.$cate2->slug)}}" style="color: #FFAA00">{{$cate2->name}}</a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 10px">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-Left uk-text-uppercase uk-margin-medium text1" style="margin-bottom: 1px"><a href="{{url('/tin-tuc/'.$cate2->slug)}}" style="color:#707070">{{$cate2->name}}</a></div>
                    <div class="uk-margin home__block__lienhe__desc uk-text-left@m" style="margin-top: 10px;color:#b8b6b6 ">
                        Tổng hợp các thông tin giá cước vận chuyển hàng ngày, hướng dẫn vận chuyển, tham khảo hợp đồng, chứng từ hàng hóa ...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section" style="padding-top: 1px">
        <div class="uk-container">
            <div class="">
                @foreach($categories as $category)
                    <div class="home__title uk-text-left uk-text-uppercase text1" style="margin-top: 50px">
                        <a href="{{url('tin-tuc/'.$category->slug)}}" style="font-size: medium;color:#707070; border-bottom: 3px solid #ffaa00;margin-left: 20px">{{$category->name}}</a>
                    </div>
                    <?php
                        $pageks = $pages[$category->id];
                    ?>
                    <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l" uk-grid>
                        @foreach($pageks as $page)
                            <div>
                                <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="margin-top: 20px;">
                                    <div class="uk-cover-container">
                                        <a href="{{url('tin-tuc/bao-viet/'.$page->slug)}}">
                                            <img src="{{$page->image}}" alt="" uk-cover>
                                            <canvas width="600" height="400"></canvas>
                                        </a>
                                    </div>
                                    <div class="uk-card-body uk-padding-small">
                                        <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$page->name}}</div>
                                        <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$page->updated_at}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

