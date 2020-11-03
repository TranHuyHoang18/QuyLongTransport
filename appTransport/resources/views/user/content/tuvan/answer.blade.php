@extends('backend.layouts.homepageLayout')
@section('title')
    Trả lời khách hàng
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
            font-size: 16px;
        }
        .row p
        {
            font-size: 14px;
            text-align: left;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
            <h4 class="tittle-w3-agileits mb-4">CHi TIẾT CẦN TƯ VẤN</h4>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Tên khách hàng : </label>
                        <div class="col-sm-8"  style="border: none">
                            <p class="form-control" style="border: none">{{$item->name}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Địa chỉ email : </label>
                        <div class="col-sm-8"  style="border: none">
                            <p class="form-control" style="border: none">{{$item->email}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">SĐT : </label>
                        <div class="col-sm-8"  style="border: none">
                            <p class="form-control" style="border: none">{{$item->phone}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Ngày gửi yêu cầu :</label>
                        <div class="col-sm-8"  style="border: none">
                            <p class="form-control" style="border: none">{{$item->created_at}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Tên đồ cần gửi:</label>
                        <div class="col-sm-8"  style="border: none">
                            <p class="form-control" style="border: none">{{$item->name_product}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Trọng lượng:</label>
                        <div class="col-sm-8"  style="border: none">
                            <p class="form-control" style="border: none">{{$item->weight}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Địa chỉ gửi:</label>
                        <div class="col-sm-8"  style="border: none">
                            <p class="form-control" style="border: none">{{$item->address_s}}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Địa chỉ nhận:</label>
                        <div class="col-sm-8"  style="border: none">
                            <p class="form-control" style="border: none">{{$item->address_r}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 5%">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">

                    <h4 class="tittle-w3-agileits mb-4">Trả lời khách hàng</h4>

                    <form method="POST" action="#">
                        @csrf
                        <button type="submit" class="btn btn-success" style="font-size: 20px;padding-left: 10px;padding-right: 10px">Gửi</button>
                        <textarea type="text" name="answer" class="form-control mytinymce" id="descl3" required="">Nhập câu trả lời</textarea>
                    </form>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
@endsection


