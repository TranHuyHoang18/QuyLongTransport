<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>
            @yield('title')
        </title>
        @include('qtv.partial.new_head')
        <style type="text/css">
            @yield('style')
        </style>
    </head>
    <body>
        <div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
            <div id="my-id" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar uk-padding-remove">
                    <aside class="uk-background-oxfordBlue uk-overflow-hidden uk-height-viewport">
                        <div class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                            <div class="uk-navbar-left">
                                <a href="{{url('/qtv')}}" class="uk-navbar-item uk-logo asideLeft__logo">
                                    <img class="uk-responsive-width uk-responsive-height" src="{{asset('quanly/images/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <ul class="uk-nav-default uk-nav-parent-icon asideLeft__nav" uk-nav>
                            <li class="asideLeft__li uk-active">
                                <a href="{{url('/qtv')}}" class="asideLeft__link">
                                    <div class="asideLeft__Itemmenu">
                                        <div class="uk-flex-middle uk-grid-small" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="asideLeft__Icon">
                                                    <i class="fa fa-home uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <span class="asideLeft__txt1">Trang chủ</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="asideLeft__li uk-parent">
                                <a href="#" class="asideLeft__link">
                                    <div class="asideLeft__Itemmenu">
                                        <div class="uk-flex-middle uk-grid-small" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="asideLeft__Icon">
                                                    <i class="fa fa-th-list uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <span class="asideLeft__txt1">Danh Mục</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="uk-nav-sub asideLeft__sub">
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/danh-muc/dich-vu')}}" >Dịch Vụ</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/danh-muc/gia-cuoc')}}" >Giá Cước</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/danh-muc/tin-tuc')}}" >Tin Tức</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/danh-muc/tuyen-dung')}}" >Tuyển Dụng</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="asideLeft__li uk-parent">
                                <a href="#" class="asideLeft__link">
                                    <div class="asideLeft__Itemmenu">
                                        <div class="uk-flex-middle uk-grid-small" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="asideLeft__Icon">
                                                    <i class="fa fa-file-text uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <span class="asideLeft__txt1">Bài Viết</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="uk-nav-sub asideLeft__sub">
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/bai-viet/dich-vu')}}" >Dịch Vụ</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/bai-viet/gia-cuoc')}}" >Giá Cước</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/bai-viet/tin-tuc')}}" >Tin Tức</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/bai-viet/tuyen-dung')}}" >Tuyển Dụng</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/bai-viet/chinh-sach')}}" >Chính Sách</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="asideLeft__li uk-parent">
                                <a href="#" class="asideLeft__link">
                                    <div class="asideLeft__Itemmenu">
                                        <div class="uk-flex-middle uk-grid-small" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="asideLeft__Icon">
                                                    <i class="fa fa-search uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <span class="asideLeft__txt1">Quản lý Tra Cứu</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="uk-nav-sub asideLeft__sub">
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/diem-gui-hang')}}" >Điểm gửi hàng</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/cuoc-van-chuyen')}}" >Bảng cước</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/buu-cuc')}}" >Bưu cục</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="asideLeft__li uk-parent">
                                <a href="#" class="asideLeft__link">
                                    <div class="asideLeft__Itemmenu">
                                        <div class="uk-flex-middle uk-grid-small" uk-grid>
                                            <div class="uk-width-auto">
                                                <div class="asideLeft__Icon">
                                                    <img class="uk-responsive-height" src="{{asset('quanly/images/setupIcon.png')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <span class="asideLeft__txt1">Cài đặt</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="uk-nav-sub asideLeft__sub">
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/cai-dat/seo-page')}}" >Seo Trang</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/cai-dat/trang-chu')}}" >Trang chủ</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/cai-dat/lien-he')}}" >Liên Hệ</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/cai-dat/media')}}" >Media</a>
                                    </li>
                                    <li style="width: 90%;margin-left: 5%;">
                                        <a href="{{url('qtv/cai-dat/danh-muc-vc')}}" >Danh Mục VC</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class="uk-grid-collapse uk-grid-match uk-height-viewport" uk-grid>
                <div class="uk-width-auto">
                    @include('qtv.partial.new_sidebar')
                </div>
                <div class="uk-width-expand">
                    <div>
                        @include('qtv.partial.new_header')
                        <div class="uk-section-xsmall">
                            <div class="uk-container uk-container-expand-left">
                                <div class="uk-margin">
                                    <form class="uk-grid-small uk-flex-middle formSearch" uk-grid>
                                        <div class="uk-width-auto@s">
                                            <span class="formSearch__txt">Xin chào,  <?php echo Auth::user()->name?> </span>
                                        </div>
                                        <div class="uk-width-auto@s">
                                            <div class="uk-search uk-search-default uk-width-medium@s uk-background-default">
                                                <span uk-search-icon></span>
                                                <input class="uk-search-input formSearch__input" type="search" placeholder="Tra cứu đơn hàng">
                                            </div>
                                        </div>
                                        <div class="uk-width-auto@s">
                                            <button type="submit" class="formSearch__btn uk-button uk-button-default">Tìm kiếm</button>
                                        </div>
                                    </form>
                                </div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

