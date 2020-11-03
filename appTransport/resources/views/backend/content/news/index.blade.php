@extends('backend.layouts.homepageLayout')
@section('title')
    Trang quản trị tin tức
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
        <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Quản trị Bài viết</h4>
        <a href="{{url('admin/news/add')}}">
            <button class="btn btn-success" style="margin-bottom: 10px;margin-left: 20px">Thêm bài viết mới</button>
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">giới thiệu</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col" >Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>
            @foreach($news as $new)
                <tr>
                    <?php $i++; ?>
                    <th scope="row">{{$i}}</th>
                    <td>{{$new->name}}</td>
                    <td>{{$new->intro}}</td>
                    <td><?php
                        $images = isset($new->images) ? json_decode($new->images) : array();
                        ?>
                        @if(!empty($images))
                            @foreach($images as $image)
                                <img src="{{ asset($image) }}" style="margin-top:15px;max-height:100px;">
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <a href="{{url('admin/news/detail/'.$new->id)}}" ><button class="btn btn-success">chi tiết</button></a>
                        <a href="{{url('admin/news/edit/'.$new->id)}}" ><button class="btn btn-warning">Sửa</button></a>
                        <a href="{{url('admin/news/delete/'.$new->id)}}" ><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>
            @endforeach
            {{$news->links()}}
            </tbody>
        </table>
    </div>


@endsection
