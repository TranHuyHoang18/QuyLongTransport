@extends('frontend.layouts.HomePageLayout')
@section('title')
    Trang chính sách / Quý Long
@endsection
@section('meta')
    <meta name="keywords" content="{{$page[0]->seo_keywords}}">
    <meta name="description" content="{{$page[0]->seo_desc}}">
    <meta property="og:title" content="{{$page[0]->seo_title}}">
    <meta property="og:description" content="{{$page[0]->seo_desc}}">
    <meta name="author" content="Công Ty Van Chuyen Quy Long">
    <meta name="copyright" content="Công Ty Van Chuyen Quy Long">
    <meta content="INDEX,FOLLOW" name="robots">
@endsection
@section('content')
    <div class="menuHeader" style="background: white;padding-top: 20px;padding-bottom: 20px">
        <div class="uk-container uk-padding-remove">
            <div class="uk-text-left">
                <a href="{{url('/')}}" style="color: #FFAA00">Trang chủ </a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/chinh-sach')}}" style="color: #FFAA00">Chinh sách</a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('chinh-sach/'.$page[0]->slug)}}" style="color: #FFAA00">{{$page[0]->name}}</a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 5%;">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium " style="margin-bottom: 1px">{{$page[0]->name}}</div>
                    <div class="uk-margin home__block__lienhe__desc">
                        <?php echo $page[0]->desc?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

