<aside class="asideLeft uk-background-oxfordBlue uk-overflow-hidden">
    <div class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left">
            <a href="" class="uk-navbar-item uk-logo asideLeft__logo"><img class="uk-responsive-width uk-responsive-height" src="{{asset('quanly/images/logo.png')}}" alt=""></a>
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
