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
@section('content')
    <div class="menuHeader" style="background: white;padding-top: 20px;padding-bottom: 20px">
        <div class="uk-container uk-padding-remove">
            <div class="uk-text-left">
                <a href="{{url('/')}}" style="color: #FFAA00">Trang chủ </a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/gia-cuoc')}}" style="color: #FFAA00">Giá Cước</a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 10px">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium" style="margin-bottom: 5px"><span>Giá cước vận chuyển</span></div>
                    <div class="uk-margin home__block__lienhe__desc uk-text-center" style="margin-top: 10px;color:#b8b6b6 ">
                        Tổng hợp các thông tin bảng giá cước vận chuyển của công ty,...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid >
                @foreach($categories as $category)
                    @if(count($pages[$category->id]) > 0)
                        <div>
                            <div class="uk-card uk-card-default home__block__tintuc__card uk-card-hover" >
                                <div class="uk-cover-container">
                                    <a href="{{url('gia-cuoc/'.$category->slug)}}">
                                        <img src="{{ $pages[$category->id][0]->image }}" alt="" uk-cover>
                                        <canvas width="600" height="400"></canvas>
                                    </a>
                                </div>
                                <div class="uk-card-body uk-padding-small">
                                    <div class="home__block__tintuc__card__dm uk-text-large uk-text-uppercase">{{$category->name}}</div>
                                    <div class="home__block__tintuc__card__title" style="color:#727171">{{$pages[$category->id][0]->name}}</div>
                                    <div class="home__block__tintuc__card__time"><i class="fa fa-pencil" aria-hidden="true" style="font-weight: bold;font-size: 16px;color: #b8b6b6;margin-right: 10px;"></i>{{$pages[$category->id][0]->updated_at}}</div>
                                    <div class="uk-text-right"><a href="{{url('gia-cuoc/'.$category->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection

