<div class="row menu-top" style="margin-left: 0px">
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <h5>
                <i class="fa fa-user-o" aria-hidden="true"></i>
                Hotline: <span style="font-weight: bold;">1900 8058 | 0972 475 677</span>
                07:00 -21:00 Thứ Hai- Chủ Nhật
            </h5>
    </div>
    <div class="col-sm-3">
        <form action="{{url('/tra-cuu/van-don')}}" method="post">
            @csrf
                <div class="row search_top_form">
                    <div class="col-md-9" style="border-radius:8px;background-color: white;height: 90%;float: left;margin-top: 1%">
                        <i class="fa fa-search" aria-hidden="true" style="margin-top: 5%"></i>
                        <input type="text" name="mavandon" placeholder=" Nhập mã đơn hàng ở  đây" style="border: none;width: 90%;margin: 0px auto;outline: none" value="">
                    </div>
                    <div class="col-md-3" style="float:left">
                        <button type="submit" class="btn" STYLE="background-color:#6a6a6a;border-radius:10px;height: 90%;margin-top: 5%">TÌM KIẾM</button>
                    </div>
                </div>
        </form>
    </div>
    <div class="col-sm-3" style="height: 100%">
        <div class="row login">
            <ul>
                <li>
                    <a href="{{route('register')}}">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                        Đăng nhập
                    </a>
                </li>
                <li>
                    <a href="{{route('login')}}">
                        /Đăng kí
                    </a>
                </li>
            </ul>
        </div>

    </div>
    <div class="col-sm-1"></div>
