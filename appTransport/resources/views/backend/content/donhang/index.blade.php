@extends('backend.layouts.homepageLayout')
@section('title')
    Danh sách đơn hàng
@endsection
@section('style')
        h4
        {
            color: #656565;
            float: left;
            margin-left: 2%;
            font-weight: bold;
        }
        td
        {
            text-align: center;
        }
@endsection
@section('content')
    <div class="row" style="font-family: 'Segoe UI';background: #E8E8E8;width: 100%">
        <div class="row">
            <h3 style="color:#4D4D4D;margin-left: 5%">DANH SÁCH ĐƠN HÀNG</h3>
        </div>
        <div class="row">
            <table style="width: 96%;margin-left: 2%;padding-right:2%;color: #4D4D4D;font-size: 16px">
                <thead >
                    <tr style="margin-top: 10px;background:#FBB03B;padding: 10px 5px 10px 10px;height:50px">
                        <td style="margin-left: 10px">Mã đơn hàng</td>
                        <td>Ngày tiếp nhận</td>
                        <td>Giờ</td>
                        <td>Dịch vụ vận chuyển</td>
                        <td>Mặt hàng</td>
                        <td>Nơi đi</td>
                        <td>Nơi đến</td>
                        <td>Khối lượng</td>
                        <td>Đơn vị</td>
                        <td>Giá cước</td>
                        <td>Tình trạng vận chuyển</td>
                        <td>Xem chi tiết</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=0;
                        $n_donhang = count($donhangs);
                    ?>
                    @foreach($donhangs as $donhang)
                        <?php $i++; ?>
                        @if($i%2==1)
                            <tr id="{{1000+ $i}}" style="margin-top: 5px;background:#F2F2F2;color:#666666;padding: 10px 5px 10px 10px;height:35px">
                        @else
                            <tr id="{{1000+ $i}}" style="margin-top: 5px;background:#CCCCCC;color:#666666;padding: 10px 5px 10px 10px;height:35px">
                        @endif
                            <td style="margin-left: 10px">{{$donhang->madonhang}}</td>
                            <?php
                                $time = time($donhang->created_at);
                                $date = getdate($time);
                            ?>
                            <td>{{$date['mday'].'/'.$date['mon'].'/'.$date['year']}}</td>
                            <td>{{$date['hours'].':'.$date['minutes'].':'.$date['seconds']}}
                            </td>
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
                                    {{'đã tiếp nhận đơn hàng'}}
                                @elseif($donhang->status==1)
                                    {{'đang vận chuyển'}}
                                @else
                                    {{'đã giao hàng'}}
                                @endif
                            </td>
                            <td>
                                <button onclick="openk({{$i}})" style="background: none; border: none">chi tiết</button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="row" style="margin-left: 5%;width: 90%;margin-top: 1%">
            <?php $i=0;?>
            @foreach($donhangs as $donhang)
                <?php $i++; ?>
                <div id="{{$i}}" class="row detail" style="margin-top: 10px;display: none;margin-left: 0px;width: 95%">
                    <div class="row" style="margin-top: 10px;background-color: white;height: 150px;padding-bottom: 20px;">
                        <div class="row" style="margin-top: 30px;background-color: white;margin-left: 5%;width: 95%">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-3">
                                <h4 style="float: left"> Đã tiếp nhận đơn hàng </h4>
                            </div>
                            <div class="col-sm-4" style="text-align: center">
                                <h4 style="text-align: center"> Đang trên đường vận chuyển</h4>
                            </div>
                            <div class="col-sm-3">
                                <h4 style="float: right"> Đã giao hàng</h4>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <div class="row" style="background-color: white;margin-left: 5%;width: 95%">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-3">
                                @if($donhang->status>=0)
                                    <hr style="width: 100%; border: 3px solid #FFAA00;"/>
                                @else
                                    <hr style="width: 100%; border: 3px solid #cccccc;"/>
                                @endif
                            </div>
                            <div class="col-sm-4">
                                @if($donhang->status>=1)
                                    <hr style="width: 100%; border: 3px solid #FFAA00;"/>
                                @else
                                    <hr style="width: 100%; border: 3px solid #cccccc;"/>
                                @endif

                            </div>
                            <div class="col-sm-3">
                                @if($donhang->status>=2)
                                    <hr style="width: 100%; border: 3px solid #FFAA00;"/>
                                @else
                                    <hr style="width: 100%; border: 3px solid #cccccc;"/>
                                @endif
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1%">
                        <div class="col-sm-4">
                            <?php  $info_vanchuyen = json_decode($donhang->info_vanchuyen);?>
                            <div class="row" style="background-color: white;">
                                <div class="col-sm-4">
                                    <h5 style="color:#707070;"> Gửi từ</h5>
                                    <h4 style="color:#707070;">{{$info_vanchuyen->{'noidi'} }} </h4>
                                </div>
                                <div class="col-sm-2">
                                    <i class="fa fa-paper-plane" aria-hidden="true" style="margin-top:30px;font-size: 30px"></i>
                                </div>
                                <div class="col-sm-6">
                                    <h5 style="color:#707070;"> Gửi đến</h5>
                                    <h4 style="color:#707070;"> {{$info_vanchuyen->{'noiden'} }}</h4>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 5px;background-color: white;">
                                <h4 style="color: #707070;margin-left: 5%">Thông tin đơn hàng</h4>
                                <div class="row" style="margin-left: 5%;background-color: white;width: 95%">
                                    <div class="col-sm-7">
                                        <h5 style="color: #707070"> Mã Vận đơn:</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5 style="color: #707070"> {{$donhang->madonhang}}</h5>
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 5%;background-color: white;width: 95%">
                                    <div class="col-sm-7">
                                        <h5 style="color: #707070"> Loại dịch vụ:</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5 style="color: #707070">{{$donhang->dichvu}}</h5>
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 5%;background-color: white;width: 95%">
                                    <div class="col-sm-7">
                                        <h5 style="color: #707070"> Hình thức vận chuyển</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5 style="color: #707070"> {{$donhang->hinhthucvc}}</h5>
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 5%;background-color: white;width: 95%">
                                    <div class="col-sm-7">
                                        <h5 style="color: #707070"> Ngày tạo đơn:</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5 style="color: #707070">
                                            <?php
                                            $time = time($donhang->created_at);
                                            $date = getdate($time);
                                            ?>
                                            {{$date['mday'].'/'.$date['mon'].'/'.$date['year']}}
                                        </h5>
                                    </div>
                                </div>
                                <div class="row" style="margin-left: 5%;background-color: white;width: 95%">
                                    <div class="col-sm-7">
                                        <h5 style="color: #707070"> Ngày Giao dự kiến:</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <h5 style="color: #707070"></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="row" style="background-color: white;margin-left: -25px;width: 100%">
                                <div class="row" style="margin-left: 5%;margin-top: 2%;background: white;padding-bottom: 5%;width: 95%">
                                    <button style="background-color:#FFAA00;color:#FFFFFF;padding:5px 5px 5px 5px;border: none;border-radius: 5px">{{$date['mday'].'/'.$date['mon'].'/'.$date['year']}}</button>
                                    <div class="row" style="background: white;color: #707070">
                                        <textarea name="chitiet" style=" background:  white;border: none;overflow: none;width: 90%;height: 300px;text-align: left" disabled>
                                            <?php echo($donhang->chitiet)?>
                                        </textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row" style="margin-top: 1%">
            <table style="width: 95%;margin-left: 5%;color:#4D4D4D;font-size: 16px;display:inline-table ">
                <thead style="display: none">
                    <tr style="margin-top: 10px;background:#FBB03B;padding: 10px 5px 10px 10px;height:50px; ">
                        <td style="margin-left: 10px">Mã đơn hàng</td>
                        <td>Ngày tiếp nhận</td>
                        <td>Giờ</td>
                        <td>Dịch vụ vận chuyển</td>
                        <td>Mặt hàng</td>
                        <td>Nơi đi</td>
                        <td>Nơi đến</td>
                        <td>Khối lượng</td>
                        <td>Đơn vị</td>
                        <td>Giá cước</td>
                        <td>Tình trạng vận chuyển</td>
                        <td>Xem chi tiế1t</td>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0;?>
                @foreach($donhangs as $donhang)
                    <?php $i++; ?>
                    @if($i%2==1)
                        <tr id="{{2000+ $i}}" style="margin-top: 5px;background:#F2F2F2;color:#666666;padding: 10px 5px 10px 10px;height:35px;">
                    @else
                        <tr id="{{2000+ $i}}" style="margin-top: 5px;background:#CCCCCC;color:#666666;padding: 10px 5px 10px 10px;height:35px;">
                    @endif
                        <td style="margin-left: 10px">{{$donhang->madonhang}}</td>
                        <?php
                        $time = time($donhang->created_at);
                        $date = getdate($time);
                        ?>
                        <td>{{$date['mday'].'/'.$date['mon'].'/'.$date['year']}}</td>
                        <td>{{$date['hours'].':'.$date['minutes'].':'.$date['seconds']}}
                        </td>
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
                                {{'đã tiếp nhận đơn hàng'}}
                            @elseif($donhang->status==1)
                                {{'đang vận chuyển'}}
                            @else
                                {{'đã giao hàng'}}
                            @endif
                        </td>
                        <td>
                            <button onclick="openk({{$i}})" style="background: none; border: none">chi tiết</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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

        }

    </script>
@endsection
