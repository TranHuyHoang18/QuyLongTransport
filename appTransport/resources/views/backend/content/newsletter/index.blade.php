@extends('backend.layouts.homepageLayout')
@section('title')
    Trang quản trị Newsletter
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
        <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Quản trị Newsletter</h4>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">email</th>
                <th scope="col">Ngày khởi tạo</th>
                <th scope="col" >Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>
            @foreach($newsletters as $newsletter)
                <tr>
                    <?php $i++; ?>
                    <th scope="row">{{$i}}</th>
                    <td>{{$newsletter->email}}</td>
                    <td>{{$newsletter->created_at}}</td>
                    <td>
                        <a href="{{url('admin/newsletter/delete/'.$newsletter->id)}}" ><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>
            @endforeach
            {{$newsletters->links()}}
            </tbody>
        </table>
    </div>


@endsection
