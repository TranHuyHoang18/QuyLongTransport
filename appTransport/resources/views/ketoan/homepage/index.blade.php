@extends('ketoan.layouts.NewHomepageLayout')
@section('title')
    Trang dành cho Kế toán
@endsection
@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {

            var data = new google.visualization.DataTable();
            data.addColumn('timeofday', 'Time of Day');
            data.addColumn('number', 'Motivation Level');

            data.addRows([
                [{v: [8, 0, 0], f: '8 am'}, 1],
                [{v: [9, 0, 0], f: '9 am'}, 2],
                [{v: [10, 0, 0], f:'10 am'}, 3],
                [{v: [11, 0, 0], f: '11 am'}, 4],
                [{v: [12, 0, 0], f: '12 pm'}, 5],
                [{v: [13, 0, 0], f: '1 pm'}, 6],
                [{v: [14, 0, 0], f: '2 pm'}, 7],
                [{v: [15, 0, 0], f: '3 pm'}, 8],
                [{v: [16, 0, 0], f: '4 pm'}, 9],
                [{v: [17, 0, 0], f: '5 pm'}, 10],
            ]);

            var options = {
                title: 'Motivation Level Throughout the Day',
                hAxis: {
                    title: 'Time of Day',
                    format: 'h:mm a',
                    viewWindow: {
                        min: [7, 30, 0],
                        max: [17, 30, 0]
                    }
                },
                vAxis: {
                    title: 'Rating (scale of 1-10)'
                }
            };

            var chart = new google.visualization.ColumnChart(
                document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
@endsection
@section('content')
    <div class="uk-grid-medium" uk-grid>
        <div class="uk-width-expand">
            <div class="uk-card uk-card-default cardBox uk-margin">
                <div class="cardBox__header uk-card-header uk-background-mySin">
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                        <div>
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img src="{{asset('quanly/images/iconDonhang.png')}}" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <span class="cardBox__header__txt">TỔNG ĐƠN HÀNG THÁNG 06/2020</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: calendar"></span>
                                <input class="cardBox__header__input uk-input uk-form-width-small uk-form-small" type="date">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardBox__body uk-card-body">
                    <div id="counter" class="uk-child-width-1-3 uk-child-width-auto@s" uk-grid>
                        <div>
                            <div class="uk-text-center chart__item total_cart">
                                <div class="chart__item__txt">Tổng đơn hàng</div>
                                <div class="chart__item__number counter-value" data-count="270">270</div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-text-center chart__item inprogress">
                                <div class="chart__item__txt">Đang vận chuyển</div>
                                <div class="chart__item__number counter-value" data-count="70">70</div>
                            </div>
                        </div>
                        <div>
                            <div class="uk-text-center chart__item success_ship">
                                <div class="chart__item__txt">Giao thành công</div>
                                <div class="chart__item__number counter-value" data-count="200">200</div>
                            </div>
                        </div>
                    </div>
                    <div id="chart_div"></div>
                </div>
            </div>
            <div class="uk-card uk-card-default cardBox uk-margin">
                <div class="cardBox__header uk-card-header uk-background-mySin">
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                        <div>
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="cardBox__header__txt">THỐNG KÊ VẬN CHUYỂN</span>
                                </div>
                            </div>
                        </div>
                        <?php
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $time = time();
                        $date = getdate($time);
                        ?>
                        <div>
                            <div class="uk-inline" style="background: white;margin-top: 5px;border-radius: 5px 5px 5px 5px;border: 1px solid #959595;padding:5px 5px 5px 5px">
                                <i class="fa fa-calendar" aria-hidden="true" style="font-size: 20px;margin-left: 10px;margin-top: 5px"></i>
                                <select name="time" onchange="VCreset(this)" style="border: none;width: 75px;margin-top: 5px">
                                    @for($i=1;$i<=$date['mon'];$i++)
                                        <option value="thongke_{{$i}}">{{$i.'/'.$date['year']}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardBox__body uk-card-body">
                    @for($i=1;$i<=$date['mon'];$i++)
                        <div id="thongke_{{$i}}" class="thongkevc" style="display: none">
                            <div  class="uk-child-width-1-4@m uk-grid-match uk-grid-small" uk-grid>
                            <div>
                                <div class="cardBox__body__item1 uk-border-rounded order">
                                    <div class="cardBox__body__item1__txt">Tổng số đơn hàng</div>
                                    <div class="cardBox__body__item1__total">{{number_format($thongkevc[$i]['tongsodonhang'])}}</div>
                                </div>
                            </div>
                            <div>
                                <div class="cardBox__body__item1 uk-border-rounded ship">
                                    <div class="cardBox__body__item1__txt">Tổng cước vận chuyển</div>
                                    <div class="cardBox__body__item1__total">{{number_format($thongkevc[$i]['tongcuocvc']).'đ'}}</div>
                                </div>
                            </div>
                            <div>
                                <div class="cardBox__body__item1 uk-border-rounded pay">
                                    <div class="cardBox__body__item1__txt">Đã thanh toán</div>
                                    <div class="cardBox__body__item1__total">{{number_format($thongkevc[$i]['dathanhtoan']).'đ'}}</div>
                                </div>
                            </div>
                            <div>
                                <div class="cardBox__body__item1 uk-border-rounded unpay">
                                    <div class="cardBox__body__item1__txt">Chưa thanh toán</div>
                                    <div class="cardBox__body__item1__total">{{number_format($thongkevc[$i]['tongcuocvc'] -$thongkevc[$i]['dathanhtoan'] ).'đ'}}</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endfor
                        <script type="text/javascript">

                            function VCreset(obj)
                            {
                                let x= document.getElementsByClassName("thongkevc");
                                console.log(obj.value);
                                for(let j=0; j<x.length;j++)
                                {
                                    x[j].style.display="none";
                                }
                                document.getElementById(obj.value).style.display="inline";
                            }
                            document.getElementById('thongke_1').style.display="inline";
                        </script>
                </div>
            </div>
            <div class="uk-card uk-card-default cardBox uk-margin">
                <div class="cardBox__header uk-card-header uk-background-mySin">
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                        <div>
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="cardBox__header__txt">DANH SÁCH ĐƠN HÀNG</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="{{url('ketoan/don-hang/')}}" class="uk-link-reset cardBox__header__link">Xem tất cả</a>
                        </div>
                    </div>
                </div>
                <div class="cardBox__body uk-card-body uk-padding-remove">
                    <div class="uk-overflow-auto">
                        <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Mã <br>đơn hàng</th>
                                <th class="uk-text-center">Ngày <br>tiếp nhận</th>
                                <th class="uk-text-center">Mặt hàng</th>
                                <th class="uk-text-center">Gửi từ</th>
                                <th class="uk-text-center">Gửi đến</th>
                                <th class="uk-text-center">Tình trạng<br> vận chuyển</th>
                                <th class="uk-text-center">Xem chi tiết</th>
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
                                    <?php $info_hanghoa = json_decode($donhang->info_hanghoa);?>
                                    <td>{{$info_hanghoa->{'ten'} }}</td>
                                    <?php
                                    $info_vanchuyen = json_decode($donhang->info_vanchuyen);
                                    ?>
                                    <td>{{$info_vanchuyen->{'noidi'} }}</td>
                                    <td>{{$info_vanchuyen->{'noiden'} }}</td>
                                    <td>
                                        @if($donhang->status==0)
                                            {{'Đã tiếp nhận'}}
                                        @elseif($donhang->status==1)
                                            {{'Đang vận chuyển'}}
                                        @else
                                            {{'Đã giao hàng'}}
                                        @endif
                                    </td>
                                    <td class="uk-text-center">
                                        <button id="btn-detail-open-{{$i}}" onclick="openk({{$i}})" style="background: none; border: none;color:#FF8000 ">chi tiết</button>
                                        <button id="btn-detail-close-{{$i}}" onclick="closek({{$i}})" style="background: none; border: none;color:#FF8000;display: none">Ẩn</button><br>
                                        <a href="{{url('/ketoan/don-hang/edit/'.$donhang->madonhang)}}"><buttton style="background: none; border: none;color:#FF8000;">Sửa</buttton></a>
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
                                        <div class="uk-text-center" style="padding-top: 5%;padding-bottom: 5%" uk-grid>
                                            <div class="uk-width-1-1@s uk-text-bold uk-text-left uk-text-large" style="color: #707070;font-weight:bold;font-size: 20px">
                                                Đã tiếp nhận đơn hàng
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 0px">
                                        <div class="uk-text-center" style="padding-top: 5%;padding-bottom: 5%" uk-grid>
                                            <div class="uk-width-1-1@s uk-text-bold uk-text-center uk-text-large" style="color: #707070;font-weight:bold;font-size: 20px">
                                                Đang trên đường vận chuyển
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 0px">
                                        <div class="uk-text-center" style="padding-top: 5%;padding-bottom: 5%" uk-grid>
                                            <div class="uk-width-1-1@s uk-text-bold uk-text-large uk-text-right" style="color: #707070;font-weight:bold;margin-right: 5%;font-size: 20px">
                                                Đã giao hàng
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-child-width-1-3" uk-grid style="background: #ffffff; margin-left: 0px;margin-top: 0px">
                                    <div style="margin-top: 0px">
                                        <div class="uk-text-center" style="padding-bottom: 5%" uk-grid>
                                            <div class="uk-width-1-1@s  uk-text-center" style="padding-top:5px;margin-top: 0px">

                                                @if($donhang->status>0)
                                                    <i class="fa fa-circle" style="font-size: 18px;color: #FFAA00; position: absolute;margin-top: 13px" aria-hidden="true"></i>
                                                    <hr style="width: 95%; height:2px;border: 2px solid #FFAA00;background: #FFAA00;position: relative;"/>
                                                @else
                                                    <i class="fa fa-circle" style="font-size: 18px;color: #FFAA00;position: absolute;margin-top: 13px" aria-hidden="true"></i>
                                                    <hr style="width: 100%; height:2px;border: 2px solid #cccccc;background:#cccccc;position: relative;"/>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 0px">
                                        <div class="uk-text-center" style="padding-bottom: 5%" uk-grid>
                                            <div class="uk-width-1-1@s  uk-text-center" style="padding-top:5px;margin-top: 0px">
                                                @if($donhang->status>2)
                                                    <i class="fa fa-circle" style="font-size: 18px;color: #FFAA00;position: absolute;margin-top: 13px" aria-hidden="true"></i>
                                                    <hr style="width: 100%; height:2px;border: 2px solid #FFAA00;background: #FFAA00;position: relative;"/>
                                                @else
                                                    <i class="fa fa-circle" style="font-size: 18px;color: #FFAA00;position: absolute;margin-top: 13px" aria-hidden="true"></i>
                                                    <hr style="width: 100%; height:2px;border: 2px solid #cccccc;background:#cccccc;position: relative;"/>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 0px">
                                        <div class="uk-text-center" style="padding-bottom: 5%" uk-grid>
                                            <div class="uk-width-1-1@s  uk-text-center" style="padding-top:5px;margin-top: 0px">
                                                @if($donhang->status>3)
                                                    <i class="fa fa-circle" style="font-size: 18px;color: #FFAA00;position: absolute;margin-top: 13px" aria-hidden="true"></i>
                                                    <hr style="width: 95%; height:2px;border: 2px solid #FFAA00;background: #FFAA00;position: relative;"/>
                                                @else
                                                    <i class="fa fa-circle" style="font-size: 18px;color: #FFAA00;position: absolute;margin-top: 13px" aria-hidden="true"></i>
                                                    <hr style="width: 100%; height:2px;border: 2px solid #cccccc;background:#cccccc;position: relative;"/>
                                                @endif
                                            </div>
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
                                <th>Mã đơn hàng</th>
                                <th>Ngày tiếp nhận</th>
                                <th>Mặt hàng</th>
                                <th>Gửi từ</th>
                                <th>Gửi đến</th>
                                <th>Tình trạng vận chuyển</th>
                                <th>Xem chi tiết</th>
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
                                    <?php $info_hanghoa = json_decode($donhang->info_hanghoa);?>
                                    <td>{{$info_hanghoa->{'ten'} }}</td>
                                    <?php
                                    $info_vanchuyen = json_decode($donhang->info_vanchuyen);
                                    ?>
                                    <td>{{$info_vanchuyen->{'noidi'} }}</td>
                                    <td>{{$info_vanchuyen->{'noiden'} }}</td>
                                    <td>
                                        @if($donhang->status==0)
                                            {{'Đã tiếp nhận'}}
                                        @elseif($donhang->status==1)
                                            {{'Đang vận chuyển'}}
                                        @else
                                            {{'Đã giao hàng'}}
                                        @endif
                                    </td>
                                    <td>
                                        <button id="btn-detail-open-{{$i}}" onclick="openk({{$i}})" style="background: none; border: none;color:#FF8000 ">chi tiết</button>
                                        <button id="btn-detail-close-{{$i}}" onclick="closek({{$i}})" style="background: none; border: none;color:#FF8000;display: none">Ẩn</button>
                                        <a href="{{url('/ketoan/don-hang/edit/'.$donhang->madonhang)}}"><buttton style="background: none; border: none;color:#FF8000;">Sửa</buttton></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
                </div>
            </div>
        </div>
        <div class="uk-width-1-3@l">
            <div class="uk-card uk-card-default cardBox uk-margin">
                <div class="cardBox__header uk-card-header uk-background-mySin">
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="cardBox__header__txt">TUYẾN ĐƯỜNG VẬN CHUYỂN NHIỀU</span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-auto">
                            <?php
                            date_default_timezone_set('Asia/Ho_Chi_Minh');
                            $time = time();
                            $date = getdate($time);
                            ?>
                            <div class="uk-inline" style="background: white;margin-top: 5px;border-radius: 5px 5px 5px 5px;border: 1px solid #959595;padding:5px 5px 5px 5px">
                                <i class="fa fa-calendar" aria-hidden="true" style="font-size: 20px;margin-left: 10px;margin-top: 5px"></i>
                                <select name="time" onchange="TDreset(this)" style="border: none;width: 75px;margin-top: 5px">
                                    @for($i=1;$i<$date['mon'];$i++)
                                        <option value="detail_tuyen_duong_{{$i}}">{{$i.'/'.$date['year']}}</option>
                                    @endfor
                                        <option value="detail_tuyen_duong_{{$date['mon']}}" selected>{{$date['mon'].'/'.$date['year']}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                @for($i=1;$i<=$date['mon'];$i++)
                    <?php
                    $chitiet = json_decode($thongke[$i]);
                    ?>

                    <div class="thongke_tuyenduong" id="detail_tuyen_duong_{{$i}}" style="display: none">
                        <div class="uk-overflow-hidden uk-padding-remove">
                            <div id="piechart{{$i}}" class="chart__pie" style=""></div>
                        </div>

                        <script type="text/javascript">
                            // Load google charts
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            // Draw the chart and set the chart values
                            function drawChart() {
                                var data = google.visualization.arrayToDataTable(
                                    <?php echo $charts[$i];?>
                                );
                                var options = {
                                    title: 'Hiệu suất sử dụng tuyến đường',
                                    slices: {
                                        0: { color: '#ce6700' },
                                        1: { color: '#a85617' },
                                        2: { color: '#ff8000' },
                                        3: { color: '#ff9d04' },
                                        4: { color: '#fbb03b' },
                                        5: { color: '#f3c377' },
                                        6: { color: '#eadeca' },
                                        7: { color: '#f5f0e9' },
                                        8: { color: '#aea08c' },
                                    }
                                };
                                var chart = new google.visualization.PieChart(document.getElementById('piechart{{$i}}'));
                                chart.draw(data, options);
                            }
                        </script>

                        <div class="cardBox__body uk-card-body uk-padding-small">
                            <table class="uk-table chart__table uk-table-divider uk-table-small uk-table-hover uk-margin-remove">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên tỉnh</th>
                                <th>Số đơn</th>
                                <th>Tỷ lệ %</th>
                            </tr>
                            </thead>
                            <tbody>
                                @for($j=1;$j<=$chitiet[0];$j++)
                                <tr>
                                    <?php $detail = json_decode($chitiet[$j]);?>
                                    <td>{{$j}}</td>
                                    <td>{{$detail->{"name_tinh_di"} }}</td>
                                    <td>{{$detail->{"dem_tinh_di"} }}</td>
                                    <td>{{floor(100*($detail->{"dem_tinh_di"}/$detail->{"tongdon"})) }} %</td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                            <div class="uk-flex-between uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="chart__txt1">*Dữ liệu được thống kê vào tháng 06-2020</div>
                                </div>
                                <div class="uk-width-auto">
                                    <a href="" class="cardBox__body__table__link">Xem tất cả</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
                <script type="text/javascript">
                    function TDreset(obj)
                    {
                        let x= document.getElementsByClassName("thongke_tuyenduong");
                        console.log(obj.value);
                        for(let j=0; j<x.length;j++)
                        {
                            x[j].style.display="none";
                        }
                        document.getElementById(obj.value).style.display="inline";

                    }
                    document.getElementById("detail_tuyen_duong_"+<?php echo $date["mon"]; ?>).style.display="inline";
                </script>
            </div>
            <div class="uk-margin">
                <img src="{{asset('quanly/images/banner-download-app.png')}}" alt="">
            </div>
        </div>
    </div>
















{{--    <div class="row" style="width: 100%;margin-top: 5%;padding-bottom: 5%">
        <div class="col-sm-8">
            <form action="{{url('ketoan/thong-ke')}}" method="post" style="background: none">
                @csrf
                <div class="row" style="width: 98%;margin-right: 2%;border-radius: 10px 10px 0px 0px;background: #FBB03B;height: 50px">
                    <div class="col-sm-8">
                        <h3 style="color:#656565;margin-top: 8px">THỐNG KÊ VẬN CHUYỂN</h3>
                    </div>
                    <div class="col-sm-4">
                        <?php
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $time = time();
                        $date = getdate($time);
                        ?>

                        <div class="row" style="background:white;height: 40px;margin-top: 5px;border-radius: 5px 5px 5px 5px;border: 1px solid #959595;width: 150px;float: right;margin-right: 20px" >
                            <i class="fa fa-calendar" aria-hidden="true" style="font-size: 35px;margin-left: 10px"></i>
                           <select name="month" style="border: none;width: 100px">
                               @for($i=1;$i<=$date['mon'];$i++)
                                    <option value="{{$i}}">{{$i.'/'.$date['year']}}</option>
                               @endfor
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row" style="background: white;border-radius: 0px 0px 10px 10px;margin-top: 0px;width: 98%;margin-right: 2%;padding-top: 2%;padding-bottom: 2%">
                    <select name="id_khachhang" style="float:left;margin-left: 5%; height: 30px;background:#F5F5F5; min-width: 60%;">
                        @foreach($khachhangs as $khachhang)
                            <option value="{{$khachhang->id}}">{{$khachhang->Ma_khachhang.' _ '.$khachhang->ten_don_vi }}</option>
                        @endforeach
                    </select>
                    <button type="submit"  STYLE="background: #FBB03B;float: right;margin-right: 20px;border: none;padding: 5px 10px 5px 10px;color: white;border-radius: 5px 5px 5px 5px;font-size: 20px;margin-top: -5px">
                        THỐNG KÊ
                    </button>
                </div>
            </form>
            <div class="row" style="width: 100%;margin-top: 5%;border-radius: 10px 10px 0px 0px;">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row" style="width: 98%">
                <div class="row" style="border-radius: 10px 10px 0px 0px;background: #FBB03B;height: 50px">
                    <div class="col-sm-9">
                        <h5 style="color:#656565;margin-top: 8px">TOP ĐỐI TÁC VẬN CHUYỂN</h5>
                    </div>
                    <?php
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $time = time();
                    $date = getdate($time);
                    ?>
                    <div class="col-sm-3">
                        <div class="row" style="background:white;height: 40px;margin-top: 5px;border-radius: 5px 5px 5px 5px;border: 1px solid #959595;width: 120px;float: right;" >
                            <i class="fa fa-calendar" aria-hidden="true" style="font-size: 20px;margin-left: 10px;margin-top: 5px"></i>
                            <select name="time" onchange="Kreset(this)" style="border: none;width: 75px;margin-top: 5px">
                                @for($i=1;$i<=$date['mon'];$i++)
                                    <option value="chart_{{$i}}">{{$i.'/'.$date['year']}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @for($i=1;$i<=$date['mon'];$i++)
                        <div id="chart_{{$i}}"  class="row chart1" style="display: none">
                            <div  class="row">
                                <div id="piechart-{{$i}}"></div>
                            </div>
                            @if ($charts[$i] != "[['Task', 'Hours per Day'],]")
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <script type="text/javascript">
                                    // Load google charts
                                    google.charts.load('current', {'packages':['corechart']});
                                    google.charts.setOnLoadCallback(drawChart);

                                    // Draw the chart and set the chart values
                                    function drawChart() {
                                        var data = google.visualization.arrayToDataTable(
                                            <?php echo $charts[$i];?>
                                        );

                                        // Optional; add a title and set the width and height of the chart
                                        var options = {'title':'Tổng cước', 'width':330 , 'height':250,};
                                        // Display the chart inside the <div> element with id="piechart"
                                        var chart = new google.visualization.PieChart(document.getElementById('piechart-{{$i}}'));
                                        chart.draw(data, options);
                                    }
                                </script>
                                <div class="row" style="width:98%;background: white;border-top:1px dashed #707070;">
                                    <table style="width: 100%;margin-right: 2%;color: #8B8B8B;text-align: center">
                                        <thead>
                                            <tr style="text-align: center">
                                                <th style="text-align: center">STT</th>
                                                <th style="text-align: center">Mã KH</th>
                                                <th style="text-align: center" >Tổng </th>
                                                <th style="text-align: center" >Tỷ lệ </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  $k=0; ?>
                                            @foreach($khachhangs as $khachhang)
                                                @if($doitacpts[$i][$khachhang->id]>0)
                                                    <?php $k++; ?>
                                                <tr style="text-align: center;height: 40px;border-bottom: 1px solid #BEBEBE" >
                                                    <td>{{$k}}</td>
                                                    <td>{{$khachhang->Ma_khachhang}}</td>
                                                    <td>{{number_format($doitacpts[$i][$khachhang->id])}}</td>
                                                    <td>{{ floor(100*($doitacpts[$i][$khachhang->id]/$tong[$i])).' %' }}</td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <h5 style="color: #8B8B8B">*Dữ liệu được thống kê vào tháng {{$i.'/'.$date['year']}}</h5>
                                </div>
                               @endif
                        </div>
                    @endfor
                </div>
                <script type="text/javascript">
                    function Kreset(obj)
                    {
                        let x= document.getElementsByClassName("chart1");
                        for(let j=0; j<x.length;j++)
                        {
                            x[j].style.display="none";
                        }
                        document.getElementById(obj.value).style.display="block";
                    }
                </script>
        </div>
    </div>--}}
@endsection

