@extends('qtv.layouts.NewHomePageLayout')
@section('title')
    Trang quản trị Các điểm gửi hàng
@endsection
@section('style')

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

@endsection
@section('content')
    @if(session()->has('success-message'))
        <div class="alert alert-success">
            {{ session()->get('success-message') }}
        </div>
    @endif

    <div class="uk-card uk-card-default cardBox uk-margin" id="details">
        <div class="cardBox__header uk-card-header uk-background-mySin">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">Danh sách các điểm gửi hàng </span>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 0px">
                    <div class="uk-text-right">
                        <a href="{{url('qtv/diem-gui-hang/add')}}"><button id="btn-add"  class="btn btn-success">Thêm điểm gửi hàng</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardBox__body uk-card-body uk-padding-remove" >
            <div class="uk-overflow-auto">
                <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                    <thead>
                    <tr>
                        <th class="uk-text-center">STT</th>
                        <th class="uk-text-center">Điểm gửi hàng</th>
                        <th class="uk-text-center">Chi tiết</th>
                        <th class="uk-text-center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0;?>
                    @foreach($diemguihangs as $diemguihang)
                        <?php $i++; ?>
                        <tr>
                            <td>{{$i}}</td>
                            <td class="uk-text-left">{{$diemguihang->diemguihang}}<br>{{"ID = ". $diemguihang->id}}</td>
                            <td class="uk-text-left">
                                <?php
                                $tinhs = json_decode($diemguihang->tinhs);
                                $j = 0;
                                ?>
                                <div style="height: 250px; overflow-y: scroll">
                                    <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                                        <thead>
                                        <tr>
                                            <th class="uk-text-center">STT</th>
                                            <th class="uk-text-center">Tỉnh</th>
                                            <th class="uk-text-center">ID tỉnh</th>
                                            <th class="uk-text-center">Mã Vùng</th>
                                            <th class="uk-text-center">Khu vực trả</th>
                                            <th class="uk-text-center">CPN</th>
                                            <th class="uk-text-center">VCN</th>
                                            <th class="uk-text-center">VTK</th>
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
                                </div>>
                            </td>
                            <td>
                                <a href="{{url('qtv/diem-gui-hang/edit/'.$diemguihang->id)}}" ><button class="btn btn-warning">Sửa</button></a>
                                <a href="{{url('qtv/diem-gui-hang/delete/'.$diemguihang->id)}}"  onclick="return confirm('Bạn chắc chắn muốn xóa ? ')"><button class="btn btn-danger">Xóa</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>


<script type="text/javascript">

</script>
@endsection
