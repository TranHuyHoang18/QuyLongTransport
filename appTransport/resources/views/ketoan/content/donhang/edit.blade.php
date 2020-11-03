@extends('ketoan.layouts.NewHomepageLayout')
@section('title')
    Sửa đơn hàng
@endsection
@section('style')
        h4
        {
            color: #656565;
            float: left;
            margin-left: 2%;
            font-weight: bold;
        }
@endsection
@section('content')
    <div class="uk-section" style="padding-top:0px">
        <div class="uk-container">
            <div class="uk-text-large uk-text-bold" style="margin-top: 0px;">
                <h3 style="color: #FF8000;font-weight: bold">SỬA ĐƠN HÀNG</h3>
            </div>
            <form action="{{url('/ketoan/don-hang/edit/'.$donhang->id)}}" method="post">
                @csrf
                <div class="uk-margin-medium" uk-grid>
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div>
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%">
                                <div class="uk-text-left uk-text-uppercase uk-text-large"  uk-grid style="font-weight:bold;font-size:20px;color: #656565;background:#D6D6D6;padding:10px 20px 10px 20px;margin-left: 0px">
                                    <div class="uk-width-1-3">
                                        NGười gửi
                                    </div>
                                    <div class="uk-width-2-3">
                                        <span  style="color: #FF8000;font-size: medium">Quản lý thông tin người gửi</span>
                                    </div>

                                </div>
                                <div class="uk-text-left" style="margin-top: 20px">
                                    <select onchange="resetInfoKhach(this)" name="id_nguoigui" style="width: 90%;margin-left: 5%;background: #F5F5F5;border-radius: 5px;margin-top: 4%;height: 35px">
                                        @foreach($khachhangs as $khachhang)
                                            @if($khachhang->id == $donhang->id_nguoigui)
                                                <option value="{{$khachhang->id}}" selected>{{$khachhang->Ma_khachhang}}</option>
                                            @else
                                                <option value="{{$khachhang->id}}">{{$khachhang->Ma_khachhang}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="uk-text-left" style="width:90%; margin-left:5%;margin-top: 3%;color:#FF0000;font-weight: inherit;">
                                    Thông tin người gửi không được để trống
                                </div>
                                <div class="uk-text-center" uk-grid>
                                    <div class="uk-width-1-3">
                                        <h5 style="margin-left: 20px;margin-top: 0px">Đối tác</h5>
                                    </div>
                                    <div class="uk-width-2-3">
                                        <input type="radio" id="male" name="doitac" value="1" style="background: #FFAA00;">
                                        <label for="male" style="margin-left: 10px">Có</label>
                                        <input type="radio" id="female" name="doitac" value="0" style="background: #FFAA00;margin-left: 20px">
                                        <label for="female" style="margin-left: 10px">Không</label>
                                    </div>
                                </div>
                                @foreach($khachhangs as $khachhang)
                                    <div id="{{'khachhang_'.$khachhang->id}}" class="uk-text-left infokhachang" style="background:#FFFFFF;padding-bottom: 2%;display: none">
                                        <div class="uk-text-bold uk-text-large" style="  color: #656565;font-weight: bold;font-size: large; padding-left: 5%">
                                            Thông tin người gửi:
                                        </div>
                                        <div class="uk-child-width-1-2" uk-grid>
                                            @if($khachhang->loaikhach == '0' )
                                                <div style="margin-top: 0px">
                                                    <div class="uk-text-large" style="font-size: large;padding-left: 20%;color:#707070;">
                                                        Loại khách hàng :
                                                    </div>
                                                </div>
                                                <div  style="margin-top: 0px">
                                                    <div class="uk-text-large uk-text-italic" style="font-size: large;color:#707070;">
                                                        {{'Đối tác'}}
                                                    </div>
                                                </div>
                                                <div  style="margin-top: 0px">
                                                    <div class="uk-text-large" style="font-size: large;margin-left: 20%;color:#707070;">
                                                        Tên đơn vị :
                                                    </div>
                                                </div>
                                                <div  style="margin-top: 0px">
                                                    <div class="uk-text-large uk-text-italic" style="font-size: large;color:#707070;">
                                                        {{$khachhang->ten_don_vi}}
                                                    </div>
                                                </div>
                                            @else
                                                <div>
                                                    <div class="uk-text-large" style="font-size: large;margin-left: 7%;color:#707070;">
                                                        Loại khách hàng :
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="uk-text-large uk-text-italic" style="font-size: large;color:#707070;">
                                                        {{'Khách lẻ'}}
                                                    </div>
                                                </div>
                                            @endif
                                            <div  style="margin-top: 0px">
                                                <div class="uk-text-large" style="font-size: large;margin-left: 20%;color:#707070;">
                                                    Người đại diện:
                                                </div>
                                            </div>
                                            <div  style="margin-top: 0px">
                                                <div class="uk-text-large uk-text-italic" style="font-size: large;color:#707070;">
                                                    {{$khachhang->nguoi_dd}}
                                                </div>
                                            </div>
                                            <div  style="margin-top: 0px">
                                                <div class="uk-text-large" style="font-size: large;margin-left: 20%;color:#707070;">
                                                    SĐT :
                                                </div>
                                            </div>
                                            <div  style="margin-top: 0px">
                                                <div class="uk-text-large uk-text-italic" style="font-size: large;color:#707070;">
                                                    {{$khachhang->phone}}
                                                </div>
                                            </div>
                                            <div  style="margin-top: 0px">
                                                <div class="uk-text-large" style="font-size: large;margin-left: 20%;color:#707070;">
                                                    Địa chỉ :
                                                </div>
                                            </div>
                                            <div  style="margin-top: 0px">
                                                <div class="uk-text-large uk-text-italic" style="font-size: large;color:#707070;">
                                                    {{$khachhang->address}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <script type="text/javascript">
                                let tl = <?php echo $donhang->id_nguoigui; ?>;
                                document.getElementById('khachhang_'+tl).style.display="block";
                                function resetInfoKhach(obj)
                                {
                                    let options = obj.value;
                                    x = document.getElementsByClassName('infokhachang');
                                    for(let j=0;j<x.length;j++)
                                    {
                                        x[j].style.display = "none";
                                    }
                                    document.getElementById('khachhang_'+options).style.display="block";
                                }
                            </script>
                        </div>
                        <div style="margin-top: 20px">
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%">
                                <div class="uk-text-left uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;background:#D6D6D6;padding:10px 20px 10px 20px">
                                    THÔNG TIN Người nhận
                                </div>
                                <?php $info_nguoinhan = json_decode($donhang->info_nguoinhan);?>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Họ tên<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text"  name="ten_nguoinhan" value="{{$info_nguoinhan->{'ten'} }}" placeholder=" Nguyễn Thu Huyền" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Điện thoại<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="phone_nguoinhan" value="{{$info_nguoinhan->{'sdt'} }}" placeholder="Nhập số điện thoại" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Địa chỉ<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="address" value="{{$info_nguoinhan->{'diachi'} }}" placeholder="Nhập địa chỉ (tên đường/số nhà/hẻm/ngõ)" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%">
                                <div class="uk-text-left uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;background:#D6D6D6;padding:10px 20px 10px 20px">
                                    Hình thức vận chuyển
                                </div>
                                <div class="uk-text-left" style="margin-top: 20px">
                                    <select name="hinhthucvc" style="width: 90%;margin-left: 5%;background: #F5F5F5;border-radius: 5px;margin-top: 4%;height: 35px">
                                        @if($donhang->hinhthucvc=="Vp-Vp")
                                            <option value="Vp-Vp" selected>VP- VP</option>
                                            <option value="Door to Door">Door to Door</option>
                                        @else
                                            <option value="Vp-Vp" >VP- VP</option>
                                            <option value="Door to Door" selected>Door to Door</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div>
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%">
                                <div class="uk-text-left uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;background:#D6D6D6;padding:10px 20px 10px 20px">
                                    Dịch vụ
                                </div>
                                <div class="uk-text-left" style="margin-top: 20px">
                                    <select name="dichvu" style="width: 90%;margin-left: 5%;background: #F5F5F5;border-radius: 5px;margin-top: 4%;height: 35px">
                                        @if($donhang->dichvu=="CPN")
                                            <option value="CPN" selected>CPN- Chuyển Phát nhanh</option>
                                            <option value="VCN">VCN- Vận chuyển nhanh</option>
                                            <option value="VTK">VTK- Vận chuyển tiết kiệm</option>
                                        @elseif($donhang->dichvu=="VCN")
                                            <option value="CPN">CPN- Chuyển Phát nhanh</option>
                                            <option value="VCN" selected>VCN- Vận chuyển nhanh</option>
                                            <option value="VTK">VTK- Vận chuyển tiết kiệm</option>
                                        @else
                                            <option value="CPN">CPN- Chuyển Phát nhanh</option>
                                            <option value="VCN">VCN- Vận chuyển nhanh</option>
                                            <option value="VTK" selected>VTK- Vận chuyển tiết kiệm</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <div class="" style="background: #ffffff;width:90%; margin-left:5%;padding-bottom: 3%">
                                <div class="uk-text-left uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;background:#D6D6D6;padding:10px 20px 10px 20px">
                                    THÔNG TIN HÀNG HÓA
                                </div>
                                <?php $info_hanghoa = json_decode($donhang->info_hanghoa)?>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Tên hàng<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="tenhang" value="{{$info_hanghoa->{'ten'} }}" placeholder="Nhập tên hàng hóa"  required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Đơn vị tính<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="donvi"  value="{{$info_hanghoa->{'donvi'} }}" placeholder="Kg hoặc CBM" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Trọng lượng<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="trongluong"  value="{{$info_hanghoa->{'trongluong'} }}" placeholder="Trọng lượng(kg) hoặc CBM (m3)" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <?php $info_vanchuyen = json_decode($donhang->info_vanchuyen)?>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Giá cước<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="giacuoc" value="{{$info_vanchuyen->{'giacuoc'} }}" placeholder="6250000" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 5%">
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%;">
                                <div class="uk-child-width-1-2@s" uk-grid>
                                    <div>
                                        <div class="uk-text-center uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;padding:10px 20px 10px 20px">
                                            THU HỒI BIÊN BẢN
                                        </div>
                                        @if($donhang->thuhoibienban == 1 )
                                            <div class="uk-text-left" style="padding-left: 5%">
                                                <input type="radio" id="male1" name="thuhoibienban" value="1" style="background: #FFAA00;margin-right: 20px" checked>
                                                <label for="male1" style="color: #707070">Có</label>
                                            </div>
                                            <div class="uk-text-left" style="padding-left: 5%">
                                                <input type="radio" id="female1" name="thuhoibienban" value="0"style="background: #FFAA00;margin-right: 20px">
                                                <label for="female1" style="color: #707070">Không</label>
                                            </div>
                                        @else
                                            <div class="uk-text-left" style="padding-left: 5%">
                                                <input type="radio" id="male1" name="thuhoibienban" value="1" style="background: #FFAA00;margin-right: 20px" >
                                                <label for="male1" style="color: #707070">Có</label>
                                            </div>
                                            <div class="uk-text-left" style="padding-left: 5%">
                                                <input type="radio" id="female1" name="thuhoibienban" value="0"style="background: #FFAA00;margin-right: 20px" checked>
                                                <label for="female1" style="color: #707070">Không</label>
                                            </div>
                                        @endif

                                    </div>
                                    <div  style="margin-top: 0px">
                                        <div class="uk-text-center uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;padding:10px 20px 10px 20px">
                                            THU HỘ
                                        </div>
                                        <div class="uk-text-left" style="padding-left: 5%">
                                            <input type="text" name="thuho" value="{{$donhang->thuho}}" placeholder="0" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                        </div>
                                    </div>
                                    <div style="margin-top: 0px">
                                        <div class="uk-text-center uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;padding:10px 20px 10px 20px">
                                            Ghi Chú
                                        </div>
                                        <div class="uk-text-left" style="padding-left: 5%">
                                            <textarea name="ghichu" style="width: 90%;margin-left: 5%;border-radius: 5px;height:110px;padding-left: 10px "><?php echo $donhang->ghichu?></textarea>
                                        </div>
                                    </div>
                                    <div  style="margin-top: 0px">
                                        <div class="uk-text-center uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;padding:10px 20px 10px 20px">
                                            THỜI GIAN GIAO MONG MUỐN
                                        </div>
                                        <div class="uk-text-left" style="padding-left: 5%">
                                            <select name="time_giao" style="width: 90%;margin-left: 5%;background: #F5F5F5;border-radius: 5px;margin-top: 4%;height: 35px">
                                                @if($donhang->time_giao==0)
                                                    <option value="0" selected>Yêu cầu giao Cả ngày</option>
                                                @else
                                                    <option value="0">Yêu cầu giao Cả ngày</option>
                                                @endif
                                                @if($donhang->time_giao==1)
                                                    <option value="1" selected>Yêu cầu giao: Buổi sáng (7:00-12:00 AM)</option>
                                                @else
                                                    <option value="1">Yêu cầu giao: Buổi sáng (7:00-12:00 AM)</option>
                                                @endif
                                                @if($donhang->time_giao==2)
                                                    <option value="2" selected>Yêu cầu giao: Buổi chiều (13:00-17:00 PM)</option>
                                                @else
                                                    <option value="2">Yêu cầu giao: Buổi chiều (13:00-17:00 PM)</option>
                                                @endif
                                                @if($donhang->time_giao==3)
                                                    <option value="3" selected>Yêu cầu giao: Chủ nhật, ngày nghỉ lễ</option>
                                                @else
                                                    <option value="3">Yêu cầu giao: Chủ nhật, ngày nghỉ lễ</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-text-center" style="width:90%; margin-left:5%;margin-top: 3%">
                            <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn" style="background:#FBB03B;width: 60%;margin-left: 10%;border-radius: 10px 10px 10px 10px;color: white">Cập nhật đơn hàng</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

