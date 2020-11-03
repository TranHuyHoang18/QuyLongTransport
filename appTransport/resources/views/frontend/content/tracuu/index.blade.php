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
    .goicuoc
    {
        width:95%;
        margin-left:3%;
        background-image: url("{{asset('images/front/background/back_9.png')}}");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: auto;
    }
@endsection
@section('content')
    @include('frontend.partials.tracuu_cuocvanchuyen')
    <div class="goicuoc">
        <div class="uk-section uk-background-center-center uk-background-cover">
            <div class="uk-card-hover" style="width:90%;margin-left:5%;margin-top: 1%;background: white;border-radius: 5px;box-shadow: 5px 5px #707070;padding-bottom:2%;padding-top: 2%;padding-left: 20px;padding-right: 20px">
                <div class="home__title uk-text-right">
                    <h5 style="color: #707070;float: right;margin-right: 2%"> Cước dành cho đối tác thân thiết</h5>
                    <img src="{{asset('images/front/icon/crow.png')}}" style="width: 20px;float: right;margin-top: 5px;margin-right: 10px">
                </div>
                <div>
                    <table class="uk-table uk-table-striped uk-table-justify uk-table-middle uk-table-responsive">
                        <thead >
                        <tr style="background: #DBF1FF;">
                            <th class="uk-text-left uk-text-bold" style="color: #707070;font-size: medium;padding-left: 30px">Loại dịch vụ</th>
                            <th class="uk-text-left uk-text-bold" style="color: #707070;font-size: medium">Thời gian <br> vận chuyển </th>
                            <th class="uk-text-left uk-text-bold" style="color: #707070;font-size: medium">Hình thức <br> vận chuyển</th>
                            <th class="uk-text-left uk-text-bold" style="color: #707070;font-size: medium">Giá vận chuyển</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="uk-section">
                    <div class="uk-card-hover" style="width: 90%;margin-left:5%;margin-right: 5%;border-radius: 10px;box-shadow:5px 5px #707070;background: #DBF1FF;margin-top: 2%;padding-bottom: 2%;">
                        <div class="uk-text-left@m uk-text-left@l uk-text-centerr@s" style="padding:20px 20px 20px 20px">
                            <button style="color: white;background:#FFC400;padding: 5px 5px 5px 5px;width: auto;border: none;border-radius: 10px 0px 10px 0px"><h4 style="margin:5px 20px 5px 20px">Ghi chú </h4></button>
                        </div>
                        <div class="uk-text-default" style="padding-left: 5%;color: #707070;padding-right: 5%">
                            <div class="uk-text-left">- Giá trên chưa bao gồm 10% VAT (VAT là thuế GTGT khi khách hàng có nhu cầu lấy hóa đơn) </div>
                            <div class="uk-text-left">- Các gói cước dành cho đối tác được giảm 10% cho mỗi đơn hàng (<a href="#" >Xem thêm chính sách đối tác</a>) </div>
                            <div class="uk-text-left">- Hình thức vận chuyển Vp-Vp là gói cước vận chuyển đối tác giao hàng tại địa chỉ công ty và nhận hàng tại kho hàng của
                                Quy Long Logistics</div>
                            <div class="uk-text-left">- Hình thức vận chuyển Door to Door: Là gói cước vận chuyển giao nhận tận nơi, Quy Long Logistics đến lấy hàng tận nơi
                                và giao hàng tại địa chỉ khách hàng chỉ định</div>
                            <div class="uk-text-left">- Giá cước trên không áp dụng với một số mặt hàng giá trị cao, hàng dễ vỡ, hàng cồng kềnh (<a href="#">Xem thêm chính sách giá cước</a>)</div>
                            <div class="uk-text-left">- Khách hàng cần tư vấn thêm về giá cước và dịch vụ vui lòng liên hệ tổng đài (miễn phí cước gọi) </div>
                        </div>
                        <div class="uk-text-default" style="margin-left: 40%;margin-top: 10px">
                            <img src="{{asset('images/front/icon/phone_1.png')}}" style="width: 35px;position: absolute" uk-img>
                            <h4 style="color:#727272;font-weight: bold;margin-top: 3px;margin-left: 40px;"> 19001820</h4>
                        </div>
                        <div class="uk-text-default" style="margin-left: 40%;margin-top: 30px">
                            <img src="{{asset('images/front/icon/acount_1.png')}}" style="width: 35px;position: absolute;margin-top: 10px" uk-img>
                            <h4 style="color:#727272;font-weight: bold;margin-top: 3px;margin-left: 40px;"> 0984 62 64 64</h4>
                            <h4 style="color:#727272;font-weight: bold;margin-top: 3px;margin-left: 65px"> (Call 24/7)</h4>
                        </div>
                    </div>
                </div>
                <div class="uk-container" style="padding-bottom: 20px">
                    <div class="uk-text-center uk-text-bold uk-text-uppercase"><h3 style="color:#828282;font-weight: bold;padding-bottom: 20px">Có thể bạn quan tâm</h3></div>
                    <div class="uk-child-width-1-3@m uk-child-width-1-1@s uk-grid" uk-grid="">
                        <div>
                            <div class="uk-cover-container home__news1 uk-border-rounded">
                                <img src="https://znews-photo.zadn.vn/w480/Uploaded/kbd_pijv/2020_09_20/Senla_Boutique_thumb.jpg" alt="" uk-cover="" class="uk-cover" style="height: 153px; width: 230px;">
                                <canvas width="600" height="280"></canvas>
                            </div>
                            <div class="home__title1"><a href="">Hướng dẫn tra cước vận chuyển chính xác nhất theo nhu cầu doanh nghiệp</a></div>
                        </div>
                        <div>
                            <div class="uk-cover-container home__news1 uk-border-rounded">
                                <img src="https://znews-photo.zadn.vn/w480/Uploaded/kbd_pijv/2020_09_20/Senla_Boutique_thumb.jpg" alt="" uk-cover="" class="uk-cover" style="height: 153px; width: 230px;">
                                <canvas width="600" height="280"></canvas>
                            </div>
                            <div class="home__title1"><a href="">Hướng dẫn tra cước vận chuyển chính xác nhất theo nhu cầu doanh nghiệp</a></div>
                        </div>
                        <div>
                            <div class="uk-cover-container home__news1 uk-border-rounded">
                                <img src="https://znews-photo.zadn.vn/w480/Uploaded/kbd_pijv/2020_09_20/Senla_Boutique_thumb.jpg" alt="" uk-cover="" class="uk-cover" style="height: 153px; width: 230px;">
                                <canvas width="600" height="280"></canvas>
                            </div>
                            <div class="home__title1"><a href="">Hướng dẫn tra cước vận chuyển chính xác nhất theo nhu cầu doanh nghiệp</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

