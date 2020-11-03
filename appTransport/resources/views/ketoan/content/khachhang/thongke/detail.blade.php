@extends('ketoan.layouts.NewHomepageLayout')
@section('title')
    Lịch sử đơn hàng khách hàng
@endsection
@section('head')
@endsection
@section('content')
    <div class="uk-grid-medium" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-card uk-card-default cardBox uk-margin">
                <div class="cardBox__header uk-card-header uk-background-mySin">
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                        <div>
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="cardBox__header__txt">THỐNG KÊ VẬN CHUYỂN CHI TIẾT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardBox__body uk-card-body">
                    <form method="post" action="{{url('ketoan/khach-hang/thong-ke/'.$khachle->id)}}">
                        @csrf
                        <div  class="uk-child-width-1-2@m uk-grid-match uk-grid-small" uk-grid>
                            <div>
                                <div class="cardBox__body__item1__txt">TỪ:</div>
                                <input type="date" name="from" required="" style="width: 80%; margin-right: 10%;" value="{{$from}}">
                            </div>
                            <div>
                                <div class="cardBox__body__item1__txt">ĐẾN:</div>
                                <input type="date" name="to" required="" style="width: 80%; margin-right: 10%;" value="{{$to}}">
                            </div>
                        </div>
                        <div class="uk-text-center" style="padding-top: 20px">
                            <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn" style="background:#FBB03B;width: 60%;margin-left: 10%;border-radius: 10px 10px 10px 10px;color: white">Thống kê</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-grid-medium" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-card uk-card-default cardBox uk-margin">
                <div class="cardBox__header uk-card-header uk-background-mySin">
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                        <div>
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="cardBox__header__txt">THỐNG KÊ VẬN CHUYỂN <span style="color: white;padding-left: 20px">{{$from}} -> {{$to}}</span></span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-inline" style="background: white;margin-top: 5px;border-radius: 5px 5px 5px 5px;border: 1px solid #959595;padding:10px 20px 10px 20px">
                               @if($khachle->ten_don_vi == "")
                                    {{$khachle->nguoi_dd}}
                               @else
                                    {{$khachle->ten_don_vi}}
                               @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardBox__body uk-card-body">
                    <div id="thongke" class="thongkevc" >
                        <div  class="uk-child-width-1-4@m uk-grid-match uk-grid-small" uk-grid>
                            <div>
                                <div class="cardBox__body__item1 uk-border-rounded order">
                                    <div class="cardBox__body__item1__txt">Tổng số đơn hàng</div>
                                    <div class="cardBox__body__item1__total">{{number_format($thongkeVC['tongsodonhang'])}}</div>
                                </div>
                            </div>
                            <div>
                                <div class="cardBox__body__item1 uk-border-rounded ship">
                                    <div class="cardBox__body__item1__txt">Tổng cước vận chuyển</div>
                                    <div class="cardBox__body__item1__total">{{number_format($thongkeVC['tongcuocvc']).'đ'}}</div>
                                </div>
                            </div>
                            <div>
                                <div class="cardBox__body__item1 uk-border-rounded pay">
                                    <div class="cardBox__body__item1__txt">Đã thanh toán</div>
                                    <div class="cardBox__body__item1__total">{{number_format($thongkeVC['dathanhtoan']).'đ'}}</div>
                                </div>
                            </div>
                            <div>
                                <div class="cardBox__body__item1 uk-border-rounded unpay">
                                    <div class="cardBox__body__item1__txt">Chưa thanh toán</div>
                                    <div class="cardBox__body__item1__total">{{number_format($thongkeVC['tongcuocvc'] -$thongkeVC['dathanhtoan'] ).'đ'}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-card uk-card-default cardBox uk-margin">
        <div class="cardBox__header uk-card-header uk-background-mySin">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">DANH SÁCH ĐƠN Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardBox__body uk-card-body uk-padding-remove">
            <div class="uk-overflow-auto">
                <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                    <thead >
                    <tr>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Mã</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Ngày</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Dịch vụ</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Mặt Hàng</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Nơi đi</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Nơi đến</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Khối lượng</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Đơn vị</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Giá Cước</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Tình trạng<br> vận chuyển</th>
                        <th class="uk-text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=0;
                    $n_donhang = count($donhangs);
                    ?>
                    @foreach($donhangs as $donhang)
                        <?php $i++; ?>
                        <tr id="{{1000+ $i}}">
                            <td>{{$donhang->madonhang}}</td>
                            <td>{{$donhang->created_at}}</td>
                            <td>{{$donhang->dichvu}}</td>
                            <?php $info_hanghoa = json_decode($donhang->info_hanghoa);?>
                            <td>{{$info_hanghoa->{'ten'} }}</td>
                            <?php
                            $info_vanchuyen = json_decode($donhang->info_vanchuyen);
                            ?>
                            <td>{{$info_vanchuyen->{'noidi'} }}</td>
                            <td>{{$info_vanchuyen->{'noiden'} }}</td>
                            <td>{{$info_hanghoa->{'trongluong'} }}</td>
                            <td>{{$info_hanghoa->{'donvi'} }}</td>
                            <td>{{number_format($info_vanchuyen->{'giacuoc'} ).'VNĐ'}}</td>
                            <td>
                                @if($donhang->status==0)
                                    {{'ĐTN'}}
                                @elseif($donhang->status==1)
                                    {{'ĐVC'}}
                                @else
                                    {{'ĐGH'}}
                                @endif
                            </td>
                            <td>
                                <button id="btn-detail-open-{{$i}}" onclick="openk({{$i}})" style="background: none; border: none;color:#FF8000 ">chi tiết</button>
                                <button id="btn-detail-close-{{$i}}" onclick="closek({{$i}})" style="background: none; border: none;color:#FF8000;display: none">Ẩn</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="uk-overflow-auto" style="padding: 2% 2% 2% 2%; padding-top:0px;width: 100%;background: #E8E8E8;margin-left: 0px">
                <?php $i=0;?>
                @foreach($donhangs as $donhang)
                    <?php $i++; ?>
                    <div id="{{$i}}" class="detail" style="margin-top: 10px;display: none;">
                        <div class="uk-child-width-1-3" uk-grid style="background: #ffffff; margin-left: 0px">
                            <div style="margin-top: 0px">
                                <div class="uk-text-center" style="padding-top: 5%;padding-bottom: 5%">
                                    <h4>Đã tiếp nhận đơn hàng</h4>
                                    @if($donhang->status>0)
                                        <hr style="width: 90%; height:2px;border: 2px solid #FFAA00;background: #FFAA00"/>
                                    @else
                                        <hr style="width: 90%; height:2px;border: 2px solid #cccccc;background: #cccccc"/>
                                    @endif
                                </div>
                            </div>
                            <div style="margin-top: 0px">
                                <div class="uk-text-center" style="padding-top: 5%;padding-bottom: 5%">
                                    <h4>Đang trên đường vận chuyển</h4>
                                    @if($donhang->status>2)
                                        <hr style="width: 90%; height:2px;border: 2px solid #FFAA00;background: #FFAA00"/>
                                    @else
                                        <hr style="width: 90%; height:2px;border: 2px solid #cccccc;background: #cccccc"/>
                                    @endif
                                </div>
                            </div>
                            <div style="margin-top: 0px">
                                <div class="uk-text-center" style="padding-top: 5%;padding-bottom: 5%">
                                    <h4> Đã giao hàng</h4>
                                    @if($donhang->status>3)
                                        <hr style="width: 90%; height:2px;border: 2px solid #FFAA00;background: #FFAA00"/>
                                    @else
                                        <hr style="width: 90%; height:2px;border: 2px solid #cccccc;background: #cccccc"/>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="" uk-grid style="margin-top: 1%;margin-left: 0px; padding-left: 0px">
                            <div class="uk-width-1-1@s uk-width-2-5@m" style="padding-left: 0px;margin-top: 1%;">
                                <div  uk-grid style="background: white; width:98%;margin-right:2%;margin-left: 0px; padding-top: 2%;padding-left: 10px">
                                    <div class="uk-width-2-5">
                                        <div class="uk-text-center uk-text-large" style="color:#707070; margin-top: 5px;font-size: large">
                                            Gửi từ
                                        </div>
                                        <div class="uk-text-center uk-text-bold" style="color:#707070;">
                                            {{$info_vanchuyen->{'noidi'} }}
                                        </div>
                                    </div>
                                    <div class="uk-width-1-5">
                                        <div class="uk-text-center">
                                            <i class="fa fa-paper-plane" aria-hidden="true" style="font-size: 30px"></i>
                                        </div>
                                    </div>
                                    <div class="uk-width-2-5">
                                        <div class="uk-text-center uk-text-large" style="color:#707070; margin-top: 5px;font-size: large">
                                            Gửi đến
                                        </div>
                                        <div class="uk-text-center uk-text-bold" style="color:#707070;">
                                            {{$info_vanchuyen->{'noiden'} }}
                                        </div>
                                    </div>
                                </div>
                                <div  style="background: white; width:98%;margin-right:2%;margin-left: 0px; padding-top: 2%;padding-left: 10px;margin-top: 2%;padding-bottom: 3%">
                                    <div class="uk-text-bold uk-text-left uk-text-large" style="color: #707070;font-weight:bold;padding-left: 3%">
                                        Thông tin đơn hàng
                                    </div>
                                    <?php  $info_vanchuyen = json_decode($donhang->info_vanchuyen);?>
                                    <div class="uk-text-left uk-text-large uk-child-width-1-2" uk-grid style="margin-top: 0px;color: #707070">
                                        <div style="margin-top: 10px">
                                            <div style="font-size: large">
                                                Mã vận đơn:
                                            </div>
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="font-size: large">
                                                {{$donhang->madonhang}}
                                            </div>
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="font-size: large">
                                                Loại dịch vụ:
                                            </div>
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="font-size: large">
                                                {{$donhang->dichvu}}
                                            </div>
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="font-size: large">
                                                Ngày tạo đơn:
                                            </div>
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="font-size: large">
                                                {{$donhang->created_at}}
                                            </div>
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="font-size: large">
                                                Ngày Giao dự kiến:
                                            </div>
                                        </div>
                                        <div style="margin-top: 10px">
                                            <div style="font-size: large">
                                                đang cập nhật
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div  style="background: white; width:98%;margin-right:2%;margin-left: 0px; padding-top: 2%;padding-left: 10px;margin-top: 2%;padding-bottom: 2%">
                                    @if($donhang->status<2)
                                        <a href="{{url('nhanvien/don-hang/edit_status/'.$donhang->id.'/3')}}" style="margin-right: 10px;margin-left: 10px">
                                            <button style="background-color:#FFAA00;color:#FFFFFF;padding:5px 5px 5px 5px;border: none;border-radius: 5px">
                                                {{'Đang vận chuyển'}}
                                            </button>
                                        </a>
                                    @endif
                                    @if($donhang->status<3)
                                        <a href="{{url('nhanvien/don-hang/edit_status/'.$donhang->id.'/4')}}" style="margin-right: 10px;margin-left: 10px">
                                            <button style="background-color:#00aeff;color:#FFFFFF;padding:5px 5px 5px 5px;border: none;border-radius: 5px">
                                                {{'Đã giao hàng'}}
                                            </button>
                                        </a>
                                    @endif
                                    <a href="{{url('nhanvien/don-hang/delete/'.$donhang->id)}}" style="margin-right: 10px;margin-left: 10px">
                                        <button style="background-color:#d00505;color:#FFFFFF;padding:5px 5px 5px 5px;border: none;border-radius: 5px">
                                            {{'Xóa đơn hàng'}}
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-5@m" style="background: white; margin-left: 0px; padding-bottom: 2%;margin-top: 1%;">
                                <?php
                                $trackings = json_decode($donhang->chitiet);
                                $n_tracking = $trackings[0];
                                ?>
                                <div class="uk-text-left" style="padding-left: 5%;padding-top: 2%">
                                    <button style="background-color:#FFAA00;color:#FFFFFF;padding:5px 5px 5px 5px;border: none;border-radius: 5px">
                                        {{$trackings[1]->{'date'} }}
                                    </button>
                                </div>
                                <div class="uk-text-left uk-text-large" style="padding-left: 8%;color:#707070;font-size: large">
                                    {{$trackings[1]->{'time'}.'   : '.$trackings[1]->{'content'}.'   ' }} <a href="{{url('nhanvien/don-hang/tracking/delete/'.$donhang->madonhang.'/1')}}" style="color:#FF6600;font-style: italic">Xóa bỏ</a>
                                </div>
                                @for($j=2;$j<=$n_tracking;$j++)
                                    @if($trackings[$j]->{'date'} == $trackings[$j-1]->{'date'})
                                        <div class="uk-text-left uk-text-large" style="padding-left: 8%;color:#707070;font-size: large">

                                            {{$trackings[$j]->{'time'}.'   : '.$trackings[$j]->{'content'}.'   ' }}<a href="{{url('nhanvien/don-hang/tracking/delete/'.$donhang->madonhang.'/'.$j)}}" style="color:#FF6600;font-style: italic">Xóa bỏ</a>
                                        </div>
                                    @else
                                        <div class="uk-text-left" style="padding-left: 5%;padding-top: 2%">
                                            <button style="background-color:#FFAA00;color:#FFFFFF;padding:5px 5px 5px 5px;border: none;border-radius: 5px">
                                                {{$trackings[$j]->{'date'} }}
                                            </button>
                                        </div>
                                        <div class="uk-text-left uk-text-large" style="padding-left: 8%;color:#707070;font-size: large">
                                            {{$trackings[$j]->{'time'}.'   : '.$trackings[$j]->{'content'}.'   ' }}<a href="{{url('nhanvien/don-hang/tracking/delete/'.$donhang->madonhang.'/'.$j)}}" style="color:#FF6600;font-style: italic">Xóa bỏ</a>
                                        </div>
                                    @endif
                                @endfor
                                <div class="uk-text-right" id="{{'tracking'.$donhang->madonhang}}" style="padding-right: 2%">
                                    <button onclick="openck({{$donhang->madonhang}})" style="background-color:#FFAA00;color:#FFFFFF;padding:5px 5px 5px 5px;border: none;border-radius: 5px">
                                        TRACKING
                                    </button>
                                    <a href="{{url('in-van-don/'.$donhang->madonhang)}}"><button style="padding: 5px 10px 5px 10px;background: #686868;color: white;text-align: center;border: none;border-radius: 5px 5px 5px 5px;">IN VẬN ĐƠN</button></a>
                                </div>
                                <div class="uk-text-left" id="{{'tracking1'.$donhang->madonhang}}" style="width: 100%;margin-top: 2%;display: none">
                                    <form action="{{url('nhanvien/don-hang/tracking/'.$donhang->madonhang)}}" method="post">
                                        @csrf
                                        <select name="tracking" style="float: left;width: 70%;margin-top: 10px;margin-left: 2%;border-radius: 10px 10px 10px 10px;padding: 10px 10px 10px 10px">
                                            <option value="Đơn hàng đã được giao cho bên vận chuyển">Đơn hàng đã được giao cho bên vận chuyển</option>
                                            <option value="Đơn hàng đã về kho trung tâm, chờ vận chuyển">Đơn hàng đã về kho trung tâm, chờ vận chuyển</option>
                                            <option value="Đơn hàng đang trên đường vận chuyển">Đơn hàng đang trên đường vận chuyển</option>
                                            <option value="Đã nhập hàng tại bưu cục, chờ giao hàng">Đã nhập hàng tại bưu cục, chờ giao hàng</option>
                                            <option value="Đơn hàng đang được giao đến người nhận">Đơn hàng đang được giao đến người nhận</option>
                                            <option value="Đơn hàng đã được giao thành công">Đơn hàng đã được giao thành công</option>
                                        </select>
                                        <button type="submit" style="padding: 5px 10px 5px 10px;background: #FFA200;color: white;text-align: center;border: none;border-radius: 5px 5px 5px 5px;float: right;margin-top: 13px;margin-right: 2%">TRACKING</button>
                                    </form>
                                    <script type="text/javascript">
                                        function openck(id)
                                        {
                                            document.getElementById('tracking'+id).style.display="none";
                                            document.getElementById('tracking1'+id).style.display="block";
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="uk-overflow-auto">
                <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                    <thead style="display: none">
                    <tr>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Mã</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Ngày</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Dịch vụ</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Mặt Hàng</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Nơi đi</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Nơi đến</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Khối lượng</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Đơn vị</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Giá Cước</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white" >Tình trạng<br> vận chuyển</th>
                        <th class="uk-text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=0;
                    $n_donhang = count($donhangs);
                    ?>
                    @foreach($donhangs as $donhang)
                        <?php $i++; ?>
                        <tr id="{{2000+ $i}}">
                            <td>{{$donhang->madonhang}}</td>
                            <td>{{$donhang->created_at}}</td>
                            <td>{{$donhang->dichvu}}</td>
                            <?php $info_hanghoa = json_decode($donhang->info_hanghoa);?>
                            <td>{{$info_hanghoa->{'ten'} }}</td>
                            <?php
                            $info_vanchuyen = json_decode($donhang->info_vanchuyen);
                            ?>
                            <td>{{$info_vanchuyen->{'noidi'} }}</td>
                            <td>{{$info_vanchuyen->{'noiden'} }}</td>
                            <td>{{$info_hanghoa->{'trongluong'} }}</td>
                            <td>{{$info_hanghoa->{'donvi'} }}</td>
                            <td>{{number_format($info_vanchuyen->{'giacuoc'} ).'VNĐ'}}</td>
                            <td>
                                @if($donhang->status==0)
                                    {{'ĐTN'}}
                                @elseif($donhang->status==1)
                                    {{'ĐVC'}}
                                @else
                                    {{'ĐGH'}}
                                @endif
                            </td>
                            <td>
                                <button onclick="openk({{$i}})" style="background: none; border: none;color:#FF8000 ">chi tiết</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let n = <?php echo($n_donhang); ?>;
        for (let j=1;j<=n;j++)
        {
            document.getElementById(2000+j).style.display="none";
        }
        function openk(id)
        {

            x= document.getElementsByClassName('detail');
            for(let j=0;j<x.length;j++)
            {
                x[j].style.display="none";
            }
            for (let j=1;j<=n;j++)
            {
                document.getElementById(1000+j).style.display="table-row";
                document.getElementById(2000+j).style.display="none";
            }
            for (let j=id+1;j<=n;j++)
            {
                document.getElementById(1000+j).style.display="none";
                document.getElementById(2000+j).style.display="table-row";
            }
            document.getElementById(id).style.display="inline";
            document.getElementById('btn-detail-open-'+id).style.display="none";
            document.getElementById('btn-detail-close-'+id).style.display="inline";
        }
        function closek(id)
        {
            document.getElementById('btn-detail-open-'+id).style.display="inline";
            document.getElementById('btn-detail-close-'+id).style.display="none";
            x= document.getElementsByClassName('detail');
            for(let j=0;j<x.length;j++)
            {
                x[j].style.display="none";
            }
            for (let j=1;j<=n;j++)
            {
                document.getElementById(1000+j).style.display="table-row";
                document.getElementById(2000+j).style.display="none";
            }
        }
    </script>
@endsection

