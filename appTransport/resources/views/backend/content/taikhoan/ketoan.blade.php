@extends('backend.layouts.homepageLayout')
@section('title')
    Kế Toán | Tài Khoản
@endsection
@section('style')
        h4
        {
            color: #656565;
            float: left;
            margin-left: 2%;
            font-weight: bold;
        }
        td
        {
            text-align: center;
        }
        tbody td
        {
            border-right:1px dashed black;
        }
@endsection
@section('content')
    <div class="row" style="font-family: 'Segoe UI';background: #E8E8E8;width: 100%">
        <div class="row">
            <h3 style="color:#4D4D4D;margin-left: 5%">DANH SÁCH KẾ TOÁN</h3>
        </div>
        <div class="row" style="margin-bottom: 2%">
            <button id="btn-add" onclick="openform()" class="btn btn-success" style="padding: 5px 10px 5px 10px;margin-left: 5%"><h4 style="color:white;">Tạo tài khoản</h4></button>
        </div>
        <div id="formnhanvien" class="row"  style="width: 90%;margin-left: 3%;background: #E9E9E9;padding-bottom: 5%;display: none">
            <form action="{{url('admin/tai-khoan/ke-toan/them')}}" method="post" style="margin-top: 5%;border-radius: 10px 0px 10px 0px;border: 1px solid #707070;padding: 3% 3% 3% 3%;background: white">
                @csrf
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Họ và tên</h4>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="name" placeholder=" Nguyễn Văn A" required="" style="width: 60%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Email</h4>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="email" placeholder="a@gmail.com" required="" style="width: 60%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Mật khẩu</h4>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="password" placeholder="123456789" value="123456789" aria-required="" style="width: 60%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                    </div>
                </div>
                <div class="row" style="text-align: center">
                    <button class="btn" type="submit" style="background: #FFAA00;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Lưu thông tin</h4></button>
                    <button class="btn" type="button" onsubmit="false" onclick="closeform()" style="background: #e02b3a;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Hủy</h4></button>
                </div>
            </form>
        </div>
        <div class="row">
            <table style="width: 96%;margin-left: 2%;padding-right:2%;color: #4D4D4D;font-size: 16px">
                <thead >
                    <tr style="margin-top: 10px;background:#FBB03B;padding: 10px 5px 10px 10px;height:50px">
                        <td style="margin-left: 10px">STT</td>
                        <td>Họ và Tên</td>
                        <td>Email</td>
                        <td>Mật Khẩu</td>
                        <td>Ngày Tạo</td>
                        <td>Hành Động</td>
                    </tr>
                </thead>
               <tbody style="margin-top: 2%">
               <?php  $i=0; ?>
                @foreach($nhanviens as $nhanvien)
                    <?php  $i++; ?>
                    @if($i%2==1)
                        <tr style="margin-top: 3%;background:#F2F2F2 ">
                    @else
                        <tr style="margin-top: 3%;background:#CCCCCC">
                    @endif
                            <td style="margin-left: 10px">{{$i}}</td>
                            <td>{{$nhanvien->name}}</td>
                            <td>{{$nhanvien->email}}</td>
                            <td><a href="{{url('admin/tai-khoan/ke-toan/doi-mat-khau/'.$nhanvien->id)}}"> <button class="btn btn-success">Reset</button></a></td>
                            <td>{{$nhanvien->created_at}}</td>
                            <td style="border-right: none">
                                <button class="btn btn-warning">Xóa</button>
                            </td>
                        </tr>
                @endforeach
               </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript">
        function openform()
        {
            document.getElementById('formnhanvien').style.display="block";
            document.getElementById('btn-add').style.display="none";
        }
        function closeform()
        {
            document.getElementById('formnhanvien').style.display="none";
            document.getElementById('btn-add').style.display="block";
        }
    </script>
@endsection

