@extends('qtv.layouts.NewHomePageLayout')
@section('title')
    Sửa gói cước
@endsection
@section('style')
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
@endsection
@section('content')
    <div class="row">
        <div class="" style="padding-top: 3%">
            <h4 class="tittle-w3-agileits mb-4">Sửa bảng giá cước vận chuyển</h4>
            <form action="{{url('qtv/cuoc-van-chuyen/add')}}" method="post" enctype="multipart/form-data" style="width: 500px">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Điểm gửi hàng</label>
                    <div class="col-sm-8">

                        <select name="id_diemguihang" style="width: 60%;height: 30px">
                            @foreach($diemguihangs as $diemguihang)
                                @if($diemguihang->id == $cuoc->id_diemguihang)
                                    <option value="{{$diemguihang->id}}" selected>{{$diemguihang->diemguihang}}</option>
                                @else
                                    <option value="{{$diemguihang->id}}">{{$diemguihang->diemguihang}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="fom-group row">
                    <label for="code" class="col-sm-4 col-form-label">Bảng giá cước mới</label>
                    <div class="col-sm-8">
                        <input type="file" name="file" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
