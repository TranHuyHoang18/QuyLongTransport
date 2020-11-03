@extends('ketoan.layouts.NewHomepageLayout')
@section('title')
    Danh sách khách lẻ
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
    @if(session()->has('success-message'))
        <div class="alert alert-success">
            {{ session()->get('success-message') }}
        </div>
    @endif
    @if(session()->has('warning-message'))
        <div class="alert alert-warning">
            {{ session()->get('warning-message') }}
        </div>
    @endif
    <div id="new-category" style="display: none">
        <div class="uk-card uk-card-default">
            <div class="uk-card-body uk-padding-small uk-box-shadow" style="padding-top: 2%;padding-bottom: 5%">
                <form action="{{url('ketoan/khach-hang/khach-le/add/')}}" method="post" class="uk-grid-small uk-grid" uk-grid>
                    @csrf
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div>
                            <div class="uk-text-center uk-text-large" style="padding-bottom: 20px; border-bottom: 2px solid #FBB03B; width: 80%;margin-left: 10%;">
                                Thông tin
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Tên khách hàng</label>
                            <div class="uk-form-controls">
                                <input class="uk-input"  type="text"  name="nguoi_dd" placeholder="Nguyễn Văn A" required=""  style="background: #e6e3e3">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Số điện thoại</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" name="phone" placeholder="0124567890" required=""  style="background: #e6e3e3">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Mã khách hàng</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" name="Ma_khachhang" value="{{'AB'.random_int(1000000,9999999)}}" required="" style="background: #e6e3e3">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div >
                            <div class="uk-text-center uk-text-large uk-text-uppercase" style="padding-bottom: 20px; border-bottom: 2px solid #FBB03B; width: 80%;margin-left: 10%;">
                                Thông tin chi tiết
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Địa Chỉ</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" name="address" placeholder="Đương Lê Quý, Quận 8, TP HCM" aria-required=""  style="background: #e6e3e3">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input"type="text" name="email" placeholder="a@gmail.com" required="" style="background: #e6e3e3">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Nhân viên chăm sóc</label>
                            <div class="uk-form-controls">
                                <select name="id_nhanvien" style="width:100%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #e6e3e3;height:35px">
                                    @foreach($nhanviens as $nhanvien)
                                        <option value="{{$nhanvien->id}}">{{$nhanvien->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <div class="uk-form-controls">
                                <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn" style="background:#FBB03B;width: 60%;margin-left: 20%;border-radius: 10px 10px 10px 10px">Thêm mới</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="uk-card uk-card-default cardBox uk-margin">
        <div class="cardBox__header uk-card-header uk-background-mySin">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">DANH SÁCH KHÁCH LẺ</span>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 0px">
                    <div class="uk-text-right">
                        <button id="btn-add"  class="btn btn-success"  onsubmit="false" onclick="openId('new-category')">Thêm khách lẻ</button>
                        <button id="btn-cancel"  class="btn btn-danger" onsubmit="false" onclick="CloseId('new-category')" style="display:none">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardBox__body uk-card-body uk-padding-remove">
            <div class="uk-overflow-auto">
                <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                    <thead>
                    <tr>
                        <th class="uk-text-center">STT</th>
                        <th class="uk-text-center">Họ tên</th>
                        <th class="uk-text-center">Mã KH </th>
                        <th class="uk-text-center">email</th>
                        <th class="uk-text-center">SĐT</th>
                        <th class="uk-text-center">Địa chỉ</th>
                        <th class="uk-text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0; ?>
                    @foreach($khachles as $khachle)
                        <?php  $i++; ?>
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$khachle->nguoi_dd}}</td>
                            <td>{{$khachle->Ma_khachhang}}</td>
                            <td>{{$khachle->email}}</td>
                            <td>{{$khachle->phone}}</td>
                            <td>{{$khachle->address}}</td>
                            <td style="border-right: none">
                                <a href="{{url('ketoan/khach-hang/thong-ke/'.$khachle->id)}}"><button class="btn btn-warning">Thống kê</button></a>
                                <a href="{{url('ketoan/khach-hang/khach-le/delete/'.$khachle->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa ? ')"><button class="btn btn-danger">Xóa</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function openId(id)
        {
            document.getElementById(id).style.display="inline";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('btn-cancel').style.display="inline";
        }
        function CloseId(id)
        {
            document.getElementById(id).style.display="none";
            document.getElementById('btn-add').style.display="inline";
            document.getElementById('btn-cancel').style.display="none";
        }
    </script>
@endsection

