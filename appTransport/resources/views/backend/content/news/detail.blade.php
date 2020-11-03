@extends('backend.layouts.homepageLayout')
@section('title')
    {{$news->name}}
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
    <div class="row">
        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
            <h4 class="tittle-w3-agileits mb-4">{{$news->name}}</h4>
            <section class="tables-section">
            <div class="outer-w3-agile mt-3">

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <p style="font-weight: bold">{{$news->intro}}</p>
                        <a href="{{url('/admin/news/edit/'.$news->id)}}"><button class="btn btn-warning"> Sửa</button></a>
                        <a href="{{url('/admin/news/delete/'.$news->id)}}"><button class="btn btn-danger"> Xóa</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10" >
                        <?php echo $news->desc?>
                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>
        </section>
    </div>


@endsection



