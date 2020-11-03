@extends('taixe.layouts.homepageLayout')
@section('title')
    Trang dành cho Tài Xế
@endsection
@section('style')
    tr td
    {
        text-align:center;
        color:#707070;
    }

@endsection
@section('content')
    <div class="row" style="width:90%;margin-left:5%;margin-top: 2%">
        <marquee behavior="alternate"><h5 style="margin-top: 2%;color: #FFAA00"> Xin chào {{Auth::user()->name}} !</h5></marquee>
    </div>
    <div id="btn-tracking" class="row" style="margin-top: 40%">
        <button onclick="openformTracking()" STYLE="background:#686868;color: white;border:none;border-radius: 5px 5px 5px;width: 80%;margin-left: 10%;padding-top: 15px;padding-bottom: 15px;font-size: 16px;font-weight: bold">TRACKING ĐƠN HÀNG</button>
    </div>
    <div id="trackingForm" class="row" style="margin-top: 2%;width: 90%;margin-left: 5%;border-radius: 5px 5px 0px 0px;border: 1px solid #CACACA;padding-bottom:1%;display: none">
        <div class="row" style="width: 100%;background:#D6D6D6;text-align: center;padding-bottom: 5px;padding-top: 5px">
            <h4 style="color:#656565;font-size: 18px;text-align: center">TRACKING ĐƠN HÀNG</h4>
        </div>
        <div class="row" style="width: 100%;background:#FFFFFF;text-align: center;padding-bottom: 10px;padding-top: 10px">
           <div class="row" style="width: 40%;float: left;background: white">
               <h5 style="color: #707070;font-size: 14px">Mã đơn hàng </h5>
           </div>
           <div class="row" style="width: 60%;float: right;background: white">
               <input id="madonhang" type="text" name="madonhang" placeholder="     Nhập mã vận đơn" style="width: 90%;margin-left: 5%">
           </div>
        </div>
        <div class="row" style="background: white;width: 100%;text-align: center">
            <button onclick="openKQ()" style="color: white;padding-top: 5px;padding-bottom: 5px;background: #FFAA00;text-align: center;border: none;border-radius: 10px 10px 10px 10px">Search</button>
        </div>
    </div>
    @foreach($donhangs as $donhang)
        <div id="detailDH-{{$donhang->madonhang}}" class="row" style="display: none">
            <div class="row" style="margin-top: 2%;width: 90%;margin-left: 5%;border-radius: 5px 5px 0px 0px;border: 1px solid #CACACA;">
                <div class="row" style="width: 100%;background:#D6D6D6;text-align: center;padding-bottom: 5px;padding-top: 5px">
                    <h4 style="color:#656565;font-size: 18px;text-align: center">TRACKING ĐƠN HÀNG</h4>
                </div>
                <div class="row" style="width: 100%;background:#FFFFFF;text-align: center;padding-bottom: 5px;padding-top: 5px">
                    <div class="row" style="width: 40%;float: left;background: white">
                        <h5 style="color: #707070;font-size: 14px">Mã đơn hàng </h5>
                    </div>
                    <div class="row" style="width: 60%;float: right;background: white">
                        <h5 style="color:#707070;font-size: 14px">{{$donhang->madonhang}}</h5>
                    </div>
                </div>
                <div class="row" style="width: 100%;background:#FFFFFF;text-align: center;padding-bottom: 5px;padding-top: 5px">
                    <div class="row" style="width: 40%;float: left;background: white">
                        <h5 style="color: #707070;font-size: 14px">Người nhân: </h5>
                    </div>
                    <div class="row" style="width: 60%;float: right;background: white">
                        <?php $info_nguoinhan = json_decode($donhang->info_nguoinhan)?>
                        <h5 style="color:#707070;font-size: 14px">{{$info_nguoinhan->{'ten'} }}</h5>
                    </div>
                </div>
                <div class="row" style="width: 100%;background:#FFFFFF;text-align: center;padding-bottom: 5px;padding-top: 5px">
                    <div class="row" style="width: 40%;float: left;background: white">
                        <h5 style="color: #707070;font-size: 14px">SĐT: </h5>
                    </div>
                    <div class="row" style="width: 60%;float: right;background: white">
                        <?php $info_nguoinhan = json_decode($donhang->info_nguoinhan)?>
                        <h5 style="color:#707070;font-size: 14px">{{$info_nguoinhan->{'sdt'} }}</h5>
                    </div>
                </div>
                <div class="row" style="width: 100%;background:#FFFFFF;text-align: center;padding-bottom: 5px;padding-top: 5px">
                    <div class="row" style="width: 40%;float: left;background: white">
                        <h5 style="color: #707070;font-size: 14px">Địa chỉ: </h5>
                    </div>
                    <div class="row" style="width: 60%;float: right;background: white">
                        <?php $info_nguoinhan = json_decode($donhang->info_nguoinhan)?>
                        <h5 style="color:#707070;font-size: 14px">{{$info_nguoinhan->{'diachi'} }}</h5>
                    </div>
                </div>
                <div class="row" id="more-xngiaohang-{{$donhang->madonhang}}" style="background:white;">
                    <div class="row" style="width: 100%;background:#FFFFFF;text-align: center;padding-bottom: 5px;padding-top: 5px">
                        <div class="row" style="width: 50%;float: left;background: white">
                            <h5 style="color: #707070;font-size: 14px">Thu tiền người nhân: </h5>
                        </div>
                        <div class="row" style="width: 50%;float: right;background: white">
                            <h5 style="color:#707070;font-size: 14px">{{number_format($donhang->thuho).' VNĐ' }}</h5>
                        </div>
                    </div>
                    <div class="row" style="width: 100%;background:#FFFFFF;text-align: center;padding-bottom: 5px;padding-top: 5px">
                        <div class="row" style="width: 50%;float: left;background: white">
                            <h5 style="color: #707070;font-size: 14px">Thu hồi biên bản: </h5>
                        </div>
                        <div class="row" style="width: 50%;float: right;background: white">
                            @if($donhang->thuhoibienban==1)
                                <h5 style="color:#707070;font-size: 14px">{{'Có'}}</h5>
                            @else
                                <h5 style="color:#707070;font-size: 14px">{{'Không'}}</h5>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="width: 100%;background:#FFFFFF;float:left;padding-bottom: 5px;padding-top: 5px">
                            <h5 style="color: #707070;font-size: 14px">Chi Chú: </h5>
                    </div>
                    <div class="row" style="width: 100%;background:#FFFFFF;text-align: center;padding-bottom: 5px;padding-top: 5px">
                            <p style="color: #707070;font-size: 14px">
                            @if($donhang->time_giao==0)
                                {{' yêu cầu giao cả ngày'}}
                                @elseif($donhang->time_giao==1)
                                    {{'Yêu cầu giao: Buổi sáng (7:00-12:00 AM)'}}
                                @elseif($donhang->time_giao==2)
                                    {{'Yêu cầu giao: Buổi chiều (13:00-17:00 PM)'}}
                                @elseif($donhang->time_giao==3)
                                    {{'Yêu cầu giao: Chủ nhật, ngày nghỉ lễ'}}
                            @endif
                            </p>
                    </div>
                </div>
            </div>
            @if($donhang->status<2)
                <div class="row" style="width: 90%;text-align: center;margin-top: 2%">
                    <a href="{{url('tai-xe/tracking/'.$donhang->madonhang.'/Đã lấy hàng')}}" ><button STYLE="background:#686868;color: white;border:none;border-radius: 5px 5px 5px;width: 80%;margin-left: 10%;padding-top: 15px;padding-bottom: 15px;font-size: 16px;font-weight: bold">XÁC NHẬN LẤY HÀNG</button></a>
                </div>
                <div class="row" style="width: 90%;text-align: center;margin-top: 2%">
                    <a href="{{url('tai-xe/tracking/'.$donhang->madonhang.'/Đã giao hàng')}}" ><button  STYLE="background:#FFA200;color: white;border:none;border-radius: 5px 5px 5px;width: 80%;margin-left: 10%;padding-top: 15px;padding-bottom: 15px;font-size: 16px;font-weight: bold">XÁC NHẬN GIAO HÀNG</button></a>
                </div>
            @elseif($donhang->status<4)
                <div class="row" style="width: 90%;text-align: center;margin-top: 2%">
                    <a href="{{url('tai-xe/tracking/'.$donhang->madonhang.'/Đã giao hàng')}}" ><button  STYLE="background:#FFA200;color: white;border:none;border-radius: 5px 5px 5px;width: 80%;margin-left: 10%;padding-top: 15px;padding-bottom: 15px;font-size: 16px;font-weight: bold">XÁC NHẬN GIAO HÀNG</button></a>
                </div>
            @endif


        </div>

    @endforeach
    <div id="btn-dsdonhang" class="row" style="margin-top: 5%">
        <button onclick="openDSdonhang()" STYLE="background:#FFA200;color: white;border:none;border-radius: 5px 5px 5px;width: 80%;margin-left: 10%;padding-top: 15px;padding-bottom: 15px;font-size: 16px;font-weight: bold">DANH SÁCH ĐƠN HÀNG</button>
    </div>
    <div id="dsdonhangs" class="row" style="display: none">
        <div class="row" style="margin-top: 1%">
            <table>
                <thead style="margin-top: 2%;width: 96%;margin-left: 2%;border-radius: 10px 10px 0px 0px;border: 1px solid #CACACA;background: #FFA200;height: 40px">
                    <tr>
                        <td style="color: black"> STT</td>
                        <td style="color: black"> Tên hàng</td>
                        <td style="color: black"> Nơi đến</td>
                        <td style="color: black"></td>
                    </tr>
                </thead>
                <tbody style="background:white ">
                <?php $i=0;?>
                    @foreach($donhangs as $donhang)
                        <?php $i++;?>
                        <tr style="border-bottom: 1px solid #C1C1C1">
                            <td>{{$i}}</td>
                            <?php $info_hanghoa= json_decode($donhang->info_hanghoa);?>
                            <?php $info_vanchuyen= json_decode($donhang->info_vanchuyen);?>
                            <td>{{$info_hanghoa->{'ten'} }}</td>
                            <td>{{$info_vanchuyen->{'noiden'} }}</td>
                            <td><button  onclick="openTracking({{$donhang->madonhang}})" style="font-style: italic;color: #FFAA00;border: none;background: none;">Tracking</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">



        function openformTracking()
        {
            document.getElementById('trackingForm').style.display="block";
            document.getElementById('btn-tracking').style.display="none";
            document.getElementById('btn-dsdonhang').style.display="none";
        }
        function openDSdonhang()
        {
            document.getElementById('dsdonhangs').style.display="table-row";
            document.getElementById('btn-tracking').style.display="none";
            document.getElementById('btn-dsdonhang').style.display="none";
        }
        function openKQ()
        {
            let x=  document.getElementById("madonhang").value;
            let tmp =  document.getElementById('detailDH-'+x);
            if(tmp==null)
            {
                alert("Mã đơn hàng không tồn tại ")
            }
            else
            {
                document.getElementById('detailDH-'+x).style.display="block";
                document.getElementById('trackingForm').style.display="none";
            }

        }
        function openTracking(x)
        {

            let tmp =  document.getElementById('detailDH-'+x);
            if(tmp==null)
            {
                alert("Mã đơn hàng không tồn tại ")
            }
            else
            {
                document.getElementById('detailDH-'+x).style.display="block";
                document.getElementById('dsdonhangs').style.display="none";
            }

        }

    </script>
@endsection
