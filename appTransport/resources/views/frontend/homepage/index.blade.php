@extends('frontend.layouts.MainLayout')
@section('title')
    Trang chủ
@endsection
@section('content')
    <div class="row shipping-service" style="margin-left: 0px;margin-top: 2%">
        <div class="row" style="margin-top: 50px;margin-bottom: 50px">
            <h3 style="text-align: center; color:#6a6a6a;font-weight: bold"> DỊCH VỤ VẬN CHUYỂN CHÍNH</h3>
        </div>
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10">
                <div class="col-sm-3" style="background-color: white; ">
                    <div class="row col1_4_content" style="width: 90%;margin: 10px ;box-shadow: 5px 5px #c6c5c5;border-radius: 5px;border: 1px solid #dedada">
                        <div class="row" style="margin-left: 5%;margin-right: 5%">
                            <img src="{{asset('images/front/service/vcnhanh_icon.png')}}"  style="width: 90%">
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%">
                            <h4 style="color: #f5c000;text-align: center">Vận chuyển nhanh</h4>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%; width: 90%">
                            <p style="color:#6a6a6a;text-align: center">Gửi hàng đi Hà Nội chỉ mất 48h, Đà Nẵng chỉ mất 24h
                                mà giá cước gần như không đổi so với cước thường.</p>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%;display: flex;align-items: center;justify-content: center;">
                            <img src="{{asset('images/front/service/bt1.png')}}" height="30px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" style="background-color: white;">
                    <div class="row col1_4_content" style="width: 90%;margin: 10px ;box-shadow: 5px 5px #c6c5c5;border-radius: 5px;border: 1px solid #dedada">
                        <div class="row" style="margin-left: 5%;margin-right: 5%">
                            <img src="{{asset('images/front/service/vc_tietkiem_icon.png')}}"  style="width: 90%">
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%">
                            <h4 style="color: #f5c000;text-align: center">Vận chuyển tiết kiệm</h4>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%; width: 90%">
                            <p style="color:#6a6a6a;text-align: center">Dịch vụ giao hàng tiêu chuẩn với giá cước cực rẻ nhằm tiết kiệm tối đa chi phí cho doanh nghiệp của bạn.</p>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%;display: flex;align-items: center;justify-content: center;">
                            <img src="{{asset('images/front/service/bt2.png')}}" height="30px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" style="background-color: white;">
                    <div class="row col1_4_content" style="width: 90%;margin: 10px ;box-shadow: 5px 5px #c6c5c5;border-radius: 5px;border: 1px solid #dedada">
                        <div class="row" style="margin-left: 5%;margin-right: 5%">
                            <img src="{{asset('images/front/service/vc_xemay_icon.png')}}"  style="width: 90%">
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%">
                            <h4 style="color: #f5c000;text-align: center">Vận chuyển xe máy</h4>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%; width: 90%">
                            <p style="color:#6a6a6a;text-align: center">BacNamtrans là đơn vị đầu tiên chuẩn hóa chuyên nghiệp dịch vụ vận chuyển xe máy trên toàn quốc.</p>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%;display: flex;align-items: center;justify-content: center;">
                            <img src="{{asset('images/front/service/bt3.png')}}" height="30px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" style="background-color: white;">
                    <div class="row col1_4_content" style="width: 90%;margin: 10px ;box-shadow: 5px 5px #c6c5c5;border-radius: 5px;border: 1px solid #dedada">
                        <div class="row" style="margin-left: 5%;margin-right: 5%">
                            <img src="{{asset('images/front/service/vc_logitis_icon.png')}}"  style="width: 90%">
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%">
                            <h4 style="color: #f5c000;text-align: center">Vận chuyển Logistics</h4>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%; width: 90%">
                            <p style="color:#6a6a6a;text-align: center">Kết hợp và tối ưu vận chuyển đa phương thức nhằm cung ứng tối đa dịch vụ Logistics cho doanh nghiệp cảu bạn.</p>
                        </div>
                        <div class="row" style="margin-left: 5%;margin-right: 5%;width: 90%;display: flex;align-items: center;justify-content: center;">
                            <img src="{{asset('images/front/service/bt4.png')}}" height="30px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
    </div>
    <div class="row intro" style="margin-left: 0px">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="row" STYLE="margin-top: 20px">
                <div class="col-sm-6">
                    <h3 STYLE="color: #6a6a6a;font-weight: bold;text-align: center"> CHÚNG TÔI LÀ AI ?</h3>
                </div>
                <div class="col-sm-6">
                    <h3 STYLE="color: #6a6a6a;font-weight: bold;text-align: center"> SỐ LIỆU THỐNG KÊ</h3>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-6" >
                    <div class="row" style="width: 90%;margin-left: 5%">
                        <p style="color: #3A3A3A;font-size: 16px">BacNamtrans là đội ngũ trẻ xuất thân từ các doanh nghiệp logistics
                            lớn nhưng còn nặng về quy trình vận hành. Nhằm mang tới dịch vụ
                            tốt nhất cho khách hàng, chúng tôi áp dụng công nghệ nhằm tăng trải
                            nghiệm, vận hành đơn hàng, quản lý dễ dàng nhằm giảm cước vận
                            chuyển hiện đang quá cao so với các nước trong khu vực.</p>
                    </div>
                    <div class="row" style="width: 90%;margin-left: 5%;margin-top: 15px">
                        <div style="background: dimgray; height: 300px;width:500px " ></div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <p style="text-align: center;font-size: 15px">Video giới thiệu BacNamtrans</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row" style="">
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/car.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold" id ="intro-xtvc">89</h3>
                                    <p style="color: #636b6f">Xe tải vận chuyển</p>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            let num1 = 89;
                            let num1_1=0;
                            function setUpNumber(id)
                            {
                                num1_1++;
                                if(num1_1==num1)
                                {
                                    clearInterval(autoLoad);
                                }
                                document.getElementById(id).innerText = num1_1;
                            }
                            let autoLoad= setInterval(function(){
                                setUpNumber("intro-xtvc");
                            },300)
                        </script>
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/custom.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 id="intro-khachhang" style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">209</h3>
                                    <p style="color: #636b6f">Khách hàng tin dùng</p>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            let num2 = 209;
                            let num2_1=0;
                            function setUpNumber2(id)
                            {
                                num2_1++;
                                if(num2_1===num2)
                                {
                                    clearInterval(autoLoad1);
                                }
                                document.getElementById(id).innerText = num2_1;
                            }
                            let autoLoad1= setInterval(function(){
                                setUpNumber2("intro-khachhang");
                            },150)
                        </script>
                    </div>
                    <div class="row" style="">
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/acount.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 id="intro-nvtq" style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">27</h3>
                                    <p style="color: #636b6f">Nhân viên toàn quốc</p>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            let num3 = 27;
                            let num3_1=0;
                            function setUpNumber3(id)
                            {
                                num3_1++;
                                if(num3_1===num3)
                                {
                                    clearInterval(autoLoad3);
                                }
                                document.getElementById(id).innerText = num3_1;
                            }
                            let autoLoad3= setInterval(function(){
                                setUpNumber3("intro-nvtq");
                            },400)
                        </script>
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/box.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 id="intro-dhvc" style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">12.970</h3>
                                    <p style="color: #636b6f">Đơn hàng đang vận chuyển</p>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            let num4 = 12970;
                            let num4_1=0;
                            function setUpNumber4(id)
                            {
                                num4_1++;
                                if(num4_1===num4)
                                {
                                    clearInterval(autoLoad4);
                                }
                                document.getElementById(id).innerText = num4_1;
                            }
                            let autoLoad4= setInterval(function(){
                                setUpNumber4("intro-dhvc");
                            },1)
                        </script>
                    </div>
                    <div class="row" style="">
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/home.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 id="intro-dgh" style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">1.928</h3>
                                    <p style="color: #636b6f; ">Điểm gửi hàng toàn quốc</p>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            let num5 = 1928;
                            let num5_1=0;
                            function setUpNumber5(id)
                            {
                                num5_1++;
                                if(num5_1===num5)
                                {
                                    clearInterval(autoLoad5);
                                }
                                document.getElementById(id).innerText = num5_1;
                            }
                            let autoLoad5= setInterval(function(){
                                setUpNumber5("intro-dgh");
                            },50)
                        </script>
                        <div class="col-sm-6">
                            <div class="row" style="margin-top: 10px">
                                <div class="col-sm-4">
                                    <img src="{{asset('images/front/icon/traidat.png')}}" style="width:80%">
                                </div>
                                <div class="col-sm-8">
                                    <h3 id="intro-tinhthanh" style="color: #feaa02;margin-top: 1px;margin-left: 30%;font-weight: bold">63</h3>
                                    <p style="color: #636b6f">Tỉnh thành phủ sóng</p>
                                </div>
                            </div>
                            <script type="text/javascript">
                                let num6 = 63;
                                let num6_1=0;
                                function setUpNumber6(id)
                                {
                                    num6_1++;
                                    if(num6_1===num6)
                                    {
                                        clearInterval(autoLoad6);
                                    }
                                    document.getElementById(id).innerText = num6_1;
                                }
                                let autoLoad6= setInterval(function(){
                                    setUpNumber6("intro-tinhthanh");
                                },300)
                            </script>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 50px">
                        <img src="{{asset('images/front/icon/img.png')}}" style="width: 100%;height: 240px">
                    </div>
                </div>

            </div>

        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row trans" style="z-index: 4;margin: 0;padding: 0">
        <div class="row" style="margin-top: 40px">
            <h3 style="text-align: center;color: white">TRA CỨU CƯỚC VẬN CHUYỂN TẠI ĐÂY</h3>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-7">
            </div>
            <div class="col-sm-5">
                <div class="row">
                    <ul>
                        <li id="11" style="background: white;padding: 10px 15px 10px 15px;">
                            <a onclick="openK(1)" style="color:dimgray;">Hàng hóa</a>
                        </li>
                        <li id="12" style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                            <a onclick="openK(2)" style="color:dimgray;">Xe máy</a>
                        </li>
                        <li id="13" style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                            <a onclick="openK(3)" style="color:dimgray;">Thú cưng</a>
                        </li>
                        <li id="14" style="background: #9e9d9d;padding: 10px 15px 10px 15px;">
                            <a onclick="openK(4)" style="color:dimgray;">Chuyển nhà</a>
                        </li>
                    </ul>
                </div>
                <div class="row" style="background-color: white;border-radius: 5px;box-shadow: 5px 5px grey">
                    <form action="{{url('/tra-cuu/hang-hoa')}}" method="post" id="1" style="display: block">
                        @csrf
                        <div class="row" style="margin-left: 10px">
                            <div class="col-sm-7" >
                                <h5 style="color: black">Gửi từ</h5>
                                <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                    <select name="tinh_gui" onchange="resetHuyen(this)" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                        <option value="0">{{'  Chọn Tỉnh/TP'}}</option>
                                        @foreach($diemguihangs as $diemguihang)
                                            <option value="{{$diemguihang->id_tinh}}">{{$diemguihang->diemguihang}}</option>
                                        @endforeach
                                    </select>
                                    <i class="fa fa-tasks" aria-hidden="true" ></i>
                                </div>
                                <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                    <select id="tmp" name="kk" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                        <option >{{'    Chọn Quận/Huyện'}}</option>
                                    </select>
                                    @foreach($tinhs as $tinh)
                                        <select name="huyen_gui[{{$tinh->id}}]" id="{{$tinh->id+400}}" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px;display: none" >
                                            <?php
                                            $huyens = json_decode($tinh->huyen);
                                            ?>
                                            @for($i=1;$i<=$tinh->n_huyen;$i++)
                                                <option value="{{$i}}" >{{$huyens[$i]}}</option>
                                            @endfor
                                        </select>
                                    @endforeach
                                    <i class="fa fa-tasks" aria-hidden="true" ></i>
                                </div>
                                <script type="text/javascript">
                                    function resetHuyen(obj)
                                    {
                                        let options = obj.value;
                                        console.log(options);
                                        for(let i=1;i<=63;i++)
                                        {
                                            document.getElementById(400+i).style="display:none";

                                        }
                                        document.getElementById('tmp').style="display:none";
                                        document.getElementById('tmp1').style="display:none";
                                        document.getElementById(parseInt(obj.value)+400).style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px;display:inline";
                                        document.getElementById(500+58).style="display:none";
                                        document.getElementById(parseInt(obj.value)+500).style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px;display:inline";
                                    }
                                </script>
                            </div>
                            <div class="col-sm-5">
                                <h5 style="color: black">Hình thức vận chuyển</h5>
                                <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                    <select name="hinhthucvc" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                        <option value="Vp-Vp">Vp-Vp</option>
                                        <option value="door to door">Door to door</option>
                                    </select>
                                    <i class="fa fa-tasks" aria-hidden="true" ></i>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 10px;margin-top: 10px">
                            <div class="col-sm-7" >
                                <h5 style="color: black">Gửi đến</h5>
                                <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                    <select id="tmp1" name="cc" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                        <option >{{'    Chọn Tỉnh/TP'}}</option>
                                    </select>
                                    @foreach($diemguihangs as $diemguihang)
                                        <select name="tinh_nhan[]" onchange="resetHuyen1(this)" id="{{$diemguihang->id_tinh+500}}" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px;display: none" >
                                            <?php
                                            $tinh1s = json_decode($diemguihang->tinhs);
                                            ?>
                                            @foreach($tinh1s as $tinh)
                                                <option value="{{$tinh->{'id_tinh'} }}">{{$tinh->{'tinh'} }}</option>
                                            @endforeach
                                        </select>
                                    @endforeach
                                    <i class="fa fa-tasks" aria-hidden="true" ></i>
                                </div>

                                <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%; margin-top: 10px">
                                    <select id="tmp2" name="kk" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                        <option >{{'    Chọn Quận/Huyện'}}</option>
                                    </select>
                                    @foreach($tinhs as $tinh)
                                        <select name="huyen_nhan[]" id="{{$tinh->id+600}}" style="border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px;display: none" >
                                            <?php
                                            $huyens = json_decode($tinh->huyen);
                                            ?>
                                            @for($i=1;$i<=$tinh->n_huyen;$i++)
                                                <option value="{{$i}}" >{{$huyens[$i]}}</option>
                                            @endfor
                                        </select>
                                    @endforeach
                                    <i class="fa fa-tasks" aria-hidden="true" ></i>
                                </div>
                                <script type="text/javascript">
                                    function resetHuyen1(obj)
                                    {
                                        let options = obj.value;
                                        console.log(parseInt(options) +600);
                                        for(let i=1;i<=63;i++)
                                        {
                                            document.getElementById(600+i).style="display:none";

                                        }
                                        document.getElementById('tmp2').style="display:none";
                                        document.getElementById(600+parseInt(obj.value)).style="display:inline;border: none;width:80%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px;";
                                    }
                                </script>
                            </div>
                            <div class="col-sm-5">
                                <h5 style="color: black">Loại dịch vụ</h5>
                                <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                    <select name="loaidichvu" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                        <option value  ="VCN">VCN - vận chuyển nhanh</option>
                                        <option value="CPN">CPN - Chuyển phát nhanh</option>
                                        <option value="VTK">VTK - Vận chuyển tiết kiệm</option>
                                    </select>
                                    <i class="fa fa-tasks" aria-hidden="true" ></i>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 10px;margin-top: 10px">
                            <div class="col-sm-7" >
                                <div class="row" >
                                    <div class="col-sm-6">
                                        <h5 style="color: black">Cân nặng</h5>
                                        <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 80%">
                                            <input type="text" name="kg" placeholder="100" style="width: 80%;border: none; margin-left: 10px;height: 100%">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 style="color: black">Đơn vị</h5>
                                        <div class="row" style="border-radius: 5px;border: 1px solid grey;height: 30px;width: 100%">
                                            <select name="donvi" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 5px" >
                                                <option >Kg</option>
                                                <option>Túi</option>
                                                <option>Xe</option>
                                                <option>Bọc</option>
                                            </select>
                                            <i class="fa fa-tasks" aria-hidden="true" ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <h5 style="color: black">Thu hồi biên bản</h5>
                                <div class="row"  style="border-radius: 5px;border: 1px solid grey;height: 30px;margin-left: 10px;width: 90%">
                                    <select name="bienban" style="border: none;width:70%;height: 100%;-moz-appearance: none;-webkit-appearance:none;appearance: none;margin-left: 15px" >
                                        <option value="1">có</option>
                                        <option value="0"> Không</option>
                                    </select>
                                    <i class="fa fa-tasks" aria-hidden="true" ></i>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;margin-top: 20px;margin-bottom: 20px">
                            <button class="btn" style="background-color: #efaf3d; color: white;font-weight: bold;font-size:18px;text-align: center;width: 60%">Tra cứu ngay</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <div class="row reason" style="margin-left: 0px">
        <div class="row" style="text-align: center;margin-top: 40px">
            <h3 style="color: white;"><span style="color:#FFAA00;">1001+</span> LÝ DO NÊN CHỌN QUY LONG LOGISTICS</h3>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="row" style="margin-top: 30px">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/cup.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#FBB648;margin-left: 5px">Giao hàng nhanh nhất</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #AAB3B6;font-size: 17px">
                                    Thời gian giao nhanh hơn đơn vị khác<br>
                                    <span style="font-weight: bold">Nha Trang</span> - giao nhanh hơn 6 giờ<br>
                                    <span style="font-weight: bold">Đà Nẵng</span> - giao nhanh hơn 12 giờ<br>
                                    <span style="font-weight: bold">Hà Nội</span> - giao nhanh hơn 24 giờ.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/box_1.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#FBB648;margin-left: 5px">Đa dạng gói dịch vụ</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #AAB3B6;font-size: 17px">
                                    Đơn vị đầu tiên có các gói vận chuyển
                                    <span style="font-weight: bold">Vận chuyển tốc độ</span> - giao siêu nhanh
                                    <span style="font-weight: bold">Vận chuyển tiết kiệm</span> - an toàn, tiết kiệm
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/traidat.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#FBB648;margin-left: 5px">Phủ sóng toàn quốc</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #AAB3B6;font-size: 17px">
                                    Năng lực vận chuyển giao hàng<br>
                                    đi khắp 63 tỉnh thành.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/lich.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#FBB648;margin-left: 5px">Tra cứu,quản lý dễ dàng</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color:#AAB3B6;font-size: 17px">
                                    Tra cứu giá cước tự động, minh bạch<br>
                                    Quản lý, theo dõi đơn hàng theo thời<br>
                                    gian thực<br>
                                    Xua tan nỗi lo không biết đơn hàng<br>
                                    của mình đang ở đâu<br>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/tien.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#FBB648;margin-left: 5px">Tiết kiệm chi phí</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #AAB3B6;font-size: 17px">
                                    Công đoạn hỏi giá, tình trạng đơn hàng,<br>
                                    hàng giao trễ đang làm mất quá nhiều<br>
                                    thời gian và chi phí cho doanh nghiệp.<br>
                                    Hãy yên tâm vì tất cả được kiểm soát qua<br>
                                    hệ thống của Quy Long Logistics
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="{{asset('images/front/icon/dongho.png')}}" style="width:30px">
                            </div>
                            <div class="col-md-11">
                                <h4 style="color:#FBB648;margin-left: 5px">Dịch vụ ổn định nhất</h4>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-11">
                                <h5 style="color: #AAB3B6;font-size: 17px">
                                    Tỷ lệ giao hàng đúng hẹn 96,72%<br>
                                    Tỷ lệ đền bù, hoàn trả chỉ 0,86%<br>
                                    Tỷ lệ khách hàng hài lòng tới 92,52%<br>

                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 100px"></div>
    </div>
    <div class="row newreason" style="margin-left: 0px">
        <div class="row" style="text-align: center">
            <h3 style="color:#606060; text-align: center">THÊM <span style="color: #FFA200;font-weight: bold;font-size: 40px">1</span> LÝ DO KHÁCH HÀNG LUÔN HÀI LÒNG</h3>
        </div>
        <div class="row" style="text-align: center;margin-top: 10px">
            <h4 style="color: #7E7E7E; text-align: center;font-size: 18px;font-family: 'Segoe UI'">Chúng tôi là đơn vị vận chuyển duy nhất có hệ thống theo dõi quản lý đơn hàng theo thời gian thực</h4>
        </div>
        <div class="row" style="margin-top: 15px">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <div class="row">
                    <h4 style="color: #646464;font-family: 'Segoe UI';font-weight: bold">HỆ THỐNG QUẢN LÝ CHUYÊN NGHIỆP</h4>
                </div>
                <div class="row">
                    <ul>
                        <button id="9110" onclick="openk(9110)" style="display: none;background: none;border: none; outline:none;">
                            <li style="list-style: none"><h5 style="color:  #b8b4b4;font-family: 'Segoe UI';font-size: 20px">
                                    <i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>
                                    Giao diện trực quan dễ sử dụng</h5>
                            </li>
                        </button>
                        <li id="9111" style="list-style: none;">
                            <h4 style="color: #636363;font-family: 'Segoe UI';">
                                <i class="fa fa-check-circle" aria-hidden="true" style="color: #efaf3d;margin-right: 5px;font-size: 30px"></i>
                                Giao diện trực quan dễ sử dụng
                            </h4>
                        </li>
                        <button id="9210" onclick="openk(9210)" style="background: none;border: none; outline:none;" ><li style="list-style: none"><h5 style="color:  #b8b4b4;font-family: 'Segoe UI';font-size: 20px"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Tạo đơn hàng cực đơn giản</h5></li></button>
                        <li id="9211" style="list-style: none;display: none"><h4 style="color: #636363;font-family: 'Segoe UI';"><i class="fa fa-check-circle" aria-hidden="true" style="color: #efaf3d;margin-right: 5px;font-size: 30px"></i> Tạo đơn hàng cực đơn giản</h4></li>

                        <button id="9310" onclick="openk(9310)"style="background: none;border: none; outline:none;" ><li style="list-style: none"><h5 style="color:  #b8b4b4;font-family: 'Segoe UI';font-size: 20px"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Theo dõi đơn hàng theo thời gian thực</h5></li></button>
                        <li id="9311" style="list-style: none;display: none"><h4 style="color: #636363;font-family: 'Segoe UI';"><i class="fa fa-check-circle" aria-hidden="true" style="color: #efaf3d;margin-right: 5px;font-size: 30px"></i> Theo dõi đơn hàng theo thời gian thực</h4></li>

                        <button id="9410" onclick="openk(9410)"style="background: none;border: none; outline:none;"><li style="list-style: none"><h5 style="color:  #b8b4b4;font-family: 'Segoe UI';font-size: 20px"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Tra cứu giá cước nhanh chóng</h5></li></button>
                        <li id="9411" style="list-style: none;display: none"><h4 style="color: #636363;font-family: 'Segoe UI';"><i class="fa fa-check-circle" aria-hidden="true" style="color: #efaf3d;margin-right: 5px;font-size: 30px"></i> Tra cứu giá cước nhanh chóng</h4></li>

                        <button id="9510" onclick="openk(9510)" style="background: none;border: none; outline:none;"><li style="list-style: none"><h5 style="color:  #b8b4b4;font-family: 'Segoe UI';font-size: 20px"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Quản lý danh sách đơn hàng dễ dàng</h5></li></button>
                        <li id="9511" style="list-style: none;display: none"><h4 style="color: #636363;font-family: 'Segoe UI';"><i class="fa fa-check-circle" aria-hidden="true" style="color: #efaf3d;margin-right: 5px;font-size: 30px"></i>Quản lý danh sách đơn hàng dễ dàng</h4></li>

                        <button id="9610" onclick="openk(9610)" style="background: none;border: none; outline:none;"><li style="list-style: none"><h5 style="color:  #b8b4b4;font-family: 'Segoe UI';font-size: 20px"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Thống kê, quản lý cước vận chuyển</h5></li></button>
                        <li id="9611" style="list-style: none;display: none"><h4 style="color: #636363;font-family: 'Segoe UI';"><i class="fa fa-check-circle" aria-hidden="true" style="color: #efaf3d;margin-right: 5px;font-size: 30px"></i>Thống kê, quản lý cước vận chuyển</h4></li>

                        <button id="9710" onclick="openk(9710)" style="background: none;border: none; outline:none;"><li style="list-style: none"><h5 style="color:  #b8b4b4;font-family: 'Segoe UI';font-size: 20px"><i class="fa fa-check" aria-hidden="true" style="color: #999898;margin-right: 15px;font-size: 20px" ></i>Sử dụng trên đa thiết bị</h5></li></button>
                        <li id="9711" style="list-style: none;display: none"><h4 style="color: #636363;font-family: 'Segoe UI';"><i class="fa fa-check-circle" aria-hidden="true" style="color: #efaf3d;margin-right: 5px;font-size: 30px"></i> Sử dụng trên đa thiết bị</h4></li>

                    </ul>
                    <script type="text/javascript">
                        function openk(id)
                        {
                            document.getElementById(9110).style="display:block;background: none;border: none;outline:none;";
                            document.getElementById(9210).style="display:block;background: none;border: none; outline:none;";
                            document.getElementById(9310).style="display:block;background: none;border: none; outline:none;";
                            document.getElementById(9410).style="display:block;background: none;border: none; outline:none;";
                            document.getElementById(9510).style="display:block;background: none;border: none; outline:none;";
                            document.getElementById(9610).style="display:block;background: none;border: none; outline:none;";
                            document.getElementById(9710).style="display:block;background: none;border: none; outline:none;";

                            document.getElementById(9111).style="display:none";
                            document.getElementById(9211).style="display:none";
                            document.getElementById(9311).style="display:none";
                            document.getElementById(9411).style="display:none";
                            document.getElementById(9511).style="display:none";
                            document.getElementById(9611).style="display:none";
                            document.getElementById(9711).style="display:none";

                            document.getElementById(9112).style="display:none";
                            document.getElementById(9212).style="display:none";
                            document.getElementById(9312).style="display:none";
                            document.getElementById(9412).style="display:none";
                            document.getElementById(9512).style="display:none";
                            document.getElementById(9612).style="display:none";
                            document.getElementById(9712).style="display:none";

                            document.getElementById(id+1).style="display:block";
                            document.getElementById(id+2).style="display:block;width: 100%;";
                            document.getElementById(id).style="display:none";
                        }
                    </script>
                </div>
                <div class="row" style="margin-top: 20px;text-align: center">
                    <button class="btn btn1" STYLE="background:#FFAA00;text-align: center;color: white;border-radius: 10px;width: 40%;border: none; outline:none;"><h4 style="font-weight: bold">XEM HƯỚNG DẪN</h4></button>
                </div>
            </div>
            <div class="col-sm-5">
                <img id="9112" src="{{asset('images/front/banner/lydokhachhailong/giaodien.png')}}" style="width: 100%;">
                <img id="9212" src="{{asset('images/front/banner/lydokhachhailong/tao-don-hang.png')}}" style="width: 100%;display: none">
                <img id="9312" src="{{asset('images/front/banner/lydokhachhailong/theo-doi-don-hang.png')}}" style="width: 100%;display: none">
                <img id="9412" src="{{asset('images/front/banner/lydokhachhailong/tra-cuu-cuoc.png')}}" style="width: 100%;display: none">
                <img id="9512" src="{{asset('images/front/banner/lydokhachhailong/tra-cuu-don-hang.png')}}" style="width: 100%;display: none">
                <img id="9612" src="{{asset('images/front/banner/lydokhachhailong/giaodien.png')}}" style="width: 100%;display: none">
                <img id="9712" src="{{asset('images/front/banner/lydokhachhailong/giaodien.png')}}" style="width: 100%;display: none">
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <div class="row lienhe" id="tuvanngay" style="margin-left: 0px">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row" style="text-align: center;margin-top: 30px">
                        <h3 style="color: #707070;font-weight: bold;text-align: center;font-family: 'Segoe UI'">LIÊN HỆ ĐỂ ĐƯỢC PHỤC VỤ TỐT HƠN</h3>
                    </div>
                    <div class="row" style="margin-top:40px">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('images/front/icon/phone_1.png')}}" style="width: 40px">
                                </div>
                                <div class="col-sm-10">
                                    <p style="font-weight: bold;font-size: 30px;color:#5a5a5a;font-family: 'Segoe UI'">190018210</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('images/front/icon/dongho_1.png')}}" style="width: 40px">
                                </div>
                                <div class="col-sm-10">
                                    <p style="font-size: 16px;color: #aca9a9;font-family: 'Segoe UI'" >Thời gian làm việc:<br>
                                        07:00 - 21:00 (Thứ hai - Chủ nhật)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('images/front/icon/acount_1.png')}}" style="width: 40px">
                                </div>
                                <div class="col-sm-10">
                                    <p style="font-weight: bold;font-size: 16px;color:#5a5a5a;font-family: 'Segoe UI' ">
                                        <span style="font-weight: bold;font-size: 20px;">190018210</span><br>
                                        (call 24/7)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{asset('images/front/icon/mail.png')}}" style="width: 40px">
                                </div>
                                <div class="col-sm-10">
                                    <p style="font-size: 16px;color: #aca9a9;font-family: 'Segoe UI'" >cskh@vantaibacnam.vn
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <p style="text-align: center;font-size: 16px;color: #aca9a9;font-family: 'Segoe UI'">Dành cho khách hàng muốn nhận thông tin và cập nhật bảng giá tốt nhất</p>
                    </div>
                    <div class="row" style="width: 80%;background-color:#454343;border-radius: 5px;margin-left: 40px">
                        <form method="post" action="{{url('/newsletter/add')}}">
                            @csrf
                            <div class="col-sm-8">
                                <input type="text" name="email" placeholder=" Nhập email" style="width: 100%;background-color: white;border: 1px solid;border-radius: 10px;height: 30px;margin: 10px 10px 10px 20px;">
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn1" style="margin-top: 8px;color:white;font-family: 'Segoe UI';font-size: 18px;border:none">Đăng ký ngay</button>
                            </div>
                            <div class="col-sm-2"></div>
                        </form>
                    </div>
                    <div class="row" style="margin-top: 10px;width:95%">
                        <img src="{{asset('images/front/banner/banner_2.png')}}" style="width: 100%">
                    </div>
                </div>
                <div class="col-sm-4">
                    <form method="post" action="{{url('transport/support')}}" style="width: 100%;margin-top: 10px">
                        @csrf
                        <div class="row form-tv" style="padding-bottom: 20px">
                            <div class="row" style="text-align: center">
                                <h3 style="color:white;text-align: center;margin-left: 10px">NHẬN TƯ VẤN VẬN CHUYỂN</h3>
                            </div>
                            <div class="row" style="margin-top: 20px">
                                <ul>
                                    <li style="background-color: #1d1d1d;text-align: center;height: 70px;width: 70px">
                                        <p style="font-size: 16px; color: white"><span style="font-size: 30px">00</span>
                                            <br>Ngày</p>
                                    </li>
                                    <li style="background-color: #1d1d1d;text-align: center;height: 70px;width: 70px">
                                        <p style="font-size: 16px; color: white"><span style="font-size: 30px" id="gio" >12</span>
                                            <br>Giờ</p>
                                    </li>
                                    <li style="background-color: #1d1d1d;text-align: center;height: 70px;width: 70px">
                                        <p style="font-size: 16px; color: white"><span style="font-size: 30px" id="phut">00</span>
                                            <br>Phút</p>
                                    </li>
                                    <li style="background-color: #1d1d1d;text-align: center;height: 70px;width: 70px">
                                        <p style="font-size: 16px; color: white"><span style="font-size: 30px" id="giay">00</span>
                                            <br>Giây</p>
                                    </li>
                                </ul>
                            </div>
                            <script type="text/javascript">
                                let time= 43200;
                                let countDown = setInterval(run,1000);
                                function run(){

                                    time= time-1;
                                    let gio = Math.floor(time/(60*60));
                                    let phut = Math.floor((time%(60*60)/60));
                                    let giay = Math.floor(time%60);
                                    document.getElementById('gio').innerText= gio;
                                    document.getElementById('phut').innerText= phut;
                                    document.getElementById('giay').innerText= giay;
                                }
                            </script>
                            <div class="row" style="margin-top: 15px;text-align: center">
                                <p style="color:darkgrey;font-size: 16px;width: 90%;margin: 0px auto">
                                    Quý khách để lại thông tin hàng hóa cần vận
                                    chuyển sẽ nhận ngay ưu đãi lên tới 20% cước và
                                    chúng tôi sẽ gọi tư vấn ngay trong vòng 02 phút
                                </p>
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="name" placeholder="Tên đơn vị" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="phone" placeholder="Số điện thoại" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="email" placeholder="Nhập email" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="name_product" placeholder="Tên mặt hàng" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="weight" placeholder="Trọng lượng/Cân nặng" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px">
                                <input type="text" name="address_s" placeholder="Địa chỉ gửi hàng" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin-top: 10px;margin-bottom: 20px">
                                <input type="text" name="address_r" placeholder="Địa chỉ nhận hàng" style="width: 80%;margin-left: 50px; height:30px;border-radius: 5px;border: 1px solid grey">
                            </div>
                            <div class="row" style="margin:0px auto;text-align: center">
                                <button type="submit" class="btn btn1" style="margin-top: 8px;color: white;font-weight: bold;font-size: 18px;width: 70%;text-align: center;border: none">Nhận tư vấn ngay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row tuyenduong" style="margin-left: 0px">
        <img src="{{asset('images/front/banner/banner_3.png')}}" width="100%">
    </div>
    <div class="row HD_send" style="margin-left: 0px">
        <div class="row" style="margin-left: 46%;margin-top: 10px" >
            <div class="row" style="width: 250px;background-color: white;box-shadow: 5px 5px #d5d2d2">
                <div class="row" style="width: 80%;height: 100px;background-color: #5a5a5a;margin: 0px auto;margin-top: 5px">

                </div>
                <div class="row" style="margin-top: 5px;text-align: center;width: 90%;margin-left: 10px">
                    <a href="#" style="text-align: center;"><p style="color: #707070;font-family: 'Segoe UI'"><span style="color: #efaf3d">[VIDEO]</span> Hướng dẫn gửi hàng dành
                            cho đối tác lần đầu sử dụng...</p></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 54%;margin-top: 10px">
            <div class="row" style="width: 250px;background-color: white;box-shadow: 5px 5px #d5d2d2">
                <div class="row" style="width: 80%;height: 100px;background-color: #5a5a5a;margin: 0px auto;margin-top: 5px">

                </div>
                <div class="row" style="margin-top: 5px;text-align: center;width: 90%;margin-left: 10px">
                    <a href="#" style="text-align: center;"><p style="color: #707070;font-family: 'Segoe UI'"><span style="color: #efaf3d">[VIDEO]</span> Hướng dẫn gửi hàng dành
                            cho đối tác lần đầu sử dụng...</p></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 60%;margin-top: 10px">
            <div class="row" style="width: 250px;background-color: white;box-shadow: 5px 5px #d5d2d2">
                <div class="row" style="width: 80%;height: 100px;background-color: #5a5a5a;margin: 0px auto;margin-top: 5px">

                </div>
                <div class="row" style="margin-top: 5px;text-align: center;width: 90%;margin-left: 10px">
                    <a href="#" style="text-align: center;"><p style="color: #707070;font-family: 'Segoe UI'"><span style="color: #efaf3d">[VIDEO]</span> Hướng dẫn gửi hàng dành
                            cho đối tác lần đầu sử dụng...</p></a>
                </div>
            </div>

        </div>
        <div class="row" style="margin-left: 54%;margin-top: 10px">
            <div class="row" style="width: 250px;background-color: white;box-shadow: 5px 5px #d5d2d2">
                <div class="row" style="width: 80%;height: 100px;background-color: #5a5a5a;margin: 0px auto;margin-top: 5px">

                </div>
                <div class="row" style="margin-top: 5px;text-align: center;width: 90%;margin-left: 10px">
                    <a href="#" style="text-align: center;"><p style="color: #707070;font-family: 'Segoe UI'"><span style="color: #efaf3d">[VIDEO]</span> Hướng dẫn gửi hàng dành
                            cho đối tác lần đầu sử dụng...</p></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row cate_product" style="margin-left: 0px">
        <div class="row" style="margin-top: 5%;text-align: center">
            <h3 style="text-align: center;color: #707070;font-family: 'Segoe UI'">DANH MỤC HÀNG HÓA VẬN CHUYỂN</h3>
        </div>
        <div class="row" style="width: 95%;margin-right: 2%">
                <?php $n_dmvc = count($danhmucvcs);?>
            @for($i= 0; $i<floor($n_dmvc/8);$i++)
                @if($i%2==0)
                    <marquee  behavior="alternate"  Scrollamount="8">
                @else
                    <marquee  behavior="alternate"  Scrollamount="5">
                @endif
                    @for($j=0;$j<8;$j++)
                        <div style="float:left;">
                            <div id="hexagon{{$i*8+$j}}" style=" margin-left:80px;text-align: center;margin-top: 10px;margin-bottom: 10px;"></div>
                            <style contenteditable>
                                #hexagon{{$i*8+$j}} {
                                    width: 70px;
                                    height: 100px;
                                    background-color: #dbd8d8;
                                    background-image: url({{$danhmucvcs[$i*8+$j]->image}});
                                    background-repeat: no-repeat;
                                    background-position: center center;
                                    position: relative;
                                }
                                #hexagon{{$i*8+$j}}:before {
                                    content: "";
                                    position: absolute;
                                    left: -25px;

                                    width: 0;
                                    height: 0;
                                    border-top: 50px solid transparent;
                                    border-bottom: 50px solid transparent;
                                    border-right: 25px solid #dbd8d8;
                                }
                                #hexagon{{$i*8+$j}}:after {
                                    content: "";
                                    position: absolute;
                                    right: -25px;
                                    width: 0;
                                    height: 0;
                                    border-top: 50px solid transparent;
                                    border-bottom: 50px solid transparent;
                                    border-left: 25px solid #dbd8d8;
                                }
                            </style>
                            <p style=" margin-left:80px;color: #707070">{{$danhmucvcs[$i*8+$j]->name}}</p>
                        </div>

                        @endfor
                </marquee>
            @endfor
                    <marquee  behavior="alternate">

                        @for($j=0;$j<$n_dmvc%8;$j++)
                            <div style="float:left;">
                                <div id="hexagon{{floor($n_dmvc/8)*8+$j}}" style=" margin-left:80px;text-align: center;margin-top: 10px;margin-bottom: 10px;"></div>
                                <style contenteditable>
                                    #hexagon{{floor($n_dmvc/8)*8+$j}} {
                                        width: 70px;
                                        height: 100px;
                                        background-color: #dbd8d8;
                                        background-image: url({{$danhmucvcs[$i*8+$j]->image}});
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        position: relative;
                                    }
                                    #hexagon{{floor($n_dmvc/8)*8+$j}}:before {
                                        content: "";
                                        position: absolute;
                                        left: -25px;

                                        width: 0;
                                        height: 0;
                                        border-top: 50px solid transparent;
                                        border-bottom: 50px solid transparent;
                                        border-right: 25px solid #dbd8d8;
                                    }
                                    #hexagon{{$i*8+$j}}:after {
                                        content: "";
                                        position: absolute;
                                        right: -25px;
                                        width: 0;
                                        height: 0;
                                        border-top: 50px solid transparent;
                                        border-bottom: 50px solid transparent;
                                        border-left: 25px solid #dbd8d8;
                                    }
                                </style>
                                <p style=" margin-left:80px;color: #707070">{{$danhmucvcs[$i*8+$j]->name}}</p>
                            </div>

                        @endfor
                    </marquee>
            {{--<marquee direction="right" behavior=”alternate”  >
                <img src="{{asset('images/front/banner/banner_7.png')}}" width="100%">
            </marquee>--}}
        </div>
    </div>

    <div class="row doitac" style="margin-left: 0px">
        <div class="row" style="margin-top: 5%;text-align: center">
            <h3 style="text-align: center;color: #707070;font-family: 'Segoe UI'">NHỮNG ĐỐI TÁC LUÔN TIN DÙNG</h3>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                @for($i=1;$i<=5;$i++)
                    <div class="row" style="margin-top: 20px">
                        @for($j=1;$j<=5;$j++)
                            <div class="col-sm-2" >
                                <img src="{{asset('images/front/logo/doitac/'.$i.'_'.$j.'.png')}}" style="width: 80%;height: 80px">
                            </div>
                        @endfor
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="row news" style="margin-left: 0px;margin-top: 5%">
        <div class="row" style="text-align: center;margin-top: 5%">
            <h3 style="font-weight: bold;color: #5a5a5a;text-align: center">TIN TỨC - KHUYẾN MẠI</h3>
        </div>
        <div class="row" style="margin-top:5%">
            <div class="col-sm-1">
                <a onclick="plusSlides(-1)" style="float:right;margin-right:0px;margin-top: 150px;border: none;background: none">
                    <i class="fa fa-angle-double-left" aria-hidden="true" style="font-size: 30px;color: #FFAA00"></i>
                </a>
            </div>
            <div class="col-sm-10">
                <div class="row" style="width: 90%;margin-left: 5%">
                    @foreach($news as $new)
                        <?php $i++;?>
                        <div   class="col-sm-3 mynews"  style="display: block">
                            <div class="row"  style="float:left;border-radius: 5px;box-shadow: 5px 5px gainsboro;width: 95%">
                                <div class="row" style="background-color: #6a6a6a;height: 150px">
                                    <a href="{{url('/tin-tuc/bai-viet/'.$new->slug)}}"><img src="{{$new->image}}" alt="" style="width: 100%;height: 100%" /></a>
                                </div>
                                <div class="row" style="background-color: white;">
                                    <div class="row">
                                        <h5 style="color: #efaf3d">{{$new->name}}</h5>
                                    </div>
                                    <div class="row" style="padding-right: 10px;max-height: 140px;overflow: hidden">
                                        <h5 style="color: black;font-weight: bold">
                                            <?php echo($new->intro);?>
                                        </h5>
                                    </div>
                                    <div class="row">
                                        <h5 style="color: #999898">{{$new->created_at}}</h5>
                                    </div>
                                    <div class="row" style="margin-bottom:10px ">
                                        <a href="{{url('/tin-tuc/bai-viet/'.$new->slug)}}" style="float: right;color: #efaf3d;padding-right: 10px">Xem thêm ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <script type="text/javascript">
                    let myIndex1 = 0;
                    console.log('a');
                    let mytieout;
                    carousels();

                    function carousels() {
                        let i;
                        let x = document.getElementsByClassName("mynews");
                        let n = x.length;
                        for (i = 0; i < x.length; i++)
                        {
                            x[i].style.display = "none";
                        }
                        myIndex1++;
                        /*console.log(myIndex1);*/
                        if (myIndex1 >= x.length) {myIndex1 = 0}
                        x[myIndex1].style.display = "block";
                        if (myIndex1 + 1 >= x.length)
                        {
                            x[(myIndex1+1)% x.length ].style.display = "block";
                        }
                        else
                        {
                            x[myIndex1+1].style.display = "block";
                        }
                        if (myIndex1 + 2 >= x.length)
                        {
                            x[(myIndex1+2)% x.length ].style.display = "block";
                        }
                        else
                        {
                            x[myIndex1+2].style.display = "block";
                        }
                        if (myIndex1 + 3 >= x.length)
                        {
                            x[(myIndex1+3)% x.length ].style.display = "block";
                        }
                        else
                        {
                            x[myIndex1+3].style.display = "block";
                        }
                        mytieout = setTimeout(carousels, 3000);
                    }
                    function plusSlides(k)
                    {
                        console.log(k);
                        myIndex1= myIndex1+k;
                        clearTimeout(mytieout);
                        carousels();
                    }
                </script>
                <div class="row" style="margin-bottom: 5%">
                </div>
            </div>
            <div class="col-sm-1">
                <a onclick="plusSlides(+1)" style="float:left;margin-left:0px;margin-top: 150px;border: none;background: none">
                    <i class="fa fa-angle-double-right" aria-hidden="true" style="font-size: 30px;color: #FFAA00"></i>
                </a>
            </div>
        </div>
    </div>

@endsection

