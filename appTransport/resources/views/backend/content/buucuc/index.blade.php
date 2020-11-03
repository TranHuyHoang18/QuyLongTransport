@extends('backend.layouts.homepageLayout')
@section('title')
    Trang quản trị hệ thống các Bưu cục
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
        <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Quản trị hệ thống Bưu Cục</h4>
        <a href="{{url('admin/buu-cuc/add')}}">
            <button class="btn btn-success" style="margin-bottom: 10px;margin-left: 20px">Thêm bưu cục mới</button>
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Mã</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Location</th>
                <th scope="col" >Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>
            @foreach($buucucs as $buucuc)
                <tr>
                    <?php $i++; ?>
                    <th scope="row">{{$i}}</th>
                    <td>{{$buucuc->name}}</td>
                    <td>{{$buucuc->code}}</td>
                    <td>{{$buucuc->address}}</td>
                    <td>{{$buucuc->location}}</td>
                    <td>
                        <a href="{{url('admin/buu-cuc/edit/'.$buucuc->id)}}" ><button class="btn btn-warning">Sửa</button></a>
                        <a href="{{url('admin/buu-cuc/delete/'.$buucuc->id)}}" ><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{$buucucs->links()}}
    </div>


@endsection
