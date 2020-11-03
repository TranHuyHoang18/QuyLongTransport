@extends('qtv.layouts.NewHomePageLayout')
@section('title')
     Danh Mục HH VC | Cài Đặt
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
    tbody td
    {
    border-right:1px dashed black;
    }
@endsection
@section('content')
    <div class="row" style="font-family: 'Segoe UI';background: #E8E8E8;width: 100%">
        <div class="row">
            <h3 style="color:#4D4D4D;margin-left: 5%">DANH MỤC HÀNG HÓA VẬN CHUYỂN</h3>
        </div>
        <div class="row" style="margin-bottom: 2%">
            <button id="btn-add" onclick="openform()" class="btn btn-success" style="padding: 5px 10px 5px 10px;margin-left: 5%"><h4 style="color:white;">Thêm danh mục</h4></button>
        </div>
        <div id="formnhanvien" class="row"  style="width: 90%;margin-left: 3%;background: #E9E9E9;padding-bottom: 5%;display: none">
            <form action="{{url('qtv/cai-dat/danh-muc-vc/add')}}" method="post" style="margin-top: 2%;border-radius: 10px 0px 10px 0px;border: 1px solid #707070;padding: 3% 3% 3% 3%;background: white">
                @csrf
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Tên danh mục</h4>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="name" placeholder=" thú cưng" required="" style="width: 60%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Hình ảnh</h4>
                    </div>
                    <div class="col-sm-9">

                        <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnaila" data-preview="hhha"
                                   class="lfm-btn btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnaila" class="form-control" type="text" name="image"
                                   style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                            <span id="hhha" style="margin-top:15px;max-height:100px;">
                            </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Alt</h4>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="alt" placeholder="thú cưng dễ thương,... " aria-required="" style="width: 60%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                    </div>
                </div>
                <div class="row" style="text-align: center">
                    <button class="btn" type="submit" style="background: #FFAA00;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Lưu thông tin</h4></button>
                    <button class="btn" type="button" onsubmit="false" onclick="closeform()" style="background: #e02b3a;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Hủy</h4></button>
                </div>
            </form>
        </div>
        <div class="row"  id="details">
            <table style="width: 96%;margin-left: 2%;padding-right:2%;color: #4D4D4D;font-size: 16px">
                <thead >
                <tr style="margin-top: 10px;background:#FBB03B;padding: 10px 5px 10px 10px;height:50px">
                    <td style="margin-left: 10px">STT</td>
                    <td>Tên</td>
                    <td>Hình ảnh</td>
                    <td>Alt</td>
                    <td>Hành Động</td>
                </tr>
                </thead>
                <tbody style="margin-top: 2%">
                <?php  $i=0; ?>
                @foreach($items as $item)
                    <?php  $i++; ?>
                    @if($i%2==1)
                        <tr style="margin-top: 3%;background:#F2F2F2 ">
                    @else
                        <tr style="margin-top: 3%;background:#CCCCCC">
                            @endif
                            <td style="margin-left: 10px">{{$i}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <div id="hexagon{{$i}}" style="text-align: center;margin-top: 10px;margin-bottom: 10px;margin-left: 30px"></div>
                                <style contenteditable>
                                    #hexagon{{$i}} {
                                        width: 70px;
                                        height: 100px;
                                        background-color: #dbd8d8;
                                        background-image: url({{$item->image}});
                                        background-repeat: no-repeat;
                                        background-position: center center;
                                        position: relative;
                                    }
                                    #hexagon{{$i}}:before {
                                        content: "";
                                        position: absolute;
                                        left: -25px;

                                        width: 0;
                                        height: 0;
                                        border-top: 50px solid transparent;
                                        border-bottom: 50px solid transparent;
                                        border-right: 25px solid #dbd8d8;
                                    }
                                    #hexagon{{$i}}:after {
                                        content: "";
                                        position: absolute;
                                        right: -25px;
                                        width: 0;
                                        height: 0;
                                        border-top: 50px solid transparent;
                                        border-bottom: 50px solid transparent;
                                        border-left: 25px solid #dbd8d8;
                                    }
                                </style>
                            </td>
                            <td>{{$item->alt}}</td>
                            <td style="border-right: none">
                                <a onclick="openformedit({{$item->id}})"><button class="btn btn-warning">Chi tiết</button></a>
                                <a href="{{url('qtv/cai-dat/danh-muc-vc/delete/'.$item->id)}}" ><button class="btn btn-danger">Xóa</button></a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
        @foreach($items as $item)
            <div class="formedit" id="{{'formedit-'.$item->id}}" class="row"  style="width: 90%;margin-left: 3%;background: #E9E9E9;padding-bottom: 5%;display: none">
                <div class="row" style="text-align: center;background: #D6D6D6;padding: 10px 5px 10px 5px;border-radius:10px 0px 0px 0px;border: 1px solid #707070;">
                    <h4 style="text-align: center;margin: 0px auto">SỬA THÔNG TIN</h4>
                </div>
                <form action="{{url('qtv/cai-dat/danh-muc-vc/edit/'.$item->id)}}" method="post" style="border-radius:0px 0px 10px 0px;border: 1px solid #707070;padding: 3% 3% 3% 3%;background: white">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Tên danh mục</h4>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{$item->name}}" placeholder="Tên bài viết ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Hình ảnh</h4>
                        </div>
                        <div class="col-sm-9">

                        <span class="input-group-btn">
                                <a id="lfma{{$item->id}}" data-input="thumbnaila{{$item->id}}" data-preview="hhha{{$item->id}}"
                                   class="lfm-btn btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnaila{{$item->id}}" value="{{$item->image}}" class="form-control" type="text" name="image"
                                   style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                            <span id="hhha{{$item->id}}" style="margin-top:25px;max-height:100px;">
                                <img src="{{$item->image}}" style="margin-top: 10px">
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Alt</h4>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="alt" value="{{$item->alt}}" placeholder="thú cưng dễ thương,... " aria-required="" style="width: 60%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                        </div>
                    </div>
                    <div class="row" style="text-align: center">
                        <button class="btn" type="submit" style="background: #FFAA00;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Lưu thông tin</h4></button>
                        <button class="btn" type="button" onsubmit="false" onclick="closeformedit({{$item->id}})" style="background: #e02b3a;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Hủy</h4></button>
                    </div>
                </form>
            </div>
        @endforeach
    </div>

    <script type="text/javascript">
        function openform()
        {
            document.getElementById('formnhanvien').style.display="block";
            document.getElementById('btn-add').style.display="none";
        }
        function closeform()
        {
            document.getElementById('formnhanvien').style.display="none";
            document.getElementById('btn-add').style.display="block";
        }
        function openformedit(id)
        {
            document.getElementById('formedit-'+id).style.display="block";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('details').style.display="none";
        }
        function closeformedit(id)
        {
            document.getElementById('formedit-'+id).style.display="none";
            document.getElementById('btn-add').style.display="block";
            document.getElementById('details').style.display="block";
        }
    </script>
    <script type="text/javascript">
        let route_prefix = "{{url('/filemanager')}}";
        $('.lfm-btn').filemanager('image', {prefix: route_prefix});

    </script>
@endsection

