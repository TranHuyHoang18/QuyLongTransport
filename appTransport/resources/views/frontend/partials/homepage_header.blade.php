@include('frontend.partials.homepage_menu_mobile')
<div class="topHeader">
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left uk-visible@m">
                <div class="uk-navbar-item topHeader__item">
                    <span class="topHeader__item__iconPhone" uk-icon="icon: user; ratio: 0.7"></span>
                    <span class="topHeader__item__txt1">Hotline:</span> <span class="topHeader__item__txt2">1900 8058 | 0972 475 677</span>
                </div>
                <div class="uk-navbar-item topHeader__item">
                    <span class="topHeader__item__txt3">07:00-21:00, Thứ Hai - Chủ Nhật</span>
                </div>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-navbar-item topHeader__item">
                    <form action="{{url('/tra-cuu/van-don')}}" method="post">
                        @csrf
                        <div class="uk-child-width-auto uk-grid-5" uk-grid>
                            <div>
                                <div class="uk-search uk-search-default topHeader__item__width">
                                    <span uk-search-icon></span>
                                    <input name="mavandon" class="uk-search-input uk-form-small topHeader__item__input" type="text" placeholder="Nhập mã đơn hàng ở đây...">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="uk-button uk-button-default uk-form-small topHeader__item__btn1">Tra cứu</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="uk-navbar-item topHeader__item topHeader__item--loginBox">
                    <div>
                        <span class="topHeader__item__iconPhone" uk-icon="icon: user; ratio: 0.8"></span>
                        <span class="uk-text-middle"><a href="{{route('login')}}">Đăng nhập</a> / <a href="{{route('register')}}">Đăng ký</a></span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="menuHeader" uk-sticky>
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <a href="#my-id" class="uk-navbar-toggle menuHeader__navItem uk-hidden@m" uk-toggle>
                    <div id="m_nav_menu" class="m_nav menu">
                        <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                    </div>
                </a>
                <a href="{{url('/')}}" class="uk-navbar-item uk-logo menuHeader__navItem uk-padding-remove-left"><img src="{{asset('frontend/images/logo/logo.png')}}" alt=""></a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a href="{{url('/')}}" style="font-size: small">TRANG CHỦ</a></li>
                    <li>
                        <a href="{{url('/tra-cuu')}}" style="font-size: small">TRA CỨU</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{url('tra-cuu/van-don-van-chuyen')}}">Tra cứu vận đơn</a></li>
                                <li><a href="{{url('tra-cuu/gia-cuoc-van-chuyen')}}">Tra cứu giá cước</a></li>
                                <li><a href="{{url('tra-cuu/diem-gui-hang')}}">Tìm điểm gửi hàng</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/dich-vu')}}" style="font-size: small">DỊCH VỤ</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--gridMenu uk-navbar-dropdown-width-3">
                            <div class="uk-navbar-dropdown-grid uk-child-width-1-3 uk-grid-medium" uk-grid>
                                <div>
                                    <div>
                                        <a href="{{url('/dich-vu/van-chuyen-nhanh')}}">
                                            <div class="menuHeader__navbarDropdown__title">VẬN CHUYỂN NHANH</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Là gói giao hàng tốc độ rút
                                            gọn thời gian vận chuyển</div>
                                        <div class="menuHeader__navbarDropdown__desc1">Sài Gòn - Hà Nội chỉ mất <span>48h</span></div>
                                        <div class="menuHeader__navbarDropdown__desc1">Sài Gòn - Đà Nẵng chỉ mất <span>24h</span></div>
                                        <div class="uk-text-right">
                                            <a href="{{url('/dich-vu/van-chuyen-nhanh')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('/dich-vu/van-chuyen-xe-may')}}">
                                            <div class="menuHeader__navbarDropdown__title">VẬN CHUYỂN XE MÁY</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Dịch vụ vận chuyển xe máy
                                            bằng tàu hỏa nhanh nhất</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('/dich-vu/van-chuyen-xe-may')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('/dich-vu/van-chuyen-thu-cung')}}">
                                            <div class="menuHeader__navbarDropdown__title">VẬN CHUYỂN THÚ CƯNG</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Dịch vụ vận chuyển thú cưng đi
                                            toàn quốc an toàn nhất</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('/dich-vu/van-chuyen-thu-cung')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('/dich-vu/van-chuyen-tiet-kiem')}}">
                                            <div class="menuHeader__navbarDropdown__title">VẬN CHUYỂN TIẾT KIỆM</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Gói giao hàng tiêu chuẩn với
                                            giá cước tiết kiệm siêu rẻ</div>
                                        <div class="menuHeader__navbarDropdown__desc1">Sài Gòn - Hà Nội chỉ 1,500đ/kg </div>
                                        <div class="menuHeader__navbarDropdown__desc1">Sài Gòn - Đà Nẵng chỉ 900đ/kg</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('/dich-vu/van-chuyen-tiet-kiem')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('/dich-vu/van-chuyen-o-to')}}">
                                            <div class="menuHeader__navbarDropdown__title">VẬN CHUYỂN Ô TÔ</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Dịch vụ vận chuyển ô tô bằng tàu
                                            hỏa hoặc xe lồng chuyên dụng</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('/dich-vu/van-chuyen-o-to')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('/dich-vu/chuyen-nha-tron-goi-toan-quoc')}}">
                                            <div class="menuHeader__navbarDropdown__title">VẬN CHUYỂN NHÀ TOÀN QUỐC</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Dịch vụ chuyển nhà trọn gói đi
                                            63 tỉnh thành chuyên nghiệp</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('/dich-vu/chuyen-nha-tron-goi-toan-quoc')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/gia-cuoc')}}" style="font-size: small">GIÁ CƯỚC</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--gridMenu uk-navbar-dropdown-width-3">
                            <div class="uk-navbar-dropdown-grid uk-child-width-1-3 uk-grid-medium" uk-grid>
                                <div>
                                    <div>
                                        <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-nhanh')}}">
                                            <div class="menuHeader__navbarDropdown__title">GIÁ CƯỚC NHANH</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Là gói cước vận chuyển siêu
                                            nhanh bằng đường bộ</div>
                                        <div class="menuHeader__navbarDropdown__desc1"> Sài Gòn - Hà Nội chỉ 1,900đ/kg</div>
                                        <div class="menuHeader__navbarDropdown__desc1"> Sài Gòn - Đà Nẵng chỉ 1,300đ/kg</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-nhanh')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('gia-cuoc/gia-cuoc-gui-xe-may')}}">
                                            <div class="menuHeader__navbarDropdown__title">BẢNG GIÁ XE MÁY</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Tra cứu bảng giá gửi xe máy
                                            đi toàn quốc nhanh nhất</div>
                                        <div class="menuHeader__navbarDropdown__desc1"> .</div>
                                        <div class="menuHeader__navbarDropdown__desc1"> .</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('gia-cuoc/gia-cuoc-gui-xe-may')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-thu-cung')}}">
                                            <div class="menuHeader__navbarDropdown__title">BẢNG GIÁ THÚ CƯNG</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Tra cứu bảng cước vận chuyển
                                            thú cưng an toàn nhất</div>
                                        <div class="menuHeader__navbarDropdown__desc1"> .</div>
                                        <div class="menuHeader__navbarDropdown__desc1"> .</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-thu-cung')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-tiet-kiem')}}">
                                            <div class="menuHeader__navbarDropdown__title">GIÁ CƯỚC TIẾT KIỆM</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Là gói cước giao hàng tiêu
                                            chuẩn với giá cước cực rẻ</div>
                                        <div class="menuHeader__navbarDropdown__desc1"> Sài Gòn - Hà Nội chỉ 1,500đ/kg </div>
                                        <div class="menuHeader__navbarDropdown__desc1"> Sài Gòn - Đà Nẵng chỉ 900đ/kg </div>
                                        <div class="uk-text-right">
                                            <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-tiet-kiem')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-o-to')}}">
                                            <div class="menuHeader__navbarDropdown__title">BẢNG GIÁ Ô TÔ</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Tra cứu giá vận chuyển ô tô
                                            đi toàn quốc nhanh nhất</div>
                                        <div class="menuHeader__navbarDropdown__desc1">.</div>
                                        <div class="menuHeader__navbarDropdown__desc1">.</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-o-to')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('gia-cuoc/gia-cuoc-chuyen-nha-chon-goi-di-tinh')}}">
                                            <div class="menuHeader__navbarDropdown__title">GIÁ CƯỚC CHUYỂN NHÀ TOÀN QUỐC</div>
                                        </a>
                                        <div class="menuHeader__navbarDropdown__desc uk-margin-small">Tra cứu bảng giá chuyển nhà trọn
                                            gói đi toàn quốc chuyên nghiệp</div>
                                        <div class="menuHeader__navbarDropdown__desc1"></div>
                                        <div class="menuHeader__navbarDropdown__desc1">.</div>
                                        <div class="uk-text-right">
                                            <a href="{{url('gia-cuoc/gia-cuoc-chuyen-nha-chon-goi-di-tinh')}}" class="menuHeader__navbarDropdown__link">Xem thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/tin-tuc')}}" style="font-size: small">TIN TỨC</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--gridMenu uk-navbar-dropdown-width-3">
                            <div class="uk-navbar-dropdown-grid uk-child-width-1-3 uk-grid-medium" uk-grid>
                                <div>
                                    <div>
                                        <a href="{{url('tin-tuc/blog-xe-may')}}">
                                            <div class="menuHeader__navbarDropdown__title">TIN TỨC XE MÁY</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Kinh nghiệm xe máy</a></li>
                                            <li><a href="#">Tư vấn xe máy</a></li>
                                            <li><a href="#">Bảng giá xe máy</a></li>
                                            <li><a href="#">Danh sách hãng xe</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('tin-tuc/blog-thu-cung')}}">
                                            <div class="menuHeader__navbarDropdown__title">TIN TỨC THÚ CƯNG</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Bảng giá thú cưng</a></li>
                                            <li><a href="#">Hướng dẫn vận chuyển</a></li>
                                            <li><a href="#">Kinh nghiệm nuôi</a></li>
                                            <li><a href="#">Các giống thú cưng</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('tin-tuc/cam-nang-van-chuyen')}}">
                                            <div class="menuHeader__navbarDropdown__title">TIN TỨC VẬN CHUYỂN</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Cẩm nang cho khách hàng mới</a></li>
                                            <li><a href="#">Tài liệu vận chuyển</a></li>
                                            <li><a href="#">Hướng dẫn vận chuyển</a></li>
                                            <li><a href="#">Bảng giá cước hôm nay</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('tin-tuc/blog-o-to')}}">
                                            <div class="menuHeader__navbarDropdown__title">TIN TỨC Ô TÔ</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Tư vấn ô tô</a></li>
                                            <li><a href="#">Kinh nghiệm ô tô</a></li>
                                            <li><a href="#">Danh sách hãng xe</a></li>
                                            <li><a href="#">Bảng giá ô tô</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <a href="{{url('tin-tuc/blog-quy-long')}}" >
                                            <div class="menuHeader__navbarDropdown__title">BLOG QUY LONGG</div>
                                        </a>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                            <li><a href="#">Giới thiệu về chúng tôi</a></li>
                                            <li><a href="#">Thành viên HĐQT</a></li>
                                            <li><a href="#">Blog Quy Long</a></li>
                                            <li><a href="#">Khám phá</a></li>
                                            <li><a href="#">Hồ sơ năng lực</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <ul class="uk-list menuHeader__navbarDropdown__list1">
                                            <li><a href="#">Bảng giá xăng dầu hôm nay</a></li>
                                            <li><a href="#">Danh sách xe vận chuyển</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/tuyen-dung/')}}" style="font-size: small">TUYỂN DỤNG</a>
                        <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-tai-xe')}}">Tuyển dụng tài xế</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-thu-kho')}}">Tuyển dụng thủ kho</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-boc-xep')}}">Tuyển dụng bốc xếp</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-ke-toan-hanh-chinh')}}">Tuyển dụng kế toán hành chính</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-ke-toan-truong')}}">Tuyển dụng kế toán trưởng</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-nhan-vien-kinh-doanh')}}">Tuyển nhân viên kinh doanh</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-nhan-vien-buu-cuc')}}">Tuyển dụng nhân viên bưu cục</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-nhan-vien-XNK')}}">Tuyển dụng chuyên viên XNK</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-chuyen-vien-IT')}}">Tuyển dụng chuyên viên IT</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-truong-phong-kinh-doanh')}}">Tuyển trưởng phòng kinh doanh</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-truong-phong-marketing')}}">Tuyển trưởng phòng Marketing</a></li>
                                <li><a href="{{url('tuyen-dung/danh-muc/tuyen-dung-nhan-vien-giao-hang')}}">Tuyển dụng nhân viên giao hàng</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div>
                    <a class="uk-navbar-toggle menuHeader__navItem" href="#" uk-search-icon></a>
                    <div class="uk-navbar-dropdown menuHeader__boxSearch" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <form class="uk-search uk-search-navbar uk-width-1-1">
                                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                                </form>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="uk-flex">
                    <a href="" class="uk-navbar-item menuHeader__navItem menuHeader__flag"><img src="{{asset('frontend/images/logo/vn.png')}}" alt=""></a>
                    <a href="" class="uk-navbar-item menuHeader__navItem menuHeader__flag"><img src="{{asset('frontend/images/logo/us.png')}}" alt=""></a>
                </div>
            </div>
        </nav>
    </div>
</div>
