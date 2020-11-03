<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>
        @yield('title')
    </title>
    @include('nvkho.partial.new_head')
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
                        <a href="{{url('nhan-vien-kho')}}" class="uk-navbar-item uk-logo asideLeft__logo"><img class="uk-responsive-width uk-responsive-height" src="{{asset('quanly/images/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <ul class="uk-nav-default uk-nav-parent-icon asideLeft__nav" uk-nav>
                    <li class="asideLeft__li uk-active">
                        <a href="{{url('nhan-vien-kho')}}" class="asideLeft__link">
                            <div class="asideLeft__Itemmenu">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="asideLeft__Icon">
                                            <img class="uk-responsive-height" src="{{asset('quanly/images/homeIcon.png')}}" alt="">
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
                                <a href="{{url('nhan-vien-kho/don-hang/all')}}" >Danh sách đơn hàng</a>
                            </li>
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhan-vien-kho/don-hang')}}" >Chưa có tài xế</a>
                            </li>
                        </ul>
                    </li>
                    <li class="asideLeft__li uk-parent">
                        <a href="#" class="asideLeft__link">
                            <div class="asideLeft__Itemmenu">
                                <div class="uk-flex-middle uk-grid-small" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="asideLeft__Icon">
                                            <i class="fa fa-car uk-responsive-height" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 25px"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <span class="asideLeft__txt1">Tài Xế</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <ul class="uk-nav-sub asideLeft__sub">
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhan-vien-kho/tai-xe')}}" >Danh sách tài xế</a>
                            </li>
                            <li style="width: 90%;margin-left: 5%;">
                                <a href="{{url('nhan-vien-kho/tai-xe/don-hang')}}" >Danh sách đơn hàng</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <div class="uk-grid-collapse uk-grid-match uk-height-viewport" uk-grid>
        <div class="uk-width-auto">
            @include('nvkho.partial.new_sidebar')

        </div>
        <div class="uk-width-expand">
            <div>
                @include('nvkho.partial.new_header')
                <div class="uk-section-xsmall">
                    <div class="uk-container uk-container-expand-left">
                        <div class="uk-margin">
                            <form class="uk-grid-small uk-flex-middle formSearch" uk-grid>
                                <div class="uk-width-auto@s">
                                    <span class="formSearch__txt">Xin chào , <?php echo Auth::user()->name?></span>
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