</div>
<div class="row menu" style="margin-left: 0px;height: 100px">
    {{--<div class="col-sm-1"></div>--}}
    <div class="col-sm-11">
        <div class="row" style="margin-top: 15px;margin-left: 50px">
            <div class="col-sm-2">
                <div class="logo">
                    <img src="{{asset('images/front/logo/logo-quylong.png')}}" {{--width="100%"--}} height="75px" alt="" >
                </div>
            </div>
            <div class="col-sm-9" style="font-family: 'Segoe UI'">
                <ul class="ul-menu" id="main_menu">
                    <li>
                        <a href="{{url('/')}}">TRANG CHỦ</a>
                    </li>
                    <li>
                        <a href="{{url('/tra-cuu')}}">TRA CỨU <i class="fa fa-angle-down" ></i></a>
                        <ul class="sub_menu" style="margin-left: 10%" >
                            <li style="border-bottom: 1px solid #707070; height: 30px;margin-top: 10px;"><a href="{{url('tra-cuu/van-don-van-chuyen')}}">Tra cứu vận đơn</a></li>
                            <li style="border-bottom: 1px solid #707070; height: 30px;margin-top: 10px;"><a href="{{url('tra-cuu/gia-cuoc-van-chuyen')}}">Tra cứu gói cước</a></li>
                            <li style="border-bottom: 1px solid #707070; height: 30px;margin-top: 10px;"><a href="{{url('tra-cuu/diem-gui-hang')}}">Tìm điểm gửi hàng</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/dich-vu')}}">DỊCH VỤ <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="sub_menu" style=" width: 100%" >
                            <div class="row" style="width: 100% ;margin-top:3%;border-bottom: 1px solid #707070;">
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px; ">
                                        <a href="{{url('/dich-vu/van-chuyen-nhanh')}}" style="border-bottom: 1px solid #FFAA00; ">VẬN CHUYỂN NHANH</a>
                                        <p style="color:#707070">Là gói giao hàng tốc độ rút
                                            gọn thời gian vận chuyển<br>
                                            Sài Gòn - Hà Nội chỉ mất 48h <br>
                                            Sài Gòn - Đà Nẵng chỉ mất 24h</p>
                                    </li>
                                </div>
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('/dich-vu/van-chuyen-xe-may')}}" style="border-bottom: 1px solid #FFAA00; ">VẬN CHUYỂN XE MÁY</a>
                                        <p style="color:#707070">Dịch vụ vận chuyển xe máy
                                            bằng tàu hỏa nhanh nhất</p>
                                    </li>
                                </div>
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('/dich-vu/van-chuyen-thu-cung')}}" style="border-bottom: 1px solid #FFAA00; ">VẬN CHUYỂN THÚ CƯNG</a>
                                        <p style="color:#707070">Dịch vụ vận chuyển thú cưng đi
                                            toàn quốc an toàn nhất</p>
                                    </li>
                                </div>
                            </div>
                            <div class="row" style="width: 100% ">
                                <div class="col-sm-4" style=" margin-top: 5px; ">
                                    <li style=" margin-top: 5px; ">
                                        <a href="{{url('/dich-vu/van-chuyen-tiet-kiem')}}" style="border-bottom: 1px solid #FFAA00; ">VẬN CHUYỂN TIẾT KIỆM</a>
                                        <p style="color:#707070">Gói giao hàng tiêu chuẩn với
                                            giá cước tiết kiệm siêu rẻ<br>
                                            Sài Gòn - Hà Nội chỉ 1,500đ/kg <br>
                                            Sài Gòn - Đà Nẵng chỉ 900đ/kg</p>
                                    </li>
                                </div>
                                <div class="col-sm-4" style=" margin-top: 5px; ">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('/dich-vu/van-chuyen-o-to')}}" style="border-bottom: 1px solid #FFAA00; ">VẬN CHUYỂN Ô TÔ</a>
                                        <p style="color:#707070">Dịch vụ vận chuyển ô tô bằng tàu
                                            hỏa hoặc xe lồng chuyên dụng</p>
                                    </li>
                                </div>
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('/dich-vu/chuyen-nha-tron-goi-toan-quoc')}}" style="border-bottom: 1px solid #FFAA00; ">VẬN CHUYỂN NHÀ TOÀN QUỐC</a>
                                        <p style="color:#707070">Dịch vụ chuyển nhà trọn gói đi
                                            63 tỉnh thành chuyên nghiệp</p>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/gia-cuoc')}}">GIÁ CƯỚC <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="sub_menu" style=" width: 100%" >
                            <div class="row" style="width: 100% ;margin-top:3%;border-bottom: 1px solid #707070;">
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px; ">
                                        <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-nhanh')}}" style="border-bottom: 1px solid #FFAA00; ">GIÁ CƯỚC NHANH</a>
                                        <p style="color:#707070">Là gói cước vận chuyển siêu
                                            nhanh bằng đường bộ<br>
                                            Sài Gòn - Hà Nội chỉ 1,900đ/kg<br>
                                            Sài Gòn - Đà Nẵng chỉ 1,300đ/kg</p>
                                    </li>
                                </div>
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('gia-cuoc/gia-cuoc-gui-xe-may')}}" style="border-bottom: 1px solid #FFAA00; ">BẢNG GIÁ XE MÁY</a>
                                        <p style="color:#707070">Tra cứu bảng giá gửi xe máy
                                            đi toàn quốc nhanh nhất</p>
                                    </li>
                                </div>
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-thu-cung')}}" style="border-bottom: 1px solid #FFAA00; ">BẢNG GIÁ THÚ CƯNG</a>
                                        <p style="color:#707070">Tra cứu bảng cước vận chuyển
                                            thú cưng an toàn nhất</p>
                                    </li>
                                </div>
                            </div>
                            <div class="row" style="width: 100% ">
                                <div class="col-sm-4" style=" margin-top: 5px; ">
                                    <li style=" margin-top: 5px; ">
                                        <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-tiet-kiem')}}" style="border-bottom: 1px solid #FFAA00; ">GIÁ CƯỚC TIẾT KIỆM</a>
                                        <p style="color:#707070">Là gói cước giao hàng tiêu
                                            chuẩn với giá cước cực rẻ<br>
                                            Sài Gòn - Hà Nội chỉ 1,500đ/kg <br>
                                            Sài Gòn - Đà Nẵng chỉ 900đ/kg</p>
                                    </li>
                                </div>
                                <div class="col-sm-4" style=" margin-top: 5px; ">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('gia-cuoc/gia-cuoc-van-chuyen-o-to')}}" style="border-bottom: 1px solid #FFAA00; ">BẢNG GIÁ Ô TÔ</a>
                                        <p style="color:#707070">Tra cứu giá vận chuyển ô tô
                                            đi toàn quốc nhanh nhất</p>
                                    </li>
                                </div>
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('gia-cuoc/gia-cuoc-chuyen-nha-chon-goi-di-tinh')}}" style="border-bottom: 1px solid #FFAA00; ">GIÁ CƯỚC CHUYỂN NHÀ TOÀN QUỐC</a>
                                        <p style="color:#707070">Tra cứu bảng giá chuyển nhà trọn
                                            gói đi toàn quốc chuyên nghiệp</p>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/tin-tuc')}}">TIN TỨC <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="sub_menu" style=" width: 100%" >
                            <div class="row" style="width: 100% ;margin-top:3%;border-bottom: 1px solid #707070;">
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px; ">
                                        <a href="{{url('tin-tuc/blog-xe-may')}}" style="border-bottom: 1px solid #FFAA00; ">TIN TỨC XE MÁY</a>
                                        <p style="color:#707070">Là gói cước vận chuyển siêu
                                            nhanh bằng đường bộ<br>
                                            Sài Gòn - Hà Nội chỉ 1,900đ/kg<br>
                                            Sài Gòn - Đà Nẵng chỉ 1,300đ/kg</p>
                                    </li>
                                </div>
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('tin-tuc/blog-thu-cung')}}" style="border-bottom: 1px solid #FFAA00; ">TIN TỨC THÚ CƯNG</a>
                                        <p style="color:#707070">Tra cứu bảng giá gửi xe máy
                                            đi toàn quốc nhanh nhất</p>
                                    </li>
                                </div>
                                <div class="col-sm-4">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('tin-tuc/cam-nang-van-chuyen')}}" style="border-bottom: 1px solid #FFAA00; ">TIN TỨC VẬN CHUYỂN</a>
                                        <p style="color:#707070">Tra cứu bảng cước vận chuyển
                                            thú cưng an toàn nhất</p>
                                    </li>
                                </div>
                            </div>
                            <div class="row" style="width: 100% ">
                                <div class="col-sm-4" style=" margin-top: 5px; ">
                                    <li style=" margin-top: 5px; ">
                                        <a href="{{url('tin-tuc/blog-o-to')}}" style="border-bottom: 1px solid #FFAA00; ">TIN TỨC Ô TÔ</a>
                                        <p style="color:#707070">Là gói cước giao hàng tiêu
                                            chuẩn với giá cước cực rẻ<br>
                                            Sài Gòn - Hà Nội chỉ 1,500đ/kg <br>
                                            Sài Gòn - Đà Nẵng chỉ 900đ/kg</p>
                                    </li>
                                </div>
                                <div class="col-sm-4" style=" margin-top: 5px; ">
                                    <li style=" margin-top: 5px;">
                                        <a href="{{url('tin-tuc/blog-quy-long')}}" style="border-bottom: 1px solid #FFAA00; ">BLOG QUY LONG</a>
                                        <p style="color:#707070">Tra cứu giá vận chuyển ô tô
                                            đi toàn quốc nhanh nhất</p>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/tuyen-dung/')}}">TUYỂN DỤNG <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="sub_menu" style="margin-left: 60%">
                            @foreach($tuyendung_cates as $tuyendung_cate)
                                <li style="border-bottom: 1px solid #707070;margin-top: 10px;margin-left: 0px"><a href="{{url('/tuyen-dung/danh-muc/'.$tuyendung_cate->slug)}}">{{$tuyendung_cate->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/lien-he')}}">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-1">
                <div class="row" style="padding-top: 23px;">
                    <div class="col-sm-6">
                        <a href="#">
                            <img src="{{asset('images/front/logo/vn.png')}}">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#">
                            <img src="{{asset('images/front/logo/us.png')}}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
<script type="text/javascript">
    function openK(id)
    {
        document.getElementById(id).style="display:block"
    }
</script>
