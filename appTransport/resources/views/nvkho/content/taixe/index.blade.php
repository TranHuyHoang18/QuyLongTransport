@extends('nvkho.layouts.NewHomepageLayout')
@section('title')
    Danh sách Tài Xế
@endsection
@section('content')
    <div class="uk-card uk-card-default cardBox uk-margin">
        <div class="cardBox__header uk-card-header uk-background-mySin">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">DANH SÁCH TÀI XẾ</span>
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
                        <th class="uk-text-center" style="border-right: 1px dashed white">STT</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Họ và Tên</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Email</th>
                        <th class="uk-text-center">Đang vận chuyển</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0; ?>
                    @foreach($nhanviens as $nhanvien)
                        <?php  $i++; ?>
                        <tr>
                            <td class="uk-text-center">{{$i}}</td>
                            <td class="uk-text-left" style="padding-left: 20px">{{$nhanvien->name}}</td>
                            <td class="uk-text-left" style="padding-left: 20px">{{$nhanvien->email}}</td>
                            <td class="uk-text-center" style="border-right: none">
                                {{count($donhangs[$nhanvien->id]).' Đơn hàng'}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

