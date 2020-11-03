@extends('frontend.layouts.HomePageLayout')
@section('title')
    {{$seo->name}}
@endsection
@section('meta')
    <meta name="keywords" content="{{$seo->seo_keyword}}">
    <meta name="description" content="{{$seo->seo_desc}}">
    <meta property="og:title" content="{{$seo->seo_title}}">
    <meta property="og:description" content="{{$seo->seo_desc}}">
@endsection
@section('style')

@endsection
@section('content')
    <div class="menuHeader" style="background: white;padding-top: 20px;padding-bottom: 20px">
        <div class="uk-container uk-padding-remove">
            <div class="uk-text-left">
                <a href="{{url('/')}}" style="color: #FFAA00">Trang chủ </a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tra-cuu')}}" style="color: #FFAA00">Tra cứu</a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tra-cuu/van-don-van-chuyen')}}" style="color: #FFAA00">Tra cứu vận </a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px" >
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span>TRA CỨU ĐƠN HÀNG </span></div>
                    <div class="home__block__lienhe__formLeft uk-margin">
                        <form method="post" action="{{url('tra-cuu/van-don')}}">
                            @csrf
                            <div class="uk-grid-10" uk-grid>
                                <div class="uk-width-expand">
                                    <input class="uk-input home__Input" type="text" name="mavandon" placeholder="Nhập mã vận đơn ...">
                                </div>
                                <div class="uk-width-auto@s">
                                    <button type="submit" class="uk-button uk-button-default home__btn">Tra cứu</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="home__block__lienhe__desc uk-margin-medium-top">
                        <h4 style="color: #707070">{{$content}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

   {{-- @if($donhang!= null)
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
                <div class="row" style="background-color: white;width: 100%">
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
    @endif--}}
  {{--  <div class="container" style="background-color: #F1F1F1;font-family: 'Segoe UI';padding-bottom: 5%">
        <div class="row" style="margin-left: 5%">
            <div class="col-sm-1"></div>
            <div class="col-sm-9">
                <div class="row">
                    <h4 style="color: #FFAA00">Trang chủ <span style="color:#707070 "> ></span>Tra cứu<span style="color:#707070 "> ></span>Tra cứu vận đơn </h4>
                </div>
                <div class="row" style="margin-top: 15px">
                    <h5 style="color: #707070">Nhập mã đơn hàng (Ví dụ mã bill: 274824924)</h5>
                </div>
                <div class="row" style="margin-top: 10px">
                    <form method="post" action="{{url('tra-cuu/van-don')}}">
                        @csrf
                        <input type="text" name="mavandon" aria-placeholder=""  style="width: 30%;float: left;">
                        <button type="submit" style="background-color:#FFAA00;color:#FFFFFF;padding:5px 5px 5px 5px;float: left;margin-left: 5px;border: none;border-radius: 5px">Tra cứu</button>
                    </form>
                </div>
                <div class="row" style="margin-top: 5%">
                    <h4 style="color: #707070">{{$content}}</h4>
                </div>
                @if($donhang!= null)
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
                            <div class="row" style="background-color: white;width: 100%">
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
                @endif
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>--}}
@endsection


