@extends('ketoan.layouts.NewHomepageLayout')
@section('title')
    Quản trị yêu cầu
@endsection
@section('style')

        h4
        {
            color: #656565;
            float: left;
            margin-left: 2%;
            font-weight: bold;
        }
        .left .row
        {
            background: none;
            margin-left: 0px;
        }
        .right .row
        {
            background: white;
            margin-left: 0px;
        }

@endsection
@section('content')
    @if(session()->has('success-message'))
        <div class="alert alert-success">
            {{ session()->get('success-message') }}
        </div>
    @endif
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-margin-medium">
                <div class="uk-flex-auto" uk-grid>
                    <div class="uk-width-1-1@s uk-width-2-5@m">
                        <div class="uk-text-left uk-text-large uk-text-uppercase" style="color:#FFA200;background: white;width: 85%;margin-left: 5%;margin-right: 10%;padding-left: 5%; padding-top: 20px; padding-bottom: 20px;border-bottom: 1px solid #CBCBCB;">
                            Quản lý Yêu cầu
                        </div>
                        <div style="max-height: 500px; overflow: scroll;overflow-x:hidden;background: white;width: 85%;margin-left: 5%;margin-right: 10%;margin-top: 0px">
                            <ul class="uk-tab-left home__block2__listStep" uk-tab="connect: #my-id" style="margin-left: 0px;width: 100%" >
                                <?php $i=0;?>
                                @foreach($yeucaus as $yeucau)
                                    <?php $i++;?>
                                    <li style="border-bottom: 1px solid #CBCBCB; width: 100%">
                                        <a href="" >
                                            <button id="{{$i*100}}" style="width:100%;border: none;position: relative">
                                                <div class="flag" style="position: absolute;z-index: 1; ;right:1%">
                                                    @if($yeucau->trangthai==0)
                                                        <img  src="{{asset('images/front/icon/flagorange.png')}}" >
                                                    @else
                                                        <img  src="{{asset('images/front/icon/flaggreen.png')}}" >
                                                    @endif
                                                </div>
                                                <div class="uk-card">
                                                    <div class="uk-text-bold uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                        {{$yeucau->name}}
                                                    </div>
                                                </div>
                                                <div class="uk-card">
                                                    <div class="uk-text-left uk-text-small" style="color:#656565; font-size: large">
                                                        Đơn hàng : {{$yeucau->ten}}
                                                    </div>
                                                </div>
                                                <div class="uk-card">
                                                    <div class="uk-text-left uk-text-small" style="color:#656565; font-size: large">
                                                        Gửi từ : <span style="font-weight: bold">{{$yeucau->diemguihang}}</span>
                                                    </div>
                                                </div>
                                                <div class="uk-card">
                                                    <div class="uk-text-left uk-text-small" style="color:#656565; font-size: large">
                                                        Gửi đến : <span style="font-weight: bold">{{$citys[$yeucau->id_diemnhan]}}</span>
                                                    </div>
                                                </div>
                                                <div class="uk-card">
                                                    @if($yeucau->trangthai==0)
                                                        <p style="padding: 0px 5px 0px 5px; background:#FFA200;color: white;font-size: 18px;border-radius: 5px 5px 5px 5px;width: 80%;margin-left: 10%"> Chờ tiếp nhận</p>
                                                    @else
                                                        <p style="padding: 0px 5px 0px 5px; background:#02AC3B;color: white;font-size: 18px;border-radius: 5px 5px 5px 5px;width: 80%;margin-left: 10%"> Đã tiếp nhận</p>
                                                    @endif
                                                </div>
                                                <div class="uk-card">
                                                    <div class="uk-text-left uk-text-small" style="color:#656565; font-size: large">
                                                        {{$yeucau->time_create}}
                                                    </div>
                                                </div>
                                            </button>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="uk-width-1-1@s uk-width-3-5@m">
                        <div class="uk-text-left uk-text-large uk-text-uppercase" style="color:#FFA200;background: white;width: 100%;padding-left: 5%; padding-top: 20px; padding-bottom: 20px;border-bottom: 1px solid #CBCBCB;">
                            Chi tiết Yêu cầu
                        </div>
                        <div style="background: white">
                            <ul id="my-id" class="uk-switcher">
                                <?php $i=0;?>
                                <?php $n= count($yeucaus)?>
                                @foreach($yeucaus as $yeucau)
                                    <?php $i++;?>
                                    <li style="padding-top: 2%;padding-bottom: 2%" >
                                        <div style="width:94%; margin-left:3%; background:#e9e9e9;border-radius: 10px 10px 10px 10px;border: 1px solid #B9B9B9;padding: 2% 2% 2% 2%;">
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Tên đơn vị: <span class="uk-text-bold">{{$yeucau->ten_don_vi}}</span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Người đại diện: <span class="uk-text-bold">{{$yeucau->nguoi_dd}}</span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Số điện thoại: <span class="uk-text-bold">{{$yeucau->phone}}</span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Tên mặt hàng: <span class="uk-text-bold">{{$yeucau->ten}}</span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Khối lượng: <span class="uk-text-bold">{{$yeucau->trongluong}}</span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Đơn vị tính: <span class="uk-text-bold">{{$yeucau->donvi}}</span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Gửi từ: : <span class="uk-text-bold">{{$yeucau->diemguihang}}</span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Gửi đến: <span class="uk-text-bold">{{$citys[$yeucau->id_diemnhan]}}</span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Dịch vụ vận chuyển: <span class="uk-text-bold">
                                                        @if($yeucau->dichvu=='VTK')
                                                            {{'VTK - Vận chuyển tiết kiệm'}}
                                                        @elseif ($yeucau->dichvu=='CPN')
                                                            {{'CPN - Chuyển phát nhanh'}}
                                                        @else
                                                            {{'VCN - Vận chuyển nhanh'}}
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Yêu cầu lấy hàng: <span class="uk-text-bold">
                                                       @if($yeucau->yeucaulayhang==0)
                                                            {{'Đến lấy tận nơi'}}
                                                        @else
                                                            {{'Gửi hàng tại kho'}}
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Yêu cầu giao hàng: <span class="uk-text-bold">
                                                       @if($yeucau->yeucaugiaohang==0)
                                                            {{'Giao hàng tận nơi'}}
                                                        @else
                                                            {{'Giao hàng tại kho'}}
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#656565;font-size: large">
                                                    Người tiếp nhận: <span class="uk-text-bold">{{$yeucau->name}}</span>
                                                </div>
                                            </div>
                                            <div class="uk-card">
                                                <div class="uk-text-left uk-text-small" style="color:#e98e05;font-size: large">
                                                    Ghi chú : <span class="uk-text-bold">{{$yeucau->ghichu}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-margin-medium uk-text-right" style="padding-right: 3%;">
                                            @if($yeucau->trangthai==0)
                                                <a href="{{url('ketoan/yeu-cau/tiep-nhan/'.$yeucau->ma_yc)}}"> <button style="background: #FFAA00;padding: 10px 10px 10px 10px;color: white;font-size: 16px;border: none;border-radius: 10px 10px 10px 10px"> Tiếp nhận đơn hàng</button></a>
                                            @endif
                                            <a href="{{url('ketoan/yeu-cau/delete/'.$yeucau->ma_yc)}}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')" style="margin-left: 10px"> <button style="background: #b8230f;padding: 10px 10px 10px 10px;color: white;font-size: 16px;border: none;border-radius: 10px 10px 10px 10px"> Xóa yêu cầu</button></a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



