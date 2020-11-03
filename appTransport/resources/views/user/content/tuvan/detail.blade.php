@extends('user.layouts.NewHomePageLayout')
@section('title')
    Chi tiết cần tư vấn
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
            font-size: 16px;
        }
        .row p
        {
            font-size: 14px;
            text-align: left;
        }
@endsection
@section('content')
    <div id="new-category">
        <div class="uk-card uk-card-default">
            <div class="uk-card-body uk-padding-small uk-box-shadow" style="padding-top: 2%;padding-bottom: 2%">
                <div class="uk-text-large">
                    <div class="uk-text-center uk-text-large uk-text-bold uk-text-uppercase" style="padding-bottom: 20px; border-bottom: 2px solid #FBB03B; width: 80%;margin-left: 10%;">
                       Nội dung chi tiết yêu cầu tư vấn
                    </div>
                </div>
                <div class="uk-grid-small uk-grid" uk-grid>
                    @csrf
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Tên khách hàng</label>
                            <div class="uk-form-controls">
                                <input class="uk-input"  type="text"  value="{{$item->name}}" style="background: #e6e3e3;padding-left: 5%"  disabled="disabled">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Địa chỉ email</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" value="{{$item->email}}" style="background: #e6e3e3;padding-left: 5%"  disabled="disabled">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">SĐT</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text"  value="{{$item->phone}}" style="background: #e6e3e3;padding-left: 5%"  disabled="disabled">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Ngày gửi yêu cầu</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text"  value="{{$item->created_at}}" style="background: #e6e3e3;padding-left: 5%"  disabled="disabled">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Tên đồ cần gửi</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" value="{{$item->name_product}}" style="background: #e6e3e3;padding-left: 5%"  disabled="disabled">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Trọng lượng</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text"  value="{{$item->weight}}" style="background: #e6e3e3;padding-left: 5%"  disabled="disabled">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Địa chỉ gửi</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text" value="{{$item->address_s}}" style="background: #e6e3e3;padding-left: 5%"  disabled="disabled">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Địa chỉ nhận</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" type="text"  value="{{$item->address_r}}" style="background: #e6e3e3;padding-left: 5%"  disabled="disabled">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20px">
                    <div class="uk-form-controls">
                        <a href="{{url('/nhanvien/trung-tam-ho-tro/tu-van-khach-hang/answered/'.$item->id)}}"><button class="uk-width-1-1 uk-button uk-button-default home__btn" style="background:#FBB03B;width: 60%;margin-left: 20%;border-radius: 10px 10px 10px 10px; color:white">Đánh dấu đã trả lời</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


