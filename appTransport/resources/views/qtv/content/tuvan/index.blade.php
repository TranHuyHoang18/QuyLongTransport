@extends('backend.layouts.homepageLayout')
@section('title')
    Tổng đài tư vấn
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
        <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Tổng đài tư vấn</h4>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ gửi</th>
                <th scope="col">Địa chỉ nhận</th>
                <th scope="col">Ngày khởi tạo</th>
                <th scope="col" >Trạng thái</th>
                <th scope="col" >Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>
            @foreach($trans_sps as $trans_sp)
                <tr>
                    <?php $i++; ?>
                    <th scope="row">{{$i}}</th>
                    <td>{{$trans_sp->email}}</td>
                    <td>{{$trans_sp->address_s}}</td>
                    <td>{{$trans_sp->address_r}}</td>
                    <td>{{$trans_sp->created_at}}</td>
                    <td>
                        @if($trans_sp->status === 0)
                            <button class="btn btn-warning" >Chưa trả lời</button>
                        @else
                            <button class="btn btn-success">Đã trả lời</button>
                        @endif
                    </td>
                    <td>
                        <a href="{{url('admin/tuvan/detail/'.$trans_sp->id)}}" ><button class="btn btn-success">Chi tiết</button></a>
                        @if($trans_sp->status === 0)
                            <a href="{{url('/admin/tuvan/gmail/answer/'.$trans_sp->id)}}"><button class="btn btn-warning">Trả lời</button></a>
                        @endif
                        <a href="{{url('admin/tuvan/delete/'.$trans_sp->id)}}" ><button class="btn btn-danger">Xóa</button></a>6
                    </td>
                </tr>
            @endforeach
            {{$trans_sps->links()}}
            </tbody>
        </table>
    </div>


@endsection
