<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>
        @yield('title')
    </title>
    @include('user.partial.new_head')
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
                        <a href="{{url('/nhanvien')}}" class="uk-navbar-item uk-logo asideLeft__logo">
                            <img class="uk-responsive-width uk-responsive-height" src="{{asset('quanly/images/logo.svg')}}" alt=""></a>
                    </div>
                </div>
                <ul class="uk-nav-default uk-nav-parent-icon asideLeft__nav" uk-nav>
                    <li class="asideLeft__li uk-active">
                        <a href="{{url('/nhanvien')}}" class="asideLeft__link">
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
                                            <i class="fa fa-list-alt uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <span class="asideLeft__txt1">Yêu Cầu</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="uk-nav-sub asideLeft__sub">
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhanvien/yeu-cau')}}" >Danh sách yêu cầu</a>
                            </li>
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhanvien/yeu-cau/add')}}" >Tạo yêu cầu</a>
                            </li>
                        </ul>
                    </li>
                    <li class="asideLeft__li uk-parent">
                        <a href="#" class="asideLeft__link">
                            <div class="asideLeft__Itemmenu">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="asideLeft__Icon">
                                            <i class="fa fa-suitcase uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <span class="asideLeft__txt1">Đơn hàng</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="uk-nav-sub asideLeft__sub">
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhanvien/don-hang')}}" >Danh sách đơn hàng</a>
                            </li>
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhanvien/don-hang/add')}}" >Tạo đơn hàng</a>
                            </li>
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhanvien/quan-ly/thanh-toan')}}" >Quản lý thanh toán</a>
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
                                        <span class="asideLeft__txt1">Tra cứu</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="uk-nav-sub asideLeft__sub">
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('/nhanvien/tra-cuu/diem-gui-hang')}}" >Tra cứu Điểm gửi hàng</a>
                            </li>
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('/nhanvien/tra-cuu/bang-cuoc')}}" >Tra cứu bảng cước</a>
                            </li>
                        </ul>
                    </li>
                    <li class="asideLeft__li uk-parent">
                        <a href="#" class="asideLeft__link">
                            <div class="asideLeft__Itemmenu">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="asideLeft__Icon">
                                            <i class="fa fa-users uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <span class="asideLeft__txt1">Khách hàng</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="uk-nav-sub asideLeft__sub">
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('/nhanvien/khach-hang/doi-tac')}}" >Danh sách đối tác</a>
                            </li>
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('/nhanvien/khach-hang/khach-le')}}" >Khách lẻ</a>
                            </li>
                        </ul>
                    </li>
                    <li class="asideLeft__li uk-parent">
                        <a href="#" class="asideLeft__link">
                            <div class="asideLeft__Itemmenu">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="asideLeft__Icon">
                                            <img class="uk-responsive-height" src="{{asset('quanly/images/supportIcon.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <span class="asideLeft__txt1">Trung tâm hỗ trợ</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="uk-nav-sub asideLeft__sub">
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhanvien/trung-tam-ho-tro/newsletter')}}">Newsletter</a>

                            </li>
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhanvien/trung-tam-ho-tro/tu-van-khach-hang')}}">Tư vấn khách hàng</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <div class="uk-grid-collapse uk-grid-match uk-height-viewport" uk-grid>
        <div class="uk-width-auto">
            @include('user.partial.new_sidebar')

        </div>
        <div class="uk-width-expand">
            <div>
                @include('user.partial.new_header')
                <div class="uk-section-xsmall">
                    <div class="uk-container uk-container-expand-left">
                        <div class="uk-margin">
                            <form class="uk-grid-small uk-flex-middle formSearch" action="{{url('nhanvien/tra-cuu/don-hang')}}" method="post" uk-grid>
                                @csrf
                                <div class="uk-width-auto@s">
                                    <span class="formSearch__txt">Xin chào , <?php echo Auth::user()->name?></span>
                                </div>
                                <div class="uk-width-auto@s">
                                    <div class="uk-search uk-search-default uk-width-medium@s uk-background-default">
                                        <span uk-search-icon></span>
                                        <input class="uk-search-input formSearch__input" type="search" name="madonhang" placeholder="Tra cứu đơn hàng" required="">
                                    </div>
                                </div>
                                <div class="uk-width-auto@s">
                                    <button type="submit" class="formSearch__btn uk-button uk-button-default">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>
                        @if(session()->has('success-message'))
                            <div class="alert alert-success">
                                {{ session()->get('success-message') }}
                            </div>
                        @endif
                        @if(session()->has('warning-message'))
                            <div class="alert alert-warning">
                                {{ session()->get('warning-message') }}
                            </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

