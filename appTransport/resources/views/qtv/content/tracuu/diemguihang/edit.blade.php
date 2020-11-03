@extends('qtv.layouts.NewHomePageLayout')
@section('title')
    Sửa điểm gửi hàng
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
            <h4 class="tittle-w3-agileits mb-4">Sửa Điểm gửi hàng: {{$diemguihang->diemguihang}}</h4>
            <form action="{{url('qtv/diem-gui-hang/edit/'.$diemguihang->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tên điểm gửi hàng</label>
                    <div class="col-sm-9">
                        <input type="text" name="diemguihang" class="form-control" id="inputEmail3"
                               placeholder="vd: tp. Hồ Chí minh" required="" value="{{$diemguihang->diemguihang}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Vị Trí</label>
                    <div class="col-sm-9">
                        <select name="id_tinh" style="width: 40%; height: 30px">
                            <option value="0">Chưa chọn</option>
                            @foreach($tinhs as $tinh)
                                @if($tinh->id==$diemguihang->id_tinh)
                                    <option value="{{$tinh->id}}" selected>{{$tinh->tinh}}</option>
                                @else
                                    <option value="{{$tinh->id}}">{{$tinh->tinh}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row" style="overflow-x: scroll">
                    <label for="code" class="col-form-label">Danh sách tỉnh gửi đến</label>
                    <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small" >
                        <thead>
                            <tr style="background: #707070; color: white">
                                <td class="uk-text-center" style="color: white">Tỉnh</td>
                                <td class="uk-text-center" style="color: white">Mã Vùng</td>
                                <td class="uk-text-center" style="color: white">Khu vực trả</td>
                                <td class="uk-text-center" style="color: white">CPN</td>
                                <td class="uk-text-center" style="color: white">VCN</td>
                                <td class="uk-text-center" style="color: white">VTK</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $tinhs = json_decode($diemguihang->tinhs);
                                $j=0;
                            ?>
                            @foreach($tinhs as $tinh)
                                <?php $j++; ?>
                                <tr class="tinh" id="{{$j}}">
                                    <td><input type="text" name="tinh[{{$j}}]" placeholder="An Giang" required="" value="{{$tinh->{'tinh'} }}"></td>
                                    <td>
                                        <input type="text" name="mavung[{{$j}}]" placeholder="H" required="" value="{{$tinh->{'mavung'} }}">
                                    </td>
                                    <td>
                                        <input type="text" name="khuvuctra[{{$j}}]" placeholder="Tp,Long Xuyên" required="" value="{{$tinh->{'khuvuctra'} }}">
                                    </td>
                                    <td>
                                        <input type="text" name="CPN[{{$j}}]" placeholder="20h-24h" required="" value="{{$tinh->{'CPN'} }}">
                                    </td>
                                    <td><input type="text" name="VCN[{{$j}}]" placeholder="24h-32h" required="" value="{{$tinh->{'VCN'} }}"></td>
                                    <td><input type="text" name="VTK[{{$j}}]" placeholder="1.5-2 ngày" required="" value="{{$tinh->{'VTK'} }}"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Sửa điểm gửi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
