@extends('backend.layouts.homepageLayout')
@section('title')
    Trang quản trị Giá cước của các điểm gửi hàng
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
        <a href="{{url('admin/cuoc-van-chuyen/add')}}">
            <button class="btn btn-success" style="margin-bottom: 10px;margin-left: 20px">Thêm gói cước mới</button>
        </a>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Điểm gửi hàng</th>
                <th scope="col">Bảng giá cước</th>
                <th scope="col" >Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>
            @foreach($cuocs as $cuoc)
                <th>{{$i}}</th>
                <th>{{$cuoc->diemguihang}}</th>
                <th>
                    <div class="row" style="margin-top: 3%;margin-left: 1%">
                        <button id="10" class="btn btn-success" onclick="openk('1')" style="float: right"><h5>Chuyển phát nhanh - CPN</h5></button>
                        <button id="100" class="btn btn-success" onclick="closek('1')" style="float: right;display: none"><h5>Chuyển phát nhanh - CPN</h5></button>
                        <?php
                        $cpns = json_decode($cuoc->CPN);
                        ?>
                        <table id="1" style="display: none;margin-left: 1%">
                            <thead>
                            <tr>
                                <th>Khối lượng</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                <th>E</th>
                                <th>F</th>
                                <th>G</th>
                                <th>H</th>
                                <th>I</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cpns as $cpn)
                                <tr>
                                    <th>{{$cpn->{'khoiluong'}.' kg'}}</th>
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
                    <div class="row" style="margin-top: 3%;margin-left: 1%">
                        <button id="20" class="btn btn-success" onclick="openk('2')" style="float: right"><h5>Vận chuyển nhanh - VCN</h5></button>
                        <button id="200" class="btn btn-success" onclick="closek('2')" style="float: right;display: none"><h5>Vận chuyển nhanh -VCN</h5></button>
                        <?php
                        $vcns = json_decode($cuoc->VCN);
                        ?>
                        <table id="2" style="display: none;margin-left: 1%">
                            <thead>
                            <tr>
                                <th>Khối lượng</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                <th>E</th>
                                <th>F</th>
                                <th>G</th>
                                <th>H</th>
                                <th>I</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vcns as $vcn)
                                <tr>
                                    <th>{{$vcn->{'khoiluong'}.' kg'}}</th>
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
                    <div class="row" style="margin-top: 3% ;margin-left: 1%">
                        <button id="30" class="btn btn-success" onclick="openk('3')" style="float: right"><h5>Vận chuyển tiết kiệm _ VTK</h5></button>
                        <button id="300" class="btn btn-success" onclick="closek('3')" style="float: right;display: none"><h5>Vận chuyển tiết kiệm _ VTK</h5></button>
                    <?php
                        $vtks = json_decode($cuoc->VTK);
                        ?>
                        <table id="3" style="display: none;margin-left: 1%">
                            <thead>
                            <tr>
                                <th>Khối lượng</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                <th>E</th>
                                <th>F</th>
                                <th>G</th>
                                <th>H</th>
                                <th>I</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vtks as $vtk)
                                <tr>
                                    <th>{{$vtk->{'khoiluong'}.' kg'}}</th>
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
                </th>
                <th>

                </th
                @endforeach
                </tbody>
            </table>

    </div>
<script type="text/javascript">
    function openk(id)
    {
        document.getElementById(id).style="display:block;margin-left: 1%";
        document.getElementById(id*10).style="display:none;float:right";
        document.getElementById(id*100).style="display:block;float:right";
    }
    function closek(id)
    {
        document.getElementById(id).style="display:none";
        document.getElementById(id*10).style="display:block;float:right";
        document.getElementById(id*100).style="display:none;float:right";
    }
</script>
@endsection
