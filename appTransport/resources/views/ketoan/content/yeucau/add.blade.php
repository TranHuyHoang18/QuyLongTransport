@extends('ketoan.layouts.NewHomepageLayout')
@section('title')
    Thêm yêu cầu đơn hàng
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
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-text-large uk-text-bold" style="margin-top: 0px;">
                <h3 style="color: #FF8000;font-weight: bold">Thêm yêu cầu </h3>
            </div>
            <form action="{{url('ketoan/yeu-cau/add')}}" method="post">
                @csrf
                <div class="uk-margin-medium">
                    <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
                        <div>
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%">
                                <div class="uk-text-left uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;background:#D6D6D6;padding:10px 20px 10px 20px">
                                    THÔNG TIN HÀNG HÓA
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Tên hàng<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="tenhang" placeholder=" Nhập tên hàng hóa" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Đơn vị tính<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="donvi" placeholder="KG/CBM/Kiện/Xe" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Trọng lượng<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="trongluong" placeholder="Trọng lượng(kg) hoặc CBM (m3)" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Gửi từ<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <select name="id_diemgui" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;margin-top: 5px;height: 35px"  onchange="resetHuyen(this)" >
                                            @foreach($diemguihangs as $diemguihang)
                                                <option value="{{$diemguihang->id}}">{{$diemguihang->diemguihang}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m" >
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Gửi đến<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <select id="tmp1" name="cc" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px" >
                                            <option >{{' Chọn Tỉnh/TP'}}</option>
                                        </select>
                                        @foreach($diemguihangs as $diemguihang)
                                            <select class="city" name="tinh_nhan[{{$diemguihang->id}}]"  id="{{$diemguihang->id+500}}" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px;display: none" >
                                                <?php
                                                $tinh1s = json_decode($diemguihang->tinhs);
                                                ?>
                                                @foreach($tinh1s as $tinh)
                                                    <option value="{{$tinh->{'id_tinh'} }}">{{$tinh->{'tinh'} }}</option>
                                                @endforeach
                                            </select>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function resetHuyen(obj)
                                {
                                    let options = obj.value;
                                    let x= document.getElementsByClassName('city');
                                    for(let i=0;i<x.length;i++)
                                    {
                                        x[i].style = "display:none";
                                    }
                                    document.getElementById('tmp1').style="display:none";
                                    document.getElementById(parseInt(obj.value)+500).style="border-radius: 5px;border: 1px solid #BEBEBE;width: 95%;margin-left: 5%;margin-top: 5px;height: 35px;display:inline";
                                }
                            </script>
                        </div>
                        <div>
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%">
                                <div class="uk-text-left uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;background:#D6D6D6;padding:10px 20px 10px 20px">
                                    THÔNG TIN Khách hàng
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Tên đơn vị<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="tendonvi" placeholder="Công ty CP Thương Mại Việt Đức" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Người đại diện<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="nguoidd" placeholder="Nguyễn Thu Huyền" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Điện thoại<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="dienthoai" placeholder="Nhập số điện thoại" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Email<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="email" placeholder="Nhập email" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>
                                <div uk-grid style="margin-top: 20px">
                                    <div class="uk-width-1-2@s uk-width-1-3@m">
                                        <div class="uk-text-left uk-text-large" style="padding-left: 10px;color:#707070;font-size: large">
                                            Địa chỉ<span style="color: red">*</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2@s uk-width-2-3@m"  style="margin-top: 0px">
                                        <input type="text" name="address" placeholder="Nhập địa chỉ (tên đường/số nhà/hẻm/ngõ)" required="" style="border-radius: 5px;border: 1px solid #BEBEBE;width: 90%;margin-left: 5%;height: 35px">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div>
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%">
                                <div class="uk-child-width-1-2@s" uk-grid>
                                    <div >
                                        <div class="uk-text-center uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;padding:10px 20px 10px 20px">
                                            Yêu cầu lấy hàng
                                        </div>
                                        <div class="uk-text-left" style="padding-left: 5%">
                                            <input type="radio" id="male1" name="yclayhang" value="0" style="background: #FFAA00;margin-right: 20px">
                                            <label for="male1" style="color: #707070">Đến lấy tận nơi</label>
                                        </div>
                                        <div class="uk-text-left" style="padding-left: 5%">
                                            <input type="radio" id="female1" name="yclayhang" value="1"style="background: #FFAA00;margin-right: 20px">
                                            <label for="female1" style="color: #707070">Gửi hàng tại kho</label>
                                        </div>
                                    </div>
                                    <div  style="margin-top: 0px">
                                        <div class="uk-text-center uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;padding:10px 20px 10px 20px">
                                            Yêu càu giao hàng
                                        </div>
                                        <div class="uk-text-left" style="padding-left: 5%">
                                            <input type="radio" id="male" name="ycgiaohang" value="0" style="background: #FFAA00;margin-right: 20px">
                                            <label for="male" style="color: #707070">Giao hàng tận nơi</label>
                                        </div>
                                        <div class="uk-text-left" style="padding-left: 5%">
                                            <input type="radio" id="female" name="ycgiaohang" value="1" style="background: #FFAA00;margin-right: 20px">
                                            <label for="female" style="color: #707070">Trả hàng tại kho</label>
                                        </div>
                                    </div>
                                    <div style="margin-top: 0px">
                                        <div class="uk-text-center uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;padding:10px 20px 10px 20px">
                                            Ghi Chú
                                        </div>
                                        <div class="uk-text-left" style="padding-left: 5%">
                                            <textarea name="ghichu" style="width: 90%;margin-left: 5%;border-radius: 5px;height:110px;padding-left: 10px ">Ghi yêu cầu</textarea>
                                        </div>
                                    </div>
                                    <div  style="margin-top: 0px">
                                        <div class="uk-text-center uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;padding:10px 20px 10px 20px">
                                            NGƯỜI NHẬN HÀNG
                                        </div>
                                        <div class="uk-text-left" style="padding-left: 5%">
                                            <select name="id_nguoitiepnhan" style="width: 90%;margin-left: 5%;background: #F5F5F5;border-radius: 5px;margin-top: 4%;height: 35px">
                                                @foreach($nvkhos as $nvkho)
                                                    <option value="{{$nvkho->id}}">{{$nvkho->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%">
                                <div class="uk-text-left uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;background:#D6D6D6;padding:10px 20px 10px 20px">
                                    Chọn nhân viên sales
                                </div>
                                <div class="uk-text-left" style="margin-top: 20px">
                                    <select name="id_nhanvien"  style="width: 90%;margin-left: 5%;background: #F5F5F5;border-radius: 5px;margin-top: 4%;height: 35px" >
                                        @foreach($nhanviens as $nhanvien)
                                            <option value="{{$nhanvien->id}}">{{$nhanvien->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="" style="background: white;width:90%; margin-left:5%;padding-bottom: 3%;margin-top: 3%">
                                <div class="uk-text-left uk-text-uppercase uk-text-large" style="font-weight:bold;font-size:20px;color: #656565;background:#D6D6D6;padding:10px 20px 10px 20px">
                                    Chọn dịch vụ
                                </div>
                                <div class="uk-text-left" style="margin-top: 20px">
                                    <select name="dichvu" style="width: 90%;margin-left: 5%;background: #F5F5F5;border-radius: 5px;margin-top: 4%;height: 35px">
                                        <option value="0">Chọn dịch vụ vận chuyển</option>
                                        <option value="CPN">CPN- Chuyển Phát nhanh</option>
                                        <option value="VCN">VCN- Vận chuyển nhanh</option>
                                        <option value="VTK">VTK- Vận chuyển tiết kiệm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-text-center" style="width:90%; margin-left:5%;margin-top: 3%">
                                <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn" style="background:#FBB03B;width: 60%;margin-left: 10%;border-radius: 10px 10px 10px 10px;color: white">Thêm yêu cầu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


