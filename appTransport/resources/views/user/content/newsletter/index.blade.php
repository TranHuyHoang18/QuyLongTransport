@extends('user.layouts.NewHomePageLayout')
@section('title')
    Trang quản trị Newsletter
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
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">DANH SÁCH khách đăng kí nhận tin</span>
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
                        <th class="uk-text-center">Ngày đăng kí</th>
                        <th class="uk-text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0; ?>
                    @foreach($newsletters as $newsletter)
                        <?php  $i++; ?>
                        <tr>
                            <td class="uk-text-center">{{$i}}</td>
                            <td>{{$newsletter->email}}</td>
                            <td >{{$newsletter->created_at}}</td>
                            <td class="uk-text-center" style="border-right: none">
                                <a href="{{url('nhanvien/trung-tam-ho-tro/newsletter/delete/'.$newsletter->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa ? ')"><button class="btn btn-danger">Xóa</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$newsletters->links()}}
            </div>
        </div>
    </div>
@endsection
