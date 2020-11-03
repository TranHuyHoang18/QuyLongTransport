@extends('user.layouts.NewHomePageLayout')
@section('title')
    Chi tiết đơn hàng
@endsection
@section('style')
        h4
        {
            color: #656565;
            margin-left: 2%;
            font-weight: bold;
        }
        td
        {
            text-align: center;
        }
@endsection
@section('content')
    <div class="uk-section" style="padding-top: 5px;background-color:#e3e3e3" >
        @if($donhang!= null)
            <div class="container">
                <div class="row" style="margin-top: 10px;background-color: white;height: 100px;padding-bottom: 20px;">
                    <div class="row" style="margin-top: 30px;background-color: white;margin-left: 5%;width: 95%">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <div class="uk-text-center uk-text-uppercase">Đã tiếp nhận đơn hàng</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="uk-text-center uk-text-uppercase"> Đang trên đường vận chuyển</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="uk-text-center uk-text-uppercase">Đã giao hàng</div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row" style="background-color: white;margin-left: 5%;width: 95%">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            @if($donhang->status>=0)
                                <hr style="width: 100%;height: 5px; background-color: #FFAA00;"/>
                            @else
                                <hr style="width: 100%;height: 5px; background-color: #cccccc;"/
                            @endif
                        </div>
                        <div class="col-sm-4">
                            @if($donhang->status>=1)
                                <hr style="width: 100%;height: 5px; background-color: #FFAA00;"/>
                            @else
                                <hr style="width: 100%;height: 5px; background-color: #cccccc;"/
                            @endif

                        </div>
                        <div class="col-sm-3">
                            @if($donhang->status>=2)
                                <hr style="width: 100%;height: 5px; background-color: #FFAA00;"/>
                            @else
                                <hr style="width: 100%;height: 5px; background-color: #cccccc;"/>
                            @endif
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <?php  $info_vanchuyen = json_decode($donhang->info_vanchuyen);?>
                        <div class="row" style="margin-top: 10px;background-color: white; padding-top: 5px;padding-bottom: 5px">
                            <div class="col-sm-5">
                                <div class="uk-text-center uk-text-bold">Gửi từ</div>
                                <div class="uk-text-center">{{$info_vanchuyen->{'noidi'} }}</div>
                            </div>
                            <div class="col-sm-2">
                                <div class="uk-text-center">
                                    <i class="fa fa-paper-plane" aria-hidden="true" style="margin-top:15px;font-size: 30px"></i>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="uk-text-center uk-text-bold">Gửi đến</div>
                                <div class="uk-text-center">{{$info_vanchuyen->{'noiden'} }}</div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;background-color: white;padding-left: 5%;padding-top: 10px;padding-bottom: 10px">
                            <div class="uk-text-left uk-text-middle uk-text-uppercase uk-text-bold ">Thông tin đơn hàng</div>
                            <div class="uk-grid" style="margin-top: 10px" >
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070"> Mã Vận đơn:</h5>
                                </div>
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070"> {{$donhang->madonhang}}</h5>
                                </div>
                            </div>
                            <div class="uk-grid" style="margin-top: 10px" >
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070"> Loại dịch vụ:</h5>
                                </div>
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070">{{$donhang->dichvu}}</h5>
                                </div>
                            </div>
                            <div class="uk-grid" style="margin-top: 10px" >
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070"> Hình thức vận chuyển</h5>
                                </div>
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070"> {{$donhang->hinhthucvc}}</h5>
                                </div>
                            </div>
                            <div class="uk-grid" style="margin-top: 10px" >
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070"> Ngày tạo đơn:</h5>
                                </div>
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070">
                                        <?php
                                        $time = time($donhang->created_at);
                                        $date = getdate($time);
                                        ?>
                                        {{$date['mday'].'/'.$date['mon'].'/'.$date['year']}}
                                    </h5>
                                </div>
                            </div>
                            <div class="uk-grid" style="margin-top: 10px" >
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070"> Ngày Giao dự kiến:</h5>
                                </div>
                                <div class="uk-width-1-2">
                                    <h5 style="color: #707070"></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-8" >
                        <div class="row" style="background-color: white;width: 100%;margin-left: 1%;margin-top: 10px">
                            <h4 style="text-align: center"> Thông tin chi tiết</h4>
                        </div>
                        <div class="row" style="background-color: white;width: 100%;margin-left: 1%;margin-top: 10px">
                            <?php
                            $trackings = json_decode($donhang->chitiet);
                            $n_tracking = $trackings[0];
                            ?>
                            <div class="row" style="margin-left: 5%;background: white;padding-bottom: 5%;width: 95%">
                                <div class="row" style="margin-left: 5%;margin-top: 2%;background: white;width: 95%">
                                    <button style="background-color:#FFAA00;color:#FFFFFF;padding:5px 5px 5px 5px;border: none;border-radius: 5px">
                                        {{$trackings[1]->{'date'} }}
                                    </button>
                                    <div class="row" style="background: white;width: 90%;margin-left: 5%">
                                        <h5 style="color: #707070">{{$trackings[1]->{'time'}.'   : '.$trackings[1]->{'content'}.'   ' }} </h5>
                                    </div>
                                </div>
                                @for($j=2;$j<=$n_tracking;$j++)
                                    @if($trackings[$j]->{'date'} == $trackings[$j-1]->{'date'})
                                        <div class="row" style="margin-left: 5%;background: white;width: 95%">
                                            <div class="row" style="background: white;margin-top: 2%;width: 90%;margin-left: 5%">
                                                <h5 style="color: #707070">{{$trackings[$j]->{'time'}.'   : '.$trackings[$j]->{'content'}.'   ' }}</h5>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row" style="margin-left: 5%;margin-top: 2%;background: white;width: 95%">
                                            <button style="background-color:#FFAA00;color:#FFFFFF;padding:5px 5px 5px 5px;border: none;border-radius: 5px">
                                                {{$trackings[$j]->{'date'} }}
                                            </button>
                                            <div class="row" style="background: white;margin-top: 2%;width: 90%;margin-left: 5%">
                                                <h5 style="color: #707070">{{$trackings[$j]->{'time'}.'   : '.$trackings[$j]->{'content'}.'   ' }}</h5>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
