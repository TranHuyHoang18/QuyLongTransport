@extends('backend.layouts.homepageLayout')
@section('title')
    Thêm mới danh mục Tuyển dụng
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
            <h4 class="tittle-w3-agileits mb-4">Thêm mới danh mục Tuyển dụng</h4>
            <form action="{{url('admin/tuyen-dung/danh-muc/add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên danh muc</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputEmail3"
                               placeholder="Tên bài viết ..." required="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Thêm Danh muc</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
