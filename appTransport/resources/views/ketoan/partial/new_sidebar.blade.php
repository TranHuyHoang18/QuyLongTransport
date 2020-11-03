<aside class="asideLeft uk-background-oxfordBlue uk-overflow-hidden">
    <div class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left">
            <a href="" class="uk-navbar-item uk-logo asideLeft__logo"><img class="uk-responsive-width uk-responsive-height" src="{{asset('quanly/images/logo.png')}}" alt=""></a>
        </div>
    </div>
    <ul class="uk-nav-default uk-nav-parent-icon asideLeft__nav" uk-nav>
        <li class="asideLeft__li uk-active">
            <a href="{{url('/ketoan')}}" class="asideLeft__link">
                <div class="asideLeft__Itemmenu">
                    <div class="uk-flex-middle uk-grid-small" uk-grid>
                        <div class="uk-width-auto">
                            <div class="asideLeft__Icon">
                                <img class="uk-responsive-height" src="{{asset('quanly/images/homeIcon.png')}}" alt="">
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <span class="asideLeft__txt1 uk-text-uppercase">Trang chủ</span>
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
                    <a href="{{url('ketoan/yeu-cau')}}" >Danh sách yêu cầu</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('ketoan/yeu-cau/add')}}" >Tạo yêu cầu</a>
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
                            <span class="asideLeft__txt1">Đơn hàng </span>
                        </div>
                    </div>
                </div>
            </a>
            <ul class="uk-nav-sub asideLeft__sub">
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('ketoan/don-hang')}}" >Danh sách đơn hàng</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('ketoan/don-hang/add')}}" >Tạo đơn hàng</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('ketoan/quan-ly/thanh-toan')}}" >Quản lý thanh toán</a>
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
                    <a href="{{url('/ketoan/tra-cuu/don-hang')}}" >Tra cứu đơn hàng</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('/ketoan/tra-cuu/bang-cuoc')}}" >Tra cứu bảng cước</a>
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
                            <span class="asideLeft__txt1 ">Khách hàng</span>
                        </div>
                    </div>
                </div>
            </a>
            <ul class="uk-nav-sub asideLeft__sub">
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('/ketoan/khach-hang/doi-tac')}}" >Danh sách đối tác</a>
                </li>
                <li style="width: 90%;margin-left: 5%;">
                    <a href="{{url('/ketoan/khach-hang/khach-le')}}" >Khách lẻ</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
