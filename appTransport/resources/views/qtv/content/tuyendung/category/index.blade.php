@extends('backend.layouts.homepageLayout')
@section('title')
    Trang quản trị danh mục Tuyển dụng
@endsection
@section('style')
    <style type="text/css">
        .table-bordered tr th
        {
            text-align: center;
        }
        .News
        {
            background-color: white;
        }
        .table-bordered
        {
            margin-top: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="News">
        <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Quản trị Danh Mục Tuyển dụng</h4>
        <a href="{{url('admin/tuyen-dung/danh-muc/add')}}">
            <button class="btn btn-success" style="margin-bottom: 10px;margin-left: 20px">Thêm danh mục mới</button>
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col" >Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 0;?>
                @foreach($categories as $category)
                    <?php $i++; ?>
                    <tr>
                        <th>{{$i}}</th>
                        <th >
                            {{$category->name}}
                        </th>
                        <th>
                            <a href="{{url('admin/tuyen-dung/danh-muc/edit/'.$category->id)}}" ><button class="btn btn-warning">Sửa</button></a>
                            <a href="{{url('admin/tuyen-dung/danh-muc/delete/'.$category->id)}}" ><button class="btn btn-danger">Xóa</button></a>
                        </th>
                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>


@endsection
