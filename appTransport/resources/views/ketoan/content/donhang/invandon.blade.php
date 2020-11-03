<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>
        In Vận Đơn
    </title>
    @include('user.partial.head')
    <style type="text/css">
        @yield('style')
        .container
        {
            font-family: "Segoe UI";
            font-size: 16px;
            margin-top: 1%;
            /*width:660px;*/
           /* height: 840px;*/
            border: 1px solid black;
            padding: 2% 5px 5px 5px;
            /*position: absolute;*/
        }
        .row
        {
            width: 100%;
            background: white;
            font-family: "Segoe UI";
            margin-left: 0px;
            margin-right: 0px;
        }
        .row
        {
            position: relative;
        }

    </style>
</head>
<body>
<div class="container" >
    <!--headder-->
    <div class="print-container">
        <div class="row" style="background: white">
            <div class="row" style="width: 90%;margin-left: 5%">
                <div class="row" style="width: 40%;float: left">
                    <div class="row" style="width: 95%;margin-left: 5%">
                        <img src="{{asset('images/front/logo/logo1.png')}}" style="width: 250px">
                    </div>
                    <div class="row" style="width: 95%;margin-left: 5%">
                        <h5 style="color: black;font-size: 18px;font-weight: inherit">Loại dịch vụ:</h5>
                        @if($donhang->dichvu=='CPN')
                            <h4> CPN - Chuyển phát nhanh</h4>
                        @elseif($donhang->dichvu=='VTK')
                            <h4> VTK - Vận chuyển tiết kiệm</h4>
                        @else
                            <h4> VCN - Vận chuyển nhanh</h4
                        @endif

                    </div>
                </div>
                <div class="row" style="width:60%;float: right">
                    <div class="row" style="width: 70%;margin-left: 20%">
                       {{-- <img src="{{asset($barcode)}}" style="width:100%" alt="ma don hang">--}}
                        <?php echo($barcode);?>
                    </div>
                    <div class="row" style="width: 90%;margin-left: 5%;">
                        <div class="row" style="width: 50%;float: left">
                            <h5 style="color: #101010;font-size: 18px;font-weight: inherit">Mã vận đơn: </h5>
                            <h5 style="color: #101010;font-size: 18px;font-weight: inherit">Mã khách hàng: </h5>
                        </div>
                        <div class="row" style="width: 50%;float: right">
                            <h5 style="color: black;font-size: 18px;">{{$donhang->madonhang}} </h5>
                            <h5 style="color: black;font-size: 18px;">{{$donhang->Ma_khachhang}}</h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row" style="width: 90%;margin-left: 5%;border-bottom:1px solid black"></div>
            <div class="row" style="width: 90%;margin-left: 5%;border-bottom:3px dotted  black;padding-bottom:2%">
                <div class="row" style="width: 50%;float: left">
                    <div class="row">
                        <h5 style="color: #101010;font-size: 18px;font-weight: inherit">Gửi từ : </h5>
                        <p style="color: black;font-size: 18px;font-weight: bold">
                            {{$donhang->ten_don_vi}}<br>
                            {{$donhang->address}}<br>
                            {{$donhang->phone}}<br>
                        </p>
                    </div>
                </div>
                <div class="row" style="width: 50%;float: right">
                    <h5 style="color: #101010;font-size: 18px;font-weight: inherit">Gửi đến : </h5>
                    <?php  $info_nguoinhan = json_decode($donhang->info_nguoinhan);?>
                    <p style="color: black;font-size: 18px;font-weight: bold">
                        {{$info_nguoinhan->{'ten'} }}<br>
                        {{$info_nguoinhan->{'diachi'} }}<br>
                        {{$info_nguoinhan->{'sdt'} }}<br>
                    </p>
                </div>
            </div>
            <div class="row" style="width: 90%;margin-left: 5%;border-bottom:3px dotted  black;padding-bottom:2%">
                <div class="row">

                    <h5 style="color: #101010;font-size: 18px;font-weight: inherit">Nội dung hàng hóa : </h5>
                    <?php  $info_hanghoa = json_decode($donhang->info_hanghoa);?>
                    <p style="color: black;font-size: 18px;">
                        Tên hàng : <span style="font-weight: bold;">{{$info_hanghoa->{'ten'} }}</span><br>
                        Số lượng :<span style="font-weight: bold;"></span><br>
                        Đơn vị tính :<span style="font-weight: bold;">{{$info_hanghoa->{'donvi'} }}</span><br>
                        Trọng lượng : <span style="font-weight: bold;">{{$info_hanghoa->{'trongluong'}  }} {{$info_hanghoa->{'donvi'} }}</span><br>
                    </p>
                </div>
            </div>
            <div class="row" style="width: 95%;margin-left: 5%;">
                <div class="row" style="width: 50%;float: left">
                    <div class="row">
                        <h5 style="color: #101010;font-size: 18px;font-weight: inherit">Thu tiền người nhận: </h5>
                    </div>
                    <div class="row">
                        <?php  $info_vanchuyen = json_decode($donhang->info_vanchuyen);?>
                        <h4 style="color: black;font-size: 24px;font-weight: bold">{{number_format($info_vanchuyen->{'giacuoc'}).' VNĐ'}}</h4>
                    </div>
                    <div class="row" style="width: 90%">
                        <h5 style="color: #101010;font-size: 18px;font-weight: inherit">Ghi chú: </h5>
                        <p style="border: 2px solid #707070;padding: 10px 10px 10px;min-height: 100px">
                            {{$donhang->ghichu}}
                        </p>
                    </div>
                </div>
                <div class="row" style="width: 50%;float: right">
                    <h5 style="color: #101010;font-size: 18px;font-weight: inherit">Thu hồi biên bản :
                        <span style="font-weight: bold;margin-left: 20px">
                        @if($donhang->thuhoibienban==1)
                                {{'Có'}}
                            @else
                                {{'Không'}}
                            @endif
                    </span>
                    </h5>
                    <?php  $info_nguoinhan = json_decode($donhang->info_nguoinhan);?>
                    <div class="row" style="width: 95%">
                        <p style="border: 2px solid #707070;padding: 10px 10px 10px;min-height: 185px;margin-top: 3%;text-align: center">
                            <span style="font-size: 20px;font-weight: bold">Chữ ký người nhận</span><br>
                            Xác nhận hàng nguyên kiện/đủ số lượng
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row" style="padding-bottom: 1%">

</div>
</body>
</html>

