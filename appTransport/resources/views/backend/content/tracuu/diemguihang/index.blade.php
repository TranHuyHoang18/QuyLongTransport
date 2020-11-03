@extends('backend.layouts.homepageLayout')
@section('title')
    Trang quản trị Các điểm gửi hàng
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
        <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Điểm gửi hàng</h4>
        <a href="{{url('admin/diem-gui-hang/add')}}">
            <button class="btn btn-success" style="margin-bottom: 10px;margin-left: 20px">Thêm điểm gửi hàng mới</button>
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Điểm gửi hàng</th>
                <th scope="col">Chi tiết</th>
                <th scope="col" >Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>
            @foreach($diemguihangs as $diemguihang)
                <tr>
                    <?php $i++; ?>
                    <th scope="row">{{$i}}</th>
                    <td>{{$diemguihang->diemguihang}}</td>
                    <td>
                        <?php
                        $tinhs = json_decode($diemguihang->tinhs);
                        $j = 0;
                        ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>STT</td>
                                    <td>Tỉnh</td>
                                    <td>ID Tỉnh</td>
                                    <td>Mã vùng</td>
                                    <td>Khu Vực trả</td>
                                    <td>CPN</td>
                                    <td>VCN</td>
                                    <td>VTK</td>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach($tinhs as $tinh)
                                <?php $j++; ?>
                                 <tr>
                                     <td>{{$j}}</td>
                                     <td>{{ $tinh->{'tinh'} }}</td>
                                     <td>{{ $tinh->{'id_tinh'} }}</td>
                                     <td>{{ $tinh->{'mavung'} }}</td>
                                     <td>{{ $tinh->{'khuvuctra'} }}</td>
                                     <td>{{ $tinh->{'CPN'} }}</td>
                                     <td>{{ $tinh->{'VCN'} }}</td>
                                     <td>{{ $tinh->{'VTK'} }}</td>
                                 </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <a href="{{url('admin/diem-gui-hang/edit/'.$diemguihang->id)}}" ><button class="btn btn-warning">Sửa</button></a>
                        <a href="{{url('admin/diem-gui-hang/delete/'.$diemguihang->id)}}" ><button class="btn btn-danger">Xóa</button></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

<script type="text/javascript">

</script>
@endsection
