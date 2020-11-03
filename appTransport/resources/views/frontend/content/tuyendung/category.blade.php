@extends('frontend.layouts.HomePageLayout')
@section('title')
    {{$cate->name}}
@endsection
@section('meta')
    <meta name="keywords" content="{{$cate->seo_keywords}}">
    <meta name="description" content="{{$cate->seo_desc}}">
    <meta property="og:title" content="{{$cate->seo_title}}">
    <meta property="og:description" content="{{$cate->seo_desc}}">
@endsection
@section('content')
    <div class="menuHeader" style="background: white;padding-top: 20px;padding-bottom: 20px">
        <div class="uk-container uk-padding-remove">
            <div class="uk-text-left">
                <a href="{{url('/')}}" style="color: #FFAA00">Trang chủ </a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tuyen-dung')}}" style="color: #FFAA00">Tuyển dụng</a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tuyen-dung/danh-muc/'.$cate->slug)}}" style="color: #FFAA00">{{$name}}</a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 10px">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-Left uk-text-uppercase uk-margin-medium " style="margin-bottom: 1px">Thông tin {{$name}}</div>
                    <div class="uk-margin home__block__lienhe__desc">
                        Tổng hợp các thông tin {{$name}} của ccông ty,...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 5%">
        <div class="uk-container">
            <div class="" style="margin-left: 10%;width:85%">
                @foreach($pages as $page)
                    <div>
                        <div class="uk-card uk-card-default uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-2@l uk-card-hover" style="padding-top: 10px; padding-bottom: 10px;margin-top: 20px " uk-grid>
                            <a href="{{url('tuyen-dung/bai-viet/'.$slug.'/'.$page->slug)}}">
                                <div class="uk-card-media-left uk-cover-container">
                                    <img src="{{$page->image}}" alt=""  style="max-height:200px" uk-cover>
                                    <canvas width="350" height="200"></canvas>
                                </div>
                            </a>
                            <div class="uk-card-body">
                                <div>
                                    <div class="uk-text-large" style="font-size: medium"><i class="fa fa-quote-left"></i></div>
                                    <div class="uk-text-large uk-text-left" style="font-size: medium">Vị trí tuyển : {{$page->name}}</div>
                                    <div class="uk-text-large uk-text-left" style="font-size: medium">Hạn nôp : {{$page->date}}</div>
                                    <div class="uk-text-large uk-text-left" style="font-size: medium">Lượt xem  : {{$page->views}}</div>
                                    <div class="uk-text-large uk-text-left"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>Ngày đăng: {{$page->updated_at}}</div>
                                    <div class="uk-text-right"><a href="{{url('tuyen-dung/bai-viet/'.$slug.'/'.$page->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7" style="font-size: medium">Xem thêm</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection

