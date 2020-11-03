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
    .uk-text-left a:hover{
    color: #ffaa00 !important;
    background-color: #ffaa00;
    }
@endsection
@section('content')
    <div class="menuHeader" style="background: white;padding-top: 20px;padding-bottom: 20px">
        <div class="uk-container uk-padding-remove">
            <div class="uk-text-left">
                <a href="{{url('/')}}" style="color: #FFAA00;">Trang chủ </a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tra-cuu')}}" style="color: #FFAA00">Tra Cứu</a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tra-cuu/diem-gui-hang')}}" style="color: #FFAA00">Tìm diểm gửi hàng</a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 10px">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-left uk-text-uppercase uk-margin-medium" style="margin-bottom: 5px"><span>Danh sách các bưu cục</span></div>
                    <div class="uk-margin home__block__lienhe__desc uk-text-left" style="margin-top: 10px;color:#b8b6b6 ">
                        Tổng hợp các điểm gửi hàng của công ty,...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-flex-middle uk-grid" uk-grid>
                <div class="uk-width-2-5@m uk-first-column">
                    <div style="background-color: #ECECEC; border: 1px solid #D4D4D4;box-shadow: 3px 3px #4B4B4B; margin-left: 10%;">
                        <div class="uk-text-left uk-text-large" style="color: #707070;margin-top: 20px; font-size: medium; margin-left: 5%">Tìm kiếm bưu cục</div>
                        <div class="uk-text-center"  style="margin-top: 20px" uk-grid>
                            <div class="uk-width-3-5 uk-first-column">
                                <select id="tinh" name="tinh" style="height: 30px;float: right; width: 90%">
                                    <option value="0">Chọn tỉnh thành phố</option>
                                    @foreach($address as $tmp)
                                        <option value="{{$tmp->id}}">{{$tmp->tinh}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="uk-width-expand">
                                <button onclick="tracuu()" class="btn" style="background-color: #FFAA00;color: white">Tra cứu</button>
                            </div>
                        </div>
                        <div class="uk-text-left" style="margin-top: 2%; background-color: white;width: 90%;margin-left: 5%;margin-right: 5%;height: 400px;overflow: scroll">
                            <div  id="khoitao">
                                @foreach($buucucs as $tk)
                                    <a onclick="openMap({{$tk->id}})">
                                        <div class="row"  style="margin-left: 5%;width: 90%;border-bottom: 2px solid #C4C4C4;">
                                            <h4 style="font-weight: bold;color:#858585;margin-top: 5%">{{$tk->name}}</h4>
                                            <p style="color:#858585;"><i class="fa fa-map-marker" aria-hidden="true" style="color:#FFB300 "></i>
                                                Địa chỉ: {{$tk->address}}</p>
                                            <p style="color:#858585"><i class="fa fa-volume-control-phone" aria-hidden="true" style="color:#FFB300 "></i>
                                                Điện thoại: {{$tk->phone}}</p>
                                        </div></a>
                                @endforeach
                            </div>
                            <div>
                                @foreach($buucucs as $tk)
                                    <a onclick="openMap({{$tk->id}})">
                                        <div class="row{{ $tk->id_tinh}}"  style="margin-left: 5%;width: 90%;border-bottom: 2px solid #C4C4C4;display: none">
                                            <h4 style="font-weight: bold;color:#858585;margin-top: 5%">{{$tk->name}}</h4>
                                            <p style="color:#858585;"><i class="fa fa-map-marker" aria-hidden="true" style="color:#FFB300 "></i>
                                                Địa chỉ: {{$tk->address}}</p>
                                            <p style="color:#858585"><i class="fa fa-volume-control-phone" aria-hidden="true" style="color:#FFB300 "></i>
                                                Điện thoại: {{$tk->phone}}</p>
                                        </div></a>
                                @endforeach
                            </div>
                            <div id="nokq" class="row"  style="margin-left: 5%;width: 90%;border-bottom: 2px solid #C4C4C4;display: none">
                                <h4 style="font-weight: bold;color:#858585;margin-top: 5%">Không có bưu cục ở đây trên hệ thống</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand">
                    @foreach($buucucs as $bc)
                        <div class="map-detail" id="{{$bc->id}}" style="display: none">
                            <?php echo $bc->location ?>
                        </div>
                    @endforeach
                           {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
    1d3723.8977453149246!2d105.83245751424809!3d21.036777085994046!
    2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
    1s0x3135aba15ec15d17%3A0x620e85c2cfe14d4c!2zTMSDbmcgSOG7kyBDaMOtIE1pbmg!
    5e0!3m2!1svi!2sus!4v1501056274257" width="500px" height="100%"
                                    frameborder="0" style="border:0;min-height: 400px; width: 100%!important; " allowfullscreen></iframe>--}}
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        let x= document.getElementsByClassName("map-detail");
        x[0].style.display="inline";
        function openMap(id)
        {
            let y= document.getElementsByClassName("map-detail");
            for(let i=0;i< y.length;i++)
                y[i].style.display="none";
           document.getElementById(id).style.display="inline";

        }
        function tracuu()
        {
            console.log('a');
            let id_tinh = document.getElementById("tinh").value;
            if(id_tinh>0)
            {
                document.getElementById("khoitao").style="display:none";
                let x = document.getElementsByClassName("row"+id_tinh);
                for (let i=0;i<x.length;i++)
                {
                    x[i].style="margin-left: 5%;width: 90%;border-bottom: 2px solid #C4C4C4;display:block";
                }
                if(x.length==0)
                {
                    document.getElementById("nokq").style.display="block";
                }
            }
        }
    </script>


  {{--  <div class="container"  style="background-color: #ECECEC; font-family: 'Segoe UI'">
        <div class="row" style="margin-left: 0px;">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">

                <div class="row" style="margin-left: 5%;margin-bottom: 5%">


                    <div class="col-sm-4" style="background-color: #ECECEC; border: 1px solid #D4D4D4;box-shadow: 3px 3px #4B4B4B;">
                        <div class="row" style="margin-top: 2%;margin-left: 5%;width: 90%">
                            <h4 style="color: #707070">Tìm kiếm bưu cục</h4>
                        </div>
                        <div class="row" style="margin-top: 2%;margin-left: 5%;width: 90%">
                          --}}{{--  <form action="#" method="post" >
                                @csrf--}}{{--
                                <div class="row">
                                    <div class="col-sm-9">
                                        <select id="tinh" name="tinh" style="width: 100%;height: 30px">
                                            <option value="0">Chọn tỉnh thành phố</option>
                                            @foreach($address as $tmp)
                                                <option value="{{$tmp->id}}">{{$tmp->tinh}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <button onclick="tracuu()" class="btn" style="background-color: #FFAA00;color: white">Tra cứu</button>
                                    </div>
                                </div>

                           --}}{{-- </form>--}}{{--
                        </div>
                        <div class="row" style="margin-top: 2%; background-color: white;width: 96%;margin-left: 2%;margin-right: 2%;height: 375px;overflow: scroll">
                            <div  id="khoitao">
                                @foreach($buucucs as $tk)
                                    <a href="#">
                                        <div class="row"  style="margin-left: 5%;width: 90%;border-bottom: 2px solid #C4C4C4;">
                                            <h4 style="font-weight: bold;color:#858585;margin-top: 5%">{{$tk->name}}</h4>
                                            <p style="color:#858585;"><i class="fa fa-map-marker" aria-hidden="true" style="color:#FFB300 "></i>
                                                Địa chỉ: {{$tk->address}}</p>
                                            <p style="color:#858585"><i class="fa fa-volume-control-phone" aria-hidden="true" style="color:#FFB300 "></i>
                                                Điện thoại: {{$tk->phone}}</p>
                                        </div></a>
                                @endforeach
                            </div>
                            @foreach($buucucs as $tk)
                                <a href="#">
                                <div class="row{{ $tk->id_tinh}}"  style="margin-left: 5%;width: 90%;border-bottom: 2px solid #C4C4C4;display: none">
                                    <h4 style="font-weight: bold;color:#858585;margin-top: 5%">{{$tk->name}}</h4>
                                    <p style="color:#858585;"><i class="fa fa-map-marker" aria-hidden="true" style="color:#FFB300 "></i>
                                        Địa chỉ: {{$tk->address}}</p>
                                    <p style="color:#858585"><i class="fa fa-volume-control-phone" aria-hidden="true" style="color:#FFB300 "></i>
                                        Điện thoại: {{$tk->phone}}</p>
                                </div></a>
                            @endforeach
                            <div id="nokq" class="row"  style="margin-left: 5%;width: 90%;border-bottom: 2px solid #C4C4C4;display: none">
                                <h4 style="font-weight: bold;color:#858585;margin-top: 5%">Không có bưu cục ở đây trên hệ thống</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-7" style="margin-left: 3%">
                        <div class="row" style="background-color: #C8C8C8;min-height: 475px;border: 1px solid #E2E2E2">
                            <div id="map" style="width:500px;height:500px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
    1d3723.8977453149246!2d105.83245751424809!3d21.036777085994046!
    2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
    1s0x3135aba15ec15d17%3A0x620e85c2cfe14d4c!2zTMSDbmcgSOG7kyBDaMOtIE1pbmg!
    5e0!3m2!1svi!2sus!4v1501056274257" width="500px" height="100%"
                                        frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <script type="text/javascript">
        function tracuu()
        {
            console.log('a');
            let id_tinh = document.getElementById("tinh").value;
            if(id_tinh>0)
            {
                document.getElementById("khoitao").style="display:none";
                let x = document.getElementsByClassName("row"+id_tinh);
                for (let i=0;i<x.length;i++)
                {
                    x[i].style="margin-left: 5%;width: 90%;border-bottom: 2px solid #C4C4C4;display:block";
                }
                if(x.length==0)
                {
                    document.getElementById("nokq").style.display="block";
                }
            }
        }
    </script>--}}
@endsection

