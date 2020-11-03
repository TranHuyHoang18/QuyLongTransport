@extends('backend.layouts.homepageLayout')
@section('title')
    Trang quản trị gói cước
@endsection
@section('style')
    <style type="text/css">
        .row
        {
            background-color: white;
            margin-top: 3%;
            padding-left: 5%;
            padding-right: 5%;
        }
        .row h4
        {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin: 0px auto;
        }
        .row label
        {
            font-size: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
            <h4 class="tittle-w3-agileits mb-4">Thêm gói cước</h4>
            <form action="{{url('admin/goi-cuoc/add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Loại dịch vụ</label>
                    <div class="col-sm-9">
                        <input type="text" name="loai" class="form-control" id="inputEmail3"
                               placeholder="vận chuyển nhanh..." required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Thời gian vận chuyển</label>
                    <div class="col-sm-9">
                        <input type="text" name="thoigianvc" class="form-control" id="code"
                               placeholder="2h-12h ..." required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Hình thức vận chuyển</label>
                    <div class="col-sm-9">
                        <select name="hinhthucvc">
                            <option value="vp-vp"> Vp-Vp</option>
                            <option value="Door to door"> Door to door</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Giá cho khách</label>
                    <div class="col-sm-9">
                        <input type="text" name="gia" class="form-control" id="code"
                               placeholder="1200000 ..." required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Giá cho đối tác</label>
                    <div class="col-sm-9">
                        <input type="text" name="gia_doitac" class="form-control" id="code"
                               placeholder="1200000 ..." required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Khối lượng tối đa</label>
                    <div class="col-sm-9">
                        <input type="text" name="khoiluong" class="form-control" id="code"
                               placeholder="200kg ..." required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Địa chỉ gửi</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-4">
                                Tỉnh :
                            </div>
                            <div class="col-sm-8">
                                <select name="tinh_gui" onchange="resetHuyen(this)" style="width: 30%">
                                    <option value="0">Chưa chọn</option>
                                    @foreach($tinhs as $tinh)
                                        <option value="{{$tinh->id}}">{{$tinh->tinh}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                Tp/ Huyện :
                            </div>
                            <div class="col-sm-8">
                                @foreach($tinhs as $tinh)
                                    <select name="huyen_gui[]" id="{{$tinh->id}}" style="display: none" style="width: 30%">
                                        <?php
                                        $huyens = json_decode($tinh->huyen);
                                        ?>
                                        @for($i=1;$i<=$tinh->n_huyen;$i++)
                                            <option value="{{$i}}" >{{$huyens[$i]}}</option>
                                        @endfor
                                    </select>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Địa chỉ nhận</label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-4">
                                Tỉnh :
                            </div>
                            <div class="col-sm-8">
                                <select name="tinh_nhan" onchange="resetHuyen1(this)" style="width: 30%">
                                    <option value="0">Chưa chọn</option>
                                    @foreach($tinhs as $tinh)
                                        <option value="{{$tinh->id}}">{{$tinh->tinh}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                Tp/ Huyện :
                            </div>
                            <div class="col-sm-8">
                                @foreach($tinhs as $tinh)
                                    <select name="huyen_nhan[]" id="{{100+ $tinh->id}}" style="display: none" style="width: 30%">
                                        <?php
                                        $huyens = json_decode($tinh->huyen);
                                        ?>
                                        @for($i=1;$i<=$tinh->n_huyen;$i++)
                                            <option value="{{$i}}" >{{$huyens[$i]}}</option>
                                        @endfor
                                    </select>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Chi tiết</label>
                    <div class="col-sm-9">
                          <textarea type="text" name="chitiet" class="form-control mytinymce" id="descl3"
                                    required="">Chi tiết gói cước</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Thêm Bài viết</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script type="text/javascript">
    function resetHuyen(obj)
    {
        let options = obj.value;
        console.log(options);
        for(let i=1;i<=63;i++)
        {
            document.getElementById(i).style="display:none";
        }
        document.getElementById(obj.value).style="display:block";
    }
    function resetHuyen1(obj)
    {
        let options = obj.value;
        console.log(parseInt(options) +100);
        for(let i=1;i<=63;i++)
        {
            document.getElementById(100+i).style="display:none";
        }
        document.getElementById(100+parseInt(obj.value)).style="display:block";
    }
</script>
@endsection
