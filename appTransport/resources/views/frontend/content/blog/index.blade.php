@extends('frontend.layouts.HomePageLayout')
@section('title')
    {{$seo->name}}
@endsection
@section('meta')
    <meta name="keywords" content="{{$seo->seo_keyword}}">
    <meta name="description" content="{{$seo->seo_desc}}">
    <meta property="og:title" content="{{$seo->seo_title}}">
    <meta property="og:description" content="{{$seo->seo_desc}}">
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
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 10px">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-Left uk-text-uppercase uk-margin-medium text1" style="margin-bottom: 1px"><a href="{{url('/tin-tuc')}}" style="color:#707070">tin tức vận chuyển</a></div>
                    <div class="uk-text-left uk-text-uppercase uk-margin-medium uk-text-large text1">
                        <a href="{{url('tin-tuc/cam-nang-van-chuyen')}}" style="color:#b8b6b6;margin-right: 20px;font-size: medium">CẨM NANG VẬN CHUYỂN</a>
                        <a href="{{url('tin-tuc/blog-xe-may')}}" style="color:#b8b6b6;margin-right: 20px;font-size: medium">BLOG XE MÁY</a>
                        <a href="{{url('tin-tuc/blog-o-to')}}" style="color:#b8b6b6;margin-right: 20px;font-size: medium">BLOG Ô TÔ</a>
                        <a href="{{url('tin-tuc/blog-thu-cung')}}" style="color:#b8b6b6;margin-right: 20px;font-size: medium">BLOG THÚ CƯNG</a>
                        <a href="{{url('tin-tuc/blog-quy-long')}}" style="color:#b8b6b6;margin-right: 20px;font-size: medium">BLOG QUY LONG</a>
                    </div>
                    <div class="uk-margin home__block__lienhe__desc uk-text-left@m" style="margin-top: 10px;color:#b8b6b6 ">
                        Trang tổng hợp tin tức, cẩm nang vận chuyển hàng ngày...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section">
        <div class="uk-container">

            <div class="">
                @foreach($main_cates as $cate)
                    <div class="home__title uk-text-left uk-text-uppercase text1" style="margin-top: 50px">
                        <a href="{{url('tin-tuc/'.$cate->slug)}}" style="font-size: medium;color:#707070; border-bottom: 3px solid #ffaa00;margin-left: 20px">{{$cate->name}}</a>
                    </div>
                    <?php
                        $page = $pages[$cate->id];
                    ?>
                    <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
                        <div>
                            @if(count($page)>0)
                                <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="max-width: 450px;margin-top: 20px;">
                                    <div class="uk-cover-container">
                                        <a href="{{url('tin-tuc/bai-viet/'.$page[0]->slug)}}">
                                            <img src="{{ $page[0]->image }}" alt="" uk-cover>
                                            <canvas width="600" height="400"></canvas>
                                        </a>
                                    </div>
                                    <div class="uk-card-body uk-padding-small">
                                        <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$page[0]->name}}</div>
                                        <div class="home__block__tintuc__card__title" style="color:#727171"><?php echo $page[0]->intro ?></div>
                                        <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$page[0]->created_at}}</div>
                                        <div class="uk-text-right"><a href="{{url('tin-tuc/bai-viet/'.$page[0]->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div>
                            <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
                                <div>
                                    @if(count($page)>1)
                                        <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="margin-top: 20px;">
                                            <div class="uk-cover-container">
                                                <a href="{{url('tin-tuc/bai-viet/'.$page[1]->slug)}}">
                                                    <img src="{{ $page[1]->image }}" alt="" uk-cover>
                                                    <canvas width="600" height="400"></canvas>
                                                </a>
                                            </div>
                                            <div class="uk-card-body uk-padding-small">
                                                <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$page[1]->name}}</div>
                                                <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$page[1]->created_at}}</div>
                                                <div class="uk-text-right"><a href="{{url('tin-tuc/bai-viet/'.$page[1]->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    @if(count($page)>2)
                                        <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="margin-top: 20px;">
                                            <div class="uk-cover-container">
                                                <a href="{{url('tin-tuc/bai-viet/'.$page[2]->slug)}}">
                                                    <img src="{{ $page[2]->image }}" alt="" uk-cover>
                                                    <canvas width="600" height="400"></canvas>
                                                </a>
                                            </div>
                                            <div class="uk-card-body uk-padding-small">
                                                <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$page[2]->name}}</div>
                                                <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$page[2]->created_at}}</div>
                                                <div class="uk-text-right"><a href="{{url('tin-tuc/bai-viet/'.$page[2]->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    @if(count($page)>3)
                                        <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="margin-top: 20px;">
                                            <div class="uk-cover-container">
                                                <a href="{{url('tin-tuc/bai-viet/'.$page[3]->slug)}}">
                                                    <img src="{{ $page[3]->image }}" alt="" uk-cover>
                                                    <canvas width="600" height="400"></canvas>
                                                </a>
                                            </div>
                                            <div class="uk-card-body uk-padding-small">
                                                <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$page[3]->name}}</div>
                                                <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$page[3]->created_at}}</div>
                                                <div class="uk-text-right"><a href="{{url('tin-tuc/bai-viet/'.$page[3]->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    @if(count($page)>4)
                                        <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="margin-top: 20px;">
                                            <div class="uk-cover-container">
                                                <a href="{{url('tin-tuc/bai-viet/'.$page[4]->slug)}}">
                                                    <img src="{{ $page[4]->image }}" alt="" uk-cover>
                                                    <canvas width="600" height="400"></canvas>
                                                </a>
                                            </div>
                                            <div class="uk-card-body uk-padding-small">
                                                <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$page[4]->name}}</div>
                                                <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$page[4]->created_at}}</div>
                                                <div class="uk-text-right"><a href="{{url('tin-tuc/bai-viet/'.$page[4]->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

