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
                <a href="{{url('/tuyen-dung')}}" style="color: #FFAA00">Tuyển dụng</a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 10px">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-Left uk-text-uppercase uk-margin-medium " style="margin-bottom: 1px">Thông tin tuyển dụng</div>
                    <div class="uk-margin home__block__lienhe__desc">
                        Tổng hợp các thông tin tuyển dụng của công ty,...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section" style="padding-top: 1px">
        <div class="uk-container">
            <div class="">
                @foreach($categories as $category)
                    @if(count($pages[$category->id]) > 0)
                        <div class="home__title uk-text-left uk-text-uppercase text1" style="margin-top: 50px">
                            <a href="{{url('tuyen-dung/danh-muc/'.$category->slug)}}" style="font-size: medium;color:#707070; border-bottom: 3px solid #ffaa00;margin-left: 20px">{{$category->name}}</a>
                        </div>
                        <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
                            <div>
                                @if(count($pages[$category->id]) > 0)
                                    <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="max-width: 450px;margin-top: 20px;">
                                        <div class="uk-cover-container">
                                            <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][0]->slug)}}">
                                                <img src="{{$pages[$category->id][0]->image}}"  style="padding: 20px 20px 20px 20px" alt="" uk-cover>
                                                <canvas width="600" height="400"></canvas>
                                            </a>
                                        </div>
                                        <div class="uk-card-body uk-padding-small">
                                            <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$pages[$category->id][0]->name}}</div>
                                            <div class="home__block__tintuc__card__title" style="color:#727171">{{$pages[$category->id][0]->name}}</div>
                                            <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$pages[$category->id][0]->created_at}}</div>
                                            <div class="uk-text-right"><a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][0]->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
                                    <div>
                                        @if(count($pages[$category->id]) > 1)
                                            <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="margin-top: 20px;">
                                                <div class="uk-cover-container">
                                                    <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][1]->slug)}}">
                                                        <img src="{{$pages[$category->id][1]->image}}" style="padding: 20px 20px 20px 20px" alt="" uk-cover>
                                                        <canvas width="600" height="400"></canvas>
                                                    </a>
                                                </div>
                                                <div class="uk-card-body uk-padding-small">
                                                    <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$pages[$category->id][1]->name}}</div>
                                                    <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$pages[$category->id][1]->created_at}}</div>
                                                    <div class="uk-text-right"><a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][1]->slug)}}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        @if(count($pages[$category->id]) > 2)
                                            <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="margin-top: 20px;">
                                                <div class="uk-cover-container">
                                                    <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][2]->slug)}}">
                                                        <img src="{{$pages[$category->id][2]->image}}" style="padding: 20px 20px 20px 20px" alt="" uk-cover>
                                                        <canvas width="600" height="400"></canvas>
                                                    </a>
                                                </div>
                                                <div class="uk-card-body uk-padding-small">
                                                    <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$pages[$category->id][2]->name}}</div>
                                                    <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$pages[$category->id][2]->created_at}}</div>
                                                    <div class="uk-text-right"><a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][2]->slug)}}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        @if(count($pages[$category->id]) > 3)
                                            <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="margin-top: 20px;">
                                                <div class="uk-cover-container">
                                                    <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][3]->slug)}}">
                                                        <img src="{{$pages[$category->id][3]->image}}" style="padding: 20px 20px 20px 20px" alt="" uk-cover>
                                                        <canvas width="600" height="400"></canvas>
                                                    </a>
                                                </div>
                                                <div class="uk-card-body uk-padding-small">
                                                    <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$pages[$category->id][3]->name}}</div>
                                                    <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$pages[$category->id][3]->created_at}}</div>
                                                    <div class="uk-text-right"><a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][3]->slug)}}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        @if(count($pages[$category->id]) > 4)
                                            <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" style="margin-top: 20px;">
                                                <div class="uk-cover-container">
                                                    <a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][4]->slug)}}}">
                                                        <img src="{{$pages[$category->id][4]->image}}" style="padding: 20px 20px 20px 20px" alt="" uk-cover>
                                                        <canvas width="600" height="400"></canvas>
                                                    </a>
                                                </div>
                                                <div class="uk-card-body uk-padding-small">
                                                    <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$pages[$category->id][4]->name}}</div>
                                                    <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$pages[$category->id][4]->created_at}}</div>
                                                    <div class="uk-text-right"><a href="{{url('tuyen-dung/bai-viet/'.$category->slug.'/'.$pages[$category->id][4]->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection

