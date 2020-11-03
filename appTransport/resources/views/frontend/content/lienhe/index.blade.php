@extends('frontend.layouts.NoBanner')
@section('title')
    Liên Hệ | Quy Long
@endsection
@section('content')
    <div class="container" style="font-family: 'Segoe UI'" id="main_content">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="row">
                    <h4 style="color: #FFAA00"><a href="{{url('/')}}"  style="color: #FFAA00">Trang chủ</a> <span style="color:#707070 "> ></span> <a href="{{url('/lien-he')}}" style="color: #FFAA00"> Liên hệ</a></h4>
                </div>
                <div class="row" style="margin-left: 5%">
                    <h3 style="font-weight: bold; color: black;text-align: center">Chúng tôi luôn sẵn sàng hỗ trợ Quý Khách 24/24</h3>
                </div>
                <div class="row" style="margin-top: 3%;padding-bottom: 5%">
                    <div class="col-sm-6">
                        <h4 style="font-weight: bold">Cần hỗ trợ về vận chuyển</h4>
                        <p style="color: #707070">Đừng ngần ngại! Hãy gửi tin nhắn đến chúng tôi và vấn đề của bạn sẽ được giải quyết nhanh chóng. Nếu có thắc mắc gì vui lòng gọi đến HOTLINE để được xử lý nhanh hơn!</p>
                        <form action="{{url('/transport/support')}}" method="post">
                            @csrf
                            <div class="row" >
                                <label style="display: block"> Họ & Tên khách hàng(*)</label>
                                <input type="text" name="name" style="width: 80%">
                            </div>
                            <div class="row">
                                <label style="display: block"> Địa chỉ mail(*)<br></label>
                                <input type="text" name="email" style="width: 80%">
                            </div>
                            <div class="row">
                                <label style="display: block"> Số điện thoại(*)</label>
                                <input type="text" name="phone" style="width: 80%">
                            </div>
                            <div class="row">
                                <label style="display: block"> Tên mặt hàng</label>
                                <input type="text" name="name_product" style="width: 80%" value="">
                            </div>
                            <div class="row">
                                <label style="display: block"> Trọng lượng</label>
                                <input type="text" name="weight" style="width: 80%" value="0">
                            </div>
                            <div class="row">
                                <label style="display: block">Địa điểm gửi</label>
                                <input type="text" name="address_s" style="width: 80%" value="">
                            </div>
                            <div class="row">
                                <label style="display: block"> Địa điểm nhận</label>
                                <input type="text" name="address_r" style="width: 80%" value="">
                            </div>
                            <div class="row">
                                <label style="display: block">Nội dung tin nhắn(*)</label>
                                <textarea type="text" name="content" style="width: 80%;height: 20%"></textarea>
                            </div>
                            <div class="row" >
                                <button class="btn btn-warning" type="submit" style="text-align: center;width: 80%"> GỬi đi</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-2">
                        <img src="{{asset('/images/front/icon/acount_1.png')}}" style="width: 70%;margin-left: 15%;max-width: 90px">
                        <h5 style="text-align: center">Chuyên viên tư vấn</h5>
                    </div>
                    <div class="col-sm-4">
                        <?php
                            echo($contact->desc) ;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">

            </div>
        </div>
    </div>
@endsection


