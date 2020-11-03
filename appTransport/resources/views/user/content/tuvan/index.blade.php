@extends('user.layouts.NewHomePageLayout')
@section('title')
    Tổng đài tư vấn
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
    <div class="uk-card uk-card-default cardBox uk-margin">
        <div class="cardBox__header uk-card-header uk-background-mySin">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">DANH SÁCH khách cần tư vấn</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardBox__body uk-card-body uk-padding-remove">
            <div class="uk-overflow-auto">
                <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                    <thead>
                    <tr>
                        <th class="uk-text-center">STT</th>
                        <th class="uk-text-center">Email</th>
                        <th class="uk-text-center">SĐT</th>
                        <th class="uk-text-center">Địa chỉ gửi</th>
                        <th class="uk-text-center">Địa chỉ nhận</th>
                        <th class="uk-text-center">Ngày tạo</th>
                        <th class="uk-text-center">Trạng thái</th>
                        <th class="uk-text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0; ?>
                    @foreach($trans_sps as $trans_sp)
                        <?php  $i++; ?>
                        <tr>
                            <td class="uk-text-center">{{$i}}</td>
                            <td>{{$trans_sp->email}}</td>
                            <td>{{$trans_sp->phone}}</td>
                            <td>{{$trans_sp->address_s}}</td>
                            <td>{{$trans_sp->address_r}}</td>
                            <td class="uk-text-center">{{$trans_sp->created_at}}</td>
                            <td class="uk-text-left">
                                @if($trans_sp->status === 0)
                                    <button class="btn btn-warning" >Chưa trả lời</button>
                                @elseif($trans_sp->status === 1)
                                    <button class="btn btn-success">Đã trả lời</button>
                                @endif
                            </td>
                            <td class="uk-text-left" style="border-right: none">
                                <a href="{{url('nhanvien/trung-tam-ho-tro/tu-van-khach-hang/detail/'.$trans_sp->id)}}" ><button class="btn btn-success">Chi tiết</button></a>
                                @if($trans_sp->status === 0)
                                    <a href="{{url('/nhanvien/trung-tam-ho-tro/tu-van-khach-hang/answered/'.$trans_sp->id)}}"><button class="btn btn-warning">Đã trả lời</button></a>
                                @endif
                                <a href="{{url('nhanvien/trung-tam-ho-tro/tu-van-khach-hang/hide/'.$trans_sp->id)}}" onclick="return confirm('Bạn chắc chắn muốn Ẩn ? ')"><button class="btn btn-danger">Ẩn</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$trans_sps->links()}}
            </div>
        </div>
    </div>
@endsection
