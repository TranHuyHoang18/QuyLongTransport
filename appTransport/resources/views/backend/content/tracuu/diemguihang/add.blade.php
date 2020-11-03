@extends('backend.layouts.homepageLayout')
@section('title')
    Thêm điểm gửi hàng
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
            <h4 class="tittle-w3-agileits mb-4">Thêm Điểm gửi hàng</h4>
            <form action="{{url('admin/diem-gui-hang/add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tên điểm gửi hàng</label>
                    <div class="col-sm-9">
                        <input type="text" name="diemguihang" class="form-control" id="inputEmail3"
                               placeholder="vd: tp. Hồ Chí minh" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Vị Trí</label>
                    <div class="col-sm-9">
                        <select name="id_tinh" style="width: 40%">
                            <option value="0">Chưa chọn</option>
                            @foreach($tinhs as $tinh)
                                <option value="{{$tinh->id}}">{{$tinh->tinh}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Danh sách tỉnh gửi đến</label>
                    <div class="col-sm-9">
                        <table>
                            <thead>
                                <tr>

                                    <td>Tỉnh</td>
                                    <td>Mã Vùng</td>
                                    <td>Khu vực trả</td>
                                    <td>CPN</td>
                                    <td>VCN</td>
                                    <td>VTK</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tinh" id="1">

                                    <td><input type="text" name="tinh[1]" placeholder="An Giang" required=""></td>
                                    <td>
                                        <input type="text" name="mavung[1]" placeholder="H" required="">
                                    </td>
                                    <td>
                                        <input type="text" name="khuvuctra[1]" placeholder="Tp,Long Xuyên" required="">
                                    </td>
                                    <td>
                                        <input type="text" name="CPN[1]" placeholder="20h-24h" required="">
                                    </td>
                                    <td><input type="text" name="VCN[1]" placeholder="24h-32h" required=""></td>
                                    <td><input type="text" name="VTK[1]" placeholder="1.5-2 ngày" required=""></td>
                                </tr>


                            </tbody>

                        </table>
                            <div class="form-group row">
                                <a id="plus-image" class="btn btn-success">
                                    <i class="fa fa-plus"></i>Thêm
                                </a>
                            </div>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Thêm điểm gửi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script type="text/javascript">
    function resetHuyen(obj)
    {
        let options = obj.value;
        console.log(options);
        for(let i=1;i<=63;i++)
        {
            document.getElementById(i).style="display:none";
        }
        document.getElementById(obj.value).style="display:block";
    }
    function resetHuyen1(obj)
    {
        let options = obj.value;
        console.log(parseInt(options) +100);
        for(let i=1;i<=63;i++)
        {
            document.getElementById(100+i).style="display:none";
        }
        document.getElementById(100+parseInt(obj.value)).style="display:block";
    }

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#plus-image').on('click', function (e) {
            e.preventDefault();
            let tinh_count = parseInt($('.tinh').length);
            let next = tinh_count + 1;
            let html = '';
            console.log(tinh_count);
            console.log(next);
            html += '<tr class="tinh" id="'+next+'">\n' +

                '                                    <td><input type="text" name="tinh['+next+']" placeholder="An Giang" required=""></td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="mavung['+next+']" placeholder="H" required="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="khuvuctra['+next+']" placeholder="Tp,Long Xuyên" required="">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="CPN['+next+']" placeholder="20h-24h" required="">\n' +
                '                                    </td>\n' +
                '                                    <td><input type="text" name="VCN['+next+']" placeholder="24h-32h" required=""></td>\n' +
                '                                    <td><input type="text" name="VTK['+next+']" placeholder="1.5-2 ngày" required=""></td>\n' +
                '                                </tr>';
            let box = $(this).closest('.form-group');
            $(html).insertBefore(box);
        });
    });
</script>
@endsection
