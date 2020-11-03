<div id="my-id" uk-offcanvas="overlay: true; mode: push">
    <div class="uk-offcanvas-bar uk-overflow-auto uk-padding-remove uk-flex uk-flex-column">
        <div class="uk-flex-auto">
            <figure class="uk-padding-small uk-margin-remove">
                <a href=""><img src="{{asset('frontend/images/logo/logo_f.png')}}" alt=""></a>
            </figure>
            <ul class="uk-nav-default uk-nav-parent-icon nav__menu" uk-nav>
                <li class="nav__menu__item"><a href="{{url('/')}}">TRANG CHỦ</a></li>
                <li class="uk-parent nav__menu__item">
                    <a href="#" class="nav__menu__link">TRA CỨU NHANH</a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{url('/tra-cuu')}}" class="uk-text-large">Tra cứu</a></li>
                        <li><a href="{{url('tra-cuu/van-don-van-chuyen')}}" class="uk-text-large">Tra cứu vận đơn </a></li>
                        <li><a href="{{url('tra-cuu/gia-cuoc-van-chuyen')}}" class="uk-text-large">Tra cứu giá cước</a></li>
                        <li><a href="{{url('tra-cuu/diem-gui-hang')}}" class="uk-text-large">Tìm điểm gửi hàng</a></li>
                    </ul>
                </li>
                <li class="uk-parent nav__menu__item">
                    <a href="#" class="nav__menu__link">DỊCH VỤ</a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{url('/dich-vu')}}" class="uk-text-large">Dịch vụ </a></li>
                        <li><a href="{{url('/dich-vu/van-chuyen-nhanh')}}" class="uk-text-large">Vận chuyển nhanh</a></li>
                        <li><a href="{{url('/dich-vu/van-chuyen-xe-may')}}" class="uk-text-large">Vận chuyển xe máy</a></li>
                        <li><a href="{{url('/dich-vu/van-chuyen-thu-cung')}}" class="uk-text-large">Vận chuyển thú cưng</a></li>
                        <li><a href="{{url('/dich-vu/van-chuyen-tiet-kiem')}}" class="uk-text-large">Vận chuyển tiết kiệm </a></li>
                        <li><a href="{{url('/dich-vu/van-chuyen-o-to')}}" class="uk-text-large">Vận chuyển ô tô</a></li>
                        <li><a href="{{url('/dich-vu/chuyen-nha-tron-goi-toan-quoc')}}" class="uk-text-large">Vận chuyển nhà toàn quốc</a></li>
                    </ul>
                </li>
                <li class="uk-parent nav__menu__item">
                    <a href="#" class="nav__menu__link">GIÁ CƯỚC</a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-nhanh')}}" class="uk-text-large">Giá cước nhanh</a></li>
                        <li><a href="{{url('gia-cuoc/gia-cuoc-gui-xe-may')}}" class="uk-text-large">Bảng giá xe máy </a></li>
                        <li><a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-thu-cung')}}" class="uk-text-large">Bảng giá thú cưng</a></li>
                        <li><a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-tiet-kiem')}}" class="uk-text-large">Giá cước tiết kiệm</a></li>
                        <li><a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-o-to')}}" class="uk-text-large">Bảng giá ô tô</a></li>
                        <li><a href="{{url('gia-cuoc/gia-cuoc-chuyen-nha-chon-goi-di-tinh')}}" class="uk-text-large">Giá cước chuyển nhà toàn quốc</a></li>
                    </ul>
                </li>
                <li class="uk-parent nav__menu__item">
                    <a href="#" class="nav__menu__link">TIN TỨC</a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{url('tin-tuc/blog-xe-may')}}" class="uk-text-large">Tin tức xe máy </a></li>
                        <li><a href="{{url('tin-tuc/blog-thu-cung')}}" class="uk-text-large">Tin tức thú cưng </a></li>
                        <li><a href="{{url('tin-tuc/cam-nang-van-chuyen')}}" class="uk-text-large">Tin tức vận chuyển</a></li>
                        <li><a href="{{url('tin-tuc/blog-o-to')}}" class="uk-text-large">Tin tức ô tô </a></li>
                        <li><a href="{{url('tin-tuc/blog-quy-long')}}" class="uk-text-large">Tin tức Blog Quy Long </a></li>
                    </ul>
                </li>
                <li class="uk-parent nav__menu__item">
                    <a href="#" class="nav__menu__link">TUYỂN DỤNG</a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{url('/tuyen-dung')}}" class="uk-text-large">Tuyển dụng</a></li>
                    </ul>
                </li>
                <li class="nav__menu__item"><a href="{{url('/lien-he')}}" class="nav__menu__link">LIÊN HỆ</a></li>
            </ul>
        </div>
        <div>
            <div class="uk-padding-small uk-text-center">
                <img src="{{asset('frontend/images/logo/icon_contact.png')}}" alt="">
                <div class="nav__hotline">1800 8052</div>
                <div class="nav__timeline">07:00 -21:00 (Thứ hai - Chủ nhật) </div>
            </div>
        </div>
    </div>
</div>
