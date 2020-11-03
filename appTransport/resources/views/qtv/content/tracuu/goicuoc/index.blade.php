@extends('backend.layouts.homepageLayout')
@section('title')
    Trang quản trị gói cước
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
        <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Quản trị gói cước</h4>
        <a href="{{url('admin/goi-cuoc/add')}}">
            <button class="btn btn-success" style="margin-bottom: 10px;margin-left: 20px">Thêm gói cước mới</button>
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Loại dịch vụ</th>
                <th scope="col">Thời gian vận chuyển</th>
                <th scope="col">Hình thức vận chuyển</th>
                <th scope="col">Địa chỉ gửi</th>
                <th scope="col">Địa chỉ nhận</th>
                <th scope="col">Giá khách</th>
                <th scope="col">Giá đối tác</th>
                <th scope="col" >Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>
            @foreach($goicuocs as $goicuoc)
                <tr>
                    <?php $i++; ?>
                    <th scope="row">{{$i}}</th>
                    <td>{{$goicuoc->loai}}</td>
                    <td>{{$goicuoc->thoigianvc}}</td>
                    <td>{{$goicuoc->hinhthucvc}}</td>
                    <?php
                        $dcgui = json_decode($goicuoc->diachigui);
                        $tinh = $tinhs[$dcgui->{'tinh'}-1];
                        $huyens = json_decode($tinh->huyen);
                        $huyen = $huyens[$dcgui->{'huyen'}];
                        $text = $huyen . ' - ' .$tinh->tinh;
                    ?>
                    <td>{{$text}}</td>
                    <?php
                        $dcnhan = json_decode($goicuoc->diachinhan);
                        $tinh = $tinhs[$dcnhan->{'tinh'}-1];
                        $huyens = json_decode($tinh->huyen);
                        $huyen = $huyens[$dcnhan->{'huyen'}];
                        $text = $huyen . ' - ' .$tinh->tinh;
                        ?>
                    <td>{{$text}}</td>
                    <td>{{number_format($goicuoc->gia).' VNĐ'}}</td>
                    <td>{{number_format($goicuoc->gia_doitac).' VNĐ'}}</td>
                    <td>
                        <a href="{{url('admin/goi-cuoc/edit/'.$goicuoc->id)}}" ><button class="btn btn-warning">Sửa</button></a>
                        <a href="{{url('admin/goi-cuoc/delete/'.$goicuoc->id)}}" ><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            {{$goicuocs->links()}}
        </table>
    </div>


@endsection
