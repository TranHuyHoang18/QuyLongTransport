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
                    <div class="home__title uk-text-Left uk-text-uppercase uk-margin-medium text1" style="margin-bottom: 1px"><a href="{{url('/tin-tuc/'.$cate3->slug)}}" style="color:#707070">{{$cate3->name}}</a></div>
                    <div class="uk-margin home__block__lienhe__desc uk-text-left@m" style="margin-top: 10px;color:#b8b6b6 ">
                        Tổng hợp các thông tin giá cước vận chuyển hàng ngày, hướng dẫn vận chuyển, tham khảo hợp đồng, chứng từ hàng hóa ...
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
                        <div class="uk-card uk-card-default uk-child-width-1-2 uk-card-hover" style="padding-top: 10px; padding-bottom: 10px;margin-top: 20px " uk-grid>
                            <a href="{{url('tin-tuc/bai-viet/'.$page->slug)}}">
                                <div class="uk-card-media-left uk-cover-container">
                                    <img src="{{$page->image}}" alt=""  style="max-width:350px" uk-cover>
                                    <canvas width="300" height="200"></canvas>
                                </div>
                            </a>
                            <div class="uk-card-body">
                                <div class="uk-text-large uk-text-uppercase" style="font-size: medium">{{$page->name}}</div>
                                <div class="uk-text-large" style="font-size: medium"><i class="fa fa-quote-left"></i> <?php echo $page->intro ?></div>
                                <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$page->updated_at}}</div>
                                <div class="uk-text-right"><a href="{{url('tin-tuc/bai-viet/'.$page->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7" style="font-size: medium">Xem thêm</a></div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection

