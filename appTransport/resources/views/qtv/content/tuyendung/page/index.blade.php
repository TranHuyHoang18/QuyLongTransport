@extends('backend.layouts.homepageLayout')
@section('title')
    Trang quản trị bài viết  trên trang Tuyển dụng
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
        <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Quản trị bài viết  trên trang Tuyển dụng</h4>
        <a href="{{url('admin/tuyen-dung/bai-viet/add')}}">
            <button class="btn btn-success" style="margin-bottom: 10px;margin-left: 20px">Thêm bài viết mới</button>
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Danh mục cha</th>
                <th scope="col">Hình Ảnh</th>
                <th scope="col">Ngày viết</th>
                <th scope="col">Lượt View</th>
                <th scope="col">Lượt Comment</th>
                <th scope="col" >Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $i =0; ?>
                @foreach($pages as $page)
                    <?php $i++; ?>
                    <tr>
                        <th scope="col">{{$i}}</th>
                        <th scope="col">{{$page->name}}</th>
                        <th scope="col">{{$map[$page->id_category]}}</th>
                        <th scope="col">
                            <?php
                            $images = isset($page->image) ? json_decode($page->image) : array();
                            ?>
                            @if(!empty($images))
                                @foreach($images as $image)
                                    <img src="{{ asset($image) }}" style="margin-top:15px;max-height:100px;">
                                @endforeach
                            @endif
                        </th>
                        <th scope="col">{{$page->created_at}}</th>
                        <th scope="col">{{$page->views}}</th>
                        <th scope="col">{{$page->comments}}</th>
                        <th scope="col">
                            <a href="{{url('admin/tuyen-dung/bai-viet/detail/'.$page->id)}}" ><button class="btn btn-success">chi tiết</button></a>
                            <a href="{{url('admin/tuyen-dung/bai-viet/edit/'.$page->id)}}" ><button class="btn btn-warning">Sửa</button></a>
                            <a href="{{url('admin/tuyen-dung/bai-viet/delete/'.$page->id)}}" ><button class="btn btn-danger">Xóa</button></a>
                        </th>
                    </tr>
                @endforeach
            </tbody>
            {{$pages->links()}}
        </table>
    </div>


@endsection
