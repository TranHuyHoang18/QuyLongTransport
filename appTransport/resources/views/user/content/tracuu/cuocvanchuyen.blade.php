@extends('user.layouts.NewHomePageLayout')
@section('title')
    Trang quản trị Giá cước của các điểm gửi hàng
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
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">Bảng cước các điểm gửi hàng </span>
                        </div>
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
                        <th class="uk-text-center">Chi tiết bảng giá cước</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0;?>
                    @foreach($cuocs as $cuoc)
                        <?php $i++; ?>
                        <tr>
                            <td>{{$i}}</td>
                            <td class="uk-text-left">{{$cuoc->diemguihang}}</td>
                            <td class="uk-text-left">
                                <div>
                                    <div class="uk-text-left uk-text-lange" style="font-size: large">
                                        Chuyển phát nhanh
                                    </div>
                                    <div style="height: 250px; overflow-y: scroll">
                                        <?php
                                        $cpns = json_decode($cuoc->CPN);
                                        ?>
                                        <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                                            <thead>
                                            <tr >
                                                <th class="uk-text-center uk-text-large" style="color: white">Khối lượng</th>
                                                <th class="uk-text-center" style="color: white">A</th>
                                                <th class="uk-text-center" style="color: white">B</th>
                                                <th class="uk-text-center" style="color: white">C</th>
                                                <th class="uk-text-center" style="color: white">D</th>
                                                <th class="uk-text-center" style="color: white">E</th>
                                                <th class="uk-text-center" style="color: white">F</th>
                                                <th class="uk-text-center" style="color: white">G</th>
                                                <th class="uk-text-center" style="color: white">H</th>
                                                <th class="uk-text-center" style="color: white">I</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($cpns as $cpn)
                                                <tr>
                                                    <th>{{$cpn->{'khoiluong'} }}</th>
                                                    <th>{{number_format($cpn->{'A'}) }}</th>
                                                    <th>{{number_format($cpn->{'B'}) }}</th>
                                                    <th>{{number_format($cpn->{'C'}) }}</th>
                                                    <th>{{number_format($cpn->{'D'}) }}</th>
                                                    <th>{{number_format($cpn->{'E'}) }}</th>
                                                    <th>{{number_format($cpn->{'F'}) }}</th>
                                                    <th>{{number_format($cpn->{'G'}) }}</th>
                                                    <th>{{number_format($cpn->{'H'}) }}</th>
                                                    <th>{{number_format($cpn->{'I'}) }}</th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-left uk-text-lange" style="font-size: large">
                                        Vận chuyển tiết kiệm
                                    </div>
                                    <div style="height: 250px; overflow-y: scroll">
                                        <?php
                                        $vtks = json_decode($cuoc->VTK);
                                        ?>
                                        <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                                            <thead>
                                            <tr>
                                                <th class="uk-text-center"  style="color: white">Khối lượng</th>
                                                <th class="uk-text-center" style="color: white">A</th>
                                                <th class="uk-text-center" style="color: white">B</th>
                                                <th class="uk-text-center" style="color: white">C</th>
                                                <th class="uk-text-center" style="color: white">D</th>
                                                <th class="uk-text-center" style="color: white">E</th>
                                                <th class="uk-text-center" style="color: white">F</th>
                                                <th class="uk-text-center" style="color: white">G</th>
                                                <th class="uk-text-center" style="color: white">H</th>
                                                <th class="uk-text-center" style="color: white">I</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($vtks as $vtk)
                                                <tr>
                                                    <th>{{$vtk->{'khoiluong'} }}</th>
                                                    <th>{{number_format($vtk->{'A'}) }}</th>
                                                    <th>{{number_format($vtk->{'B'}) }}</th>
                                                    <th>{{number_format($vtk->{'C'}) }}</th>
                                                    <th>{{number_format($vtk->{'D'}) }}</th>
                                                    <th>{{number_format($vtk->{'E'}) }}</th>
                                                    <th>{{number_format($vtk->{'F'}) }}</th>
                                                    <th>{{number_format($vtk->{'G'}) }}</th>
                                                    <th>{{number_format($vtk->{'H'}) }}</th>
                                                    <th>{{number_format($vtk->{'I'}) }}</th>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-text-left uk-text-lange" style="font-size: large">
                                        Vận chuyển nhanh
                                    </div>
                                    <div style="height: 250px; overflow-y: scroll">
                                        <?php
                                    $vcns = json_decode($cuoc->VCN);
                                    ?>
                                        <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                                        <thead>
                                        <tr>
                                            <th class="uk-text-center" style="color: white">Khối lượng</th>
                                            <th class="uk-text-center" style="color: white">A</th>
                                            <th class="uk-text-center" style="color: white">B</th>
                                            <th class="uk-text-center" style="color: white">C</th>
                                            <th class="uk-text-center" style="color: white">D</th>
                                            <th class="uk-text-center" style="color: white">E</th>
                                            <th class="uk-text-center" style="color: white">F</th>
                                            <th class="uk-text-center" style="color: white">G</th>
                                            <th class="uk-text-center" style="color: white">H</th>
                                            <th class="uk-text-center" style="color: white">I</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($vcns as $vcn)
                                            <tr>
                                                <th>{{$vcn->{'khoiluong'} }}</th>
                                                <th>{{number_format($vcn->{'A'}) }}</th>
                                                <th>{{number_format($vcn->{'B'}) }}</th>
                                                <th>{{number_format($vcn->{'C'}) }}</th>
                                                <th>{{number_format($vcn->{'D'}) }}</th>
                                                <th>{{number_format($vcn->{'E'}) }}</th>
                                                <th>{{number_format($vcn->{'F'}) }}</th>
                                                <th>{{number_format($vcn->{'G'}) }}</th>
                                                <th>{{number_format($vcn->{'H'}) }}</th>
                                                <th>{{number_format($vcn->{'I'}) }}</th>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
