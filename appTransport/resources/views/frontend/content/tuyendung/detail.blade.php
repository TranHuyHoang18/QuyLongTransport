@extends('frontend.layouts.HomePageLayout')
@section('title')
    Trang tuyển dụng
@endsection
@section('content')
    <div class="menuHeader" style="background: white;padding-top: 20px;padding-bottom: 20px">
        <div class="uk-container uk-padding-remove">
            <div class="uk-text-left">
                <a href="{{url('/')}}" style="color: #FFAA00">Trang chủ </a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tuyen-dung')}}" style="color: #FFAA00">Tuyển dụng</a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tuyen-dung')}}" style="color: #FFAA00">{{$page[0]->name}}</a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 5%;">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium " style="margin-bottom: 1px">{{$page[0]->name}}</div>
                    <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
                        <div>
                            <div class="uk-text-left" style="color:#707070;font-size: medium ">
                                Ngày đăng : {{$page[0]->created_at}}
                            </div>
                        </div>
                        <div>
                            <div class="uk-text-right" style="color:#FFAA00;font-size: medium ">
                                Hạn nộp hồ sơ : {{$page[0]->date}}
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin home__block__lienhe__desc">
                        <?php echo $page[0]->desc?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

