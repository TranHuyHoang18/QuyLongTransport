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
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 16:9; autoplay: true; autoplay-interval: 4000">

        <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 0">
            <li>
                <img src="{{asset('frontend/images/slides/banner01.png')}}" alt="" uk-cover>
            </li>
            <li>
                <img src="{{asset('frontend/images/slides/banner02.jpg')}}" alt="" uk-cover>
            </li>
            <li>
                <img src="{{asset('frontend/images/slides/banner03.jpg')}}" alt="" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    </div>
    <div class="uk-section uk-background-Solitude">
        <div class="uk-container">
            <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span>DỊCH VỤ VẬN CHUYỂN CHÍNH</span></div>
            <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-match uk-grid-small uk-grid-30-m" uk-grid>
                <?php
                $data = array(
                    array(
                        "src" => "vc_nhanh.png",
                        "title" => "Vận chuyển nhanh",
                        "desc" => "Gửi hàng đi Hà Nội chỉ mất 48h, Đà Nẵng chỉ mất 24h mà giá cước gần như không đổi so với cước thường.",
                    ),
                    array(
                        "src" => "vc_tietkiem.png",
                        "title" => "Vận chuyển tiết kiệm",
                        "desc" => "Dịch vụ giao hàng tiêu chuẩn với giá cước cực rẻ nhằm tiết kiệm tối đa chi phí cho doanh nghiệp của bạn.",
                    ),
                    array(
                        "src" => "vc_xemay.png",
                        "title" => "Vận chuyển xe máy",
                        "desc" => "BacNamtrans là đơn vị đầu tiên chuẩn hóa chuyên nghiệp dịch vụ vận chuyển xe máy trên toàn quốc.",
                    ),
                    array(
                        "src" => "dv_logistics.png",
                        "title" => "Dịch vụ Logistics",
                        "desc" => "Kết hợp và tối ưu vận chuyển đa phương thức nhẳm cung ứng tối đa dịch vụ Logistics cho doanh nghiệp  của bạn.",
                    ),
                );
                foreach ($data as $k => $v): ?>
                <div>
                    <div class="uk-card uk-card-default uk-border-rounded home__card uk-card-hover">
                        <div class="uk-card-body uk-padding-small uk-text-center">
                            <div class="uk-text-center home__card__boxImg uk-margin-small"><img src="{{asset('frontend/images/dvvc/'.$v['src'])}}" alt=""></div>
                            <div class="home__card__title"><?= $v['title'] ?></div>
                            <div class="home__card__desc uk-visible@m"><?= $v['desc'] ?></div>
                            <ul class="uk-child-width-auto uk-flex-center uk-flex-middle uk-grid-2" uk-grid>
                                <li class="uk-active"><span class="home__card__dot"></span></li>
                                <li><span class="home__card__dot"></span></li>
                                <li><span class="home__card__dot"></span></li>
                                <li><span class="home__card__dot"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    @include('frontend.partials.tracuu_cuocvanchuyen')
    @include('frontend.partials.solieu_thongke')
    <div class="uk-section-large home__block1 uk-position-relative">
        <div class="uk-container">
            <div class="uk-text-center home__block1__title1 uk-margin-large-bottom"><span>1001+</span> LÝ DO NÊN CHỌN QUY LONG LOGISTICS</div>
            <div class="uk-child-width-1-3@m uk-grid-70-m" uk-grid>
                <div>
                    <div class="uk-grid-10" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block1__boxImg">
                                <img src="{{asset('frontend/images/lydo/icon_giaohangnhanhnhat.png')}}" alt="">
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block1__title2 uk-margin-small">Giao hàng nhanh nhất</div>
                            <div class="home__block1__desc">
                                Thời gian giao nhanh hơn đơn vị khác <br>
                                <span>Nha Trang</span> - giao nhanh hơn 6 giờ <br>
                                <span>Đà Nẵng</span> - giao nhanh hơn 12 giờ <br>
                                <span>Hà Nội</span> - giao nhanh hơn 24 giờ
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid-10" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block1__boxImg">
                                <img src="{{asset('frontend/images/lydo/icon_goidichvu.png')}}" alt="">
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block1__title2 uk-margin-small">Đa dạng gói dịch vụ</div>
                            <div class="home__block1__desc">
                                Đơn vị đầu tiên có các gói vận chuyển <br>
                                Vận chuyển tốc độ - giao siêu nhanh <br>
                                Vận chuyển tiết kiệm - an toàn, tiết kiệm
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid-10" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block1__boxImg">
                                <img src="{{asset('frontend/images/lydo/icon_toanquoc.png')}}" alt="">
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block1__title2 uk-margin-small">Phủ sóng toàn quốc</div>
                            <div class="home__block1__desc">
                                Năng lực vận chuyển giao hàng
                                đi khắp 63 tỉnh thành
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid-10" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block1__boxImg">
                                <img src="{{asset('frontend/images/lydo/icon_tracuu.png')}}" alt="">
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block1__title2 uk-margin-small">Tra cứu, quản lý dễ dàng</div>
                            <div class="home__block1__desc">
                                Tra cứu giá cước tự động, minh bạch
                                Quản lý, theo dõi đơn hàng theo thời
                                gian thực <br>
                                Xua tan nỗi lo không biết đơn hàng
                                của mình đang ở đâu
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid-10" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block1__boxImg">
                                <img src="{{asset('frontend/images/lydo/icon_chiphi.png')}}" alt="">
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block1__title2 uk-margin-small">Tiết kiệm chi phí</div>
                            <div class="home__block1__desc">
                                Công đoạn hỏi giá, tình trạng đơn hàng,
                                hàng giao trễ đang làm mất quá nhiều
                                thời gian và chi phí cho doanh nghiệp. <br>
                                Hãy yên tâm vì tất cả được kiểm soát qua
                                hệ thống của Quy Long Logistics
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-grid-10" uk-grid>
                        <div class="uk-width-auto">
                            <div class="home__block1__boxImg">
                                <img src="{{asset('frontend/images/lydo/icon_ondinh.png')}}" alt="">
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="home__block1__title2 uk-margin-small">Dịch vụ ổn định nhất</div>
                            <div class="home__block1__desc">
                                Tỷ lệ giao hàng đúng hẹn 96,72% <br>
                                Tỷ lệ đền bù, hoàn trả chỉ 0,86% <br>
                                Tỷ lệ khách hàng hài lòng tới 94,52%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-position-bottom home__block1__arrow">
        </div>
    </div>
    <div class="uk-section home__block2">
        <div class="uk-container">
            <div class="uk-text-center home__block2__title uk-margin">THÊM <span>1</span> LÝ DO KHÁCH HÀNG LUÔN HÀI LÒNG</div>
            <div class="uk-text-center home__block2__desc">Chúng tôi là đơn vị vận chuyển duy nhất có hệ thống theo dõi quản lý đơn hàng theo thời gian thực</div>
            <div class="uk-margin-medium">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-2-5@m">
                        <div class="home__block2__title1">HỆ THỐNG QUẢN LÝ CHUYÊN NGHIỆP</div>
                        <ul class="uk-tab-left home__block2__listStep" uk-tab="connect: #my-id">
                            <?php
                            $data = array(
                                "Giao diện trực quan dễ sử dụng",
                                "Tích hợp quản lý trên di động",
                                "Tạo đơn hàng cực đơn giản",
                                "Tra cứu giá cước nhanh chóng",
                                "Theo dõi đơn hàng theo thời gian thực",
                                "Quản lý danh sách đơn hàng dễ dàng",
                                "Thống kê, quản lý cước vận chuyển",
                            );
                            foreach ($data as $k => $v): ?>
                            <li class="home__block2__listStep__item"><a class="home__block2__listStep__link" href=""><?= $v ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="uk-text-center">
                            <a href="" class="home__block2__btn uk-button uk-button-default uk-border-pill">XEM HƯỚNG DẪN</a>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <ul id="my-id" class="uk-switcher">
                            <li>
                                <img src="{{asset('frontend/images/lydo/screen1.png')}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('frontend/images/lydo/screen2.png')}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('frontend/images/lydo/screen3.png')}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('frontend/images/lydo/screen4.png')}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('frontend/images/lydo/screen5.png')}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('frontend/images/lydo/screen6.png')}}" alt="">
                            </li>
                            <li>
                                <img src="{{asset('frontend/images/lydo/screen7.png')}}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-background-WhiteSmoke" id="tuvanngay">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span>LIÊN HỆ ĐỂ ĐƯỢC PHỤC VỤ TỐT HƠN</span></div>
                    <div class="uk-child-width-1-2@s uk-flex-middle uk-grid-small" uk-grid>
                        <div>
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="home__block__lienhe__boxImg">
                                        <img src="{{asset('frontend/images/lienhe/icon_phone.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="home__block__lienhe__bold">1800 8052</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="home__block__lienhe__boxImg">
                                        <img src="{{asset('frontend/images/lienhe/icon_time.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="home__block__lienhe__desc">Thời gian làm việc:</div>
                                    <div class="home__block__lienhe__desc">07:00 - 21:00 (Thứ hai - Chủ nhật)</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="home__block__lienhe__boxImg">
                                        <img src="{{asset('frontend/images/lienhe/icon_support.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-text-left">
                                        <div class="home__block__lienhe__bold home__block__lienhe__bold--fz1">0972 588 588</div>
                                        <div class="home__block__lienhe__desc home__block__lienhe__desc--fz1">( Call 24/7)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="home__block__lienhe__boxImg">
                                        <img src="{{asset('frontend/images/lienhe/icon_mail.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="home__block__lienhe__desc">cskh@quylonglogistics.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home__block__lienhe__desc uk-margin-medium-top">Dành cho khách hàng muốn nhận thông tin và cập nhật bảng giá tốt nhất</div>
                    <div class="home__block__lienhe__formLeft uk-margin">
                        <form method="post" action="{{url('/newsletter/add')}}">
                            @csrf
                                <div class="uk-grid-10" uk-grid>
                                    <div class="uk-width-expand">
                                        <input class="uk-input home__Input" type="text" name="email" placeholder="Nhập email" required="">
                                    </div>
                                    <div class="uk-width-auto@s">
                                        <button type="submit" class="uk-button uk-button-default home__btn">Đăng ký ngay</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="uk-text-center">
                        <img src="{{asset('frontend/images/lienhe/background.png')}}" alt="">
                    </div>
                </div>
                <div class="uk-width-2-5@m">
                    <div class="uk-card uk-card-default home__block__lienhe__card">
                        <div class="uk-card-body uk-padding-small home__block__lienhe__card__body">
                            <div class="uk-text-center home__block__lienhe__card__title uk-margin">NHẬN TƯ VẤN VẬN CHUYỂN </div>
                            <div class="uk-grid-small uk-child-width-auto uk-flex-center uk-margin uk-grid-10" uk-grid uk-countdown="date: {{date('m/d/Y H:i:s', time()+69120)}}">
                                <div>
                                    <div class="home__itemCountdown">
                                        <div class="uk-countdown-number home__number uk-countdown-days"></div>
                                        <div class="uk-countdown-label home__label uk-margin-small uk-text-center uk-visible@s">Ngày</div>
                                    </div>
                                </div>
                                <div>
                                    <div class="home__itemCountdown">
                                        <div class="uk-countdown-number home__number uk-countdown-hours"></div>
                                        <div class="uk-countdown-label home__label uk-margin-small uk-text-center uk-visible@s">Giờ</div>
                                    </div>
                                </div>
                                <div>
                                    <div class="home__itemCountdown">
                                        <div class="uk-countdown-number home__number uk-countdown-minutes"></div>
                                        <div class="uk-countdown-label home__label uk-margin-small uk-text-center uk-visible@s">Phút</div>
                                    </div>
                                </div>
                                <div>
                                    <div class="home__itemCountdown">
                                        <div class="uk-countdown-number home__number uk-countdown-seconds"></div>
                                        <div class="uk-countdown-label home__label uk-margin-small uk-text-center uk-visible@s">Giây</div>
                                    </div>
                                </div>
                            </div>
                            <div class="home__block__lienhe__desc uk-margin">Có ngay ưu đãi 20% cước vận chuyển với đơn hàng đầu tiên khi để lại thông tin dưới đây:</div>
                            <form method="post" action="{{url('transport/support')}}" class="uk-grid-small uk-grid-10" uk-grid>
                                @csrf
                                <div class="uk-width-1-1">
                                    <input class="uk-input home__Input" type="text" name="name" placeholder="Tên đơn vị" required="">
                                </div>
                                <div class="uk-width-1-1">
                                    <input class="uk-input home__Input" type="text" name="phone" placeholder="Số điện thoại" required="">
                                </div>
                                <div class="uk-width-1-1">
                                    <input class="uk-input home__Input" type="text" name="email" placeholder="Nhập email" required="">
                                </div>
                                <div class="uk-width-1-1">
                                    <input class="uk-input home__Input" type="text" name="name_product" placeholder="Tên mặt hàng" required="">
                                </div>
                                <div class="uk-width-1-1">
                                    <input class="uk-input home__Input" type="text" name="weight" placeholder="Trọng lượng/ cân nặng" required="">
                                </div>
                                <div class="uk-width-1-1">
                                    <input class="uk-input home__Input" type="text" name="address_s" placeholder="Địa chỉ gửi hàng" required="">
                                </div>
                                <div class="uk-width-1-1">
                                    <input class="uk-input home__Input" type="text" name="address_r" placeholder="Địa chỉ nhận hàng" required="">
                                </div>
                                <div class="uk-width-1-1">
                                    <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn">Nhận tư vấn ngay</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-background-default">
        <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span>NHỮNG ĐỐI TÁC LUÔN TIN DÙNG</span></div>
        <div class="slider-container uk-overflow-hidden uk-text-nowrap">
            <div class="slider-content-wrapper uk-overflow-hidden uk-text-nowrap uk-display-inline-block" uk-grid>
                <?php for ($i=1;$i<=2;$i++): ?>
                <div>
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-nowrap" uk-grid>

                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/lazada.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/rohto.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/toshiba.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/fahasacom-103627.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/CIen-logistics-color.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/shopee.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/thienlong.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/sendo.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/itl.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/dhl.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/samsung.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/Lotte-logo-wordmark.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/LG-Logo.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="slider-container uk-overflow-hidden uk-text-nowrap">
            <div class="slider-content-wrapper uk-overflow-hidden uk-text-nowrap uk-display-inline-block line2" uk-grid>
                <?php for ($i=1;$i<=2;$i++): ?>
                <div>
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-nowrap" uk-grid>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/Bibica.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/tienphong.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/viettelpost.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/fpt.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/lock&lock.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/ghn.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/tuongan.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/rangdong.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/eurowindow.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/viglacera.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/bitis.png')}}" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="{{asset('frontend/images/doitac/giaohangtietkiem.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <div class="uk-section home__block__tintuc uk-background-WhiteSmoke">
        <div class="uk-container">
            <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span>TIN TỨC - KHUYẾN MÃI</span></div>
            <div uk-slider>
                <div class="uk-position-relative">
                    <div class="uk-slider-container home__block__tintuc__space" >
                        <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                            @foreach($news as $new)
                                <?php $i++; ?>
                                @if($i<= 8)
                                    <li>
                                        <div class="uk-card uk-card-default home__block__tintuc__card">
                                            <div class="uk-cover-container">
                                                <a href="{{url('/tin-tuc/bai-viet/'.$new->slug)}}" >
                                                    <img src="{{$new->image}}" alt="" uk-cover>
                                                    <canvas width="700" height="440"></canvas>
                                                </a>
                                            </div>
                                            <div class="uk-card-body uk-padding-small">
                                                <div class="home__block__tintuc__card__dm">{{$new->name}}</div>
                                                <div class="home__block__tintuc__card__title"><a href=""> <?php echo($new->intro);?></a></div>
                                                <div class="home__block__tintuc__card__time">{{$new->created_at}}</div>
                                                <div class="uk-text-right"><a href="{{url('/tin-tuc/bai-viet/'.$new->slug)}}" class="home__block__tintuc__card__readMore" uk-icon="icon: chevron-right; ratio: 0.7">Xem thêm</a></div>
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_prev.png')}}" alt=""></a>
                        <a class="uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next"><img class="home__block__tintuc__navImg" src="{{asset('frontend/images/nav_next.png')}}" alt=""></a>
                    </div>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin uk-hidden@s"></ul>
            </div>
        </div>
    </div>
    <script src="{{asset('frontend/js/app.js')}}"></script>
@endsection

