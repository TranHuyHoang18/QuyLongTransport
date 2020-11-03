@extends('backend.layouts.homepageLayout')
@section('title')
    {{$page->name}}
@endsection
@section('style')
    <style type="text/css">
        .row
        {
            background-color: white;
            margin-top: 3%;
            padding-left: 5%;
            padding-right: 5%;
        }
        .row h4
        {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin: 0px auto;
        }
        .row label
        {
            font-size: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="row" style="margin-top: 1px">
        <h5 style="color:#f0ad4e">Blog <span style="color: black">></span> {{$map[$page->id]}} </h5>
    </div>
    <div class="row" >
        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
            <a href="{{url('/admin/tuyen-dung/bai-viet/edit/'.$page->id)}}"><button class="btn btn-warning"> Sửa</button></a>
            <a href="{{url('/admin/tuyen-dung/bai-viet/delete/'.$page->id)}}"><button class="btn btn-danger"> Xóa</button></a>
            <h4 class="tittle-w3-agileits mb-4">{{$page->name}}</h4>
            <section class="tables-section">
            <div class="outer-w3-agile mt-3">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <p style="font-weight: bold"><?php echo $page->intro; ?></p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5%">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" >
                        <?php echo $page->desc?>
                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>
        </section>
    </div>


@endsection

