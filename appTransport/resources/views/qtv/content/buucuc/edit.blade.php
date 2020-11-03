@extends('qtv.layouts.NewHomePageLayout')
@section('title')
   Sửa thông tin {{$buucuc->name}}
@endsection
@section('style')
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
@endsection
@section('content')
    <div class="row">
        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
            <h4 class="tittle-w3-agileits mb-4">Sửa thông tin bưu cục</h4>
            <form action="{{url('qtv/buu-cuc/edit/'.$buucuc->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tên bưu cục</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputEmail3"
                               placeholder="Tên bưu cục ..." required="" value="{{$buucuc->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mã bưu cục</label>
                    <div class="col-sm-10">
                        <input type="text" name="code" class="form-control" id="inputEmail3"
                               placeholder="Mã bưu cục ..." required="" value="{{$buucuc->code}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Số điện thoại </label>
                    <div class="col-sm-10">
                        <input type="text" name="phone" class="form-control" id="inputEmail3"
                               placeholder="số điện thoại..." required="" value="{{$buucuc->phone}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Thuộc tỉnh/Thành phố </label>
                    <div class="col-sm-10">
                        <select name="id_tinh">
                            @foreach( $address as $tmp)
                                @if($tmp->id == $buucuc->id_tinh)
                                    <option value="{{$tmp->id}}" selected>{{$tmp->tinh}}</option>
                                @else
                                    <option value="{{$tmp->id}}">{{$tmp->tinh}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" id="inputEmail3"
                               placeholder="địa chỉ ..." required="" value="{{$buucuc->address}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Location</label>
                    <div class="col-sm-10">
                        <input type="text" name="location" class="form-control" id="inputEmail3"
                               placeholder="location ..." required="" value="{{$buucuc->location}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sửa Bài viết</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
