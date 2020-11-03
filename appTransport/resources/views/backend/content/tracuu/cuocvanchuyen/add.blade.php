@extends('backend.layouts.homepageLayout')
@section('title')
    Thêm Cước vận chuyển
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
        <div class="">
            <h4 class="tittle-w3-agileits mb-4">Thêm bảng giá cước vận chuyển</h4>
            <form action="{{url('admin/cuoc-van-chuyen/add')}}" method="post" enctype="multipart/form-data" style="width: 500px">
                @csrf
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Điểm gửi hàng</label>
                    <div class="col-sm-9">
                       <select name="id_diemguihang" style="width: 60%">
                           @foreach($diemguihangs as $diemguihang)
                                <option value="{{$diemguihang->id}}">{{$diemguihang->diemguihang}}</option>
                           @endforeach
                       </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Bảng giá VCN</label>
                    <div class="col-sm-9">
                        <table >
                            <thead>
                                <tr>
                                    <td style="width: 50px">Khối lượng (kg)</td>
                                    <td style="width: 50px">A</td>
                                    <td style="width: 50px">B</td>
                                    <td style="width: 50px">C</td>
                                    <td style="width: 50px">D</td>
                                    <td style="width: 50px">E</td>
                                    <td style="width: 50px">F</td>
                                    <td style="width: 50px">G</td>
                                    <td style="width: 50px">H</td>
                                    <td style="width: 50px">I</td>
                                    <td style="width: 50px">đơn vị</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="banggia" id="1">
                                    <td><input type="text" name="VCN_khoiluong[1]" placeholder="0.1" required="" style="width: 80px"></td>
                                    <td>
                                        <input type="text" name="VCN_A[1]" placeholder="9000" required="" style="width: 80px">
                                    </td>
                                    <td>
                                        <input type="text" name="VCN_B[1]" placeholder="9000" required="" style="width: 80px">
                                    </td>
                                    <td>
                                        <input type="text" name="VCN_C[1]" placeholder="9000" required="" style="width: 80px">
                                    </td>
                                    <td>
                                        <input type="text" name="VCN_D[1]" placeholder="9000" required="" style="width: 80px">
                                    </td>
                                    <td>
                                        <input type="text" name="VCN_E[1]" placeholder="9000" required="" style="width: 80px">
                                    </td>
                                    <td>
                                        <input type="text" name="VCN_F[1]" placeholder="9000" required="" style="width: 80px">
                                    </td>
                                    <td>
                                        <input type="text" name="VCN_G[1]" placeholder="9000" required="" style="width: 80px">
                                    </td>
                                    <td>
                                        <input type="text" name="VCN_H[1]" placeholder="9000" required="" style="width: 80px">
                                    </td>
                                    <td>
                                        <input type="text" name="VCN_I[1]" placeholder="9000" required="" style="width: 80px">
                                    </td>
                                    <td>VNĐ</td>
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
                    <label for="code" class="col-sm-3 col-form-label">Bảng giá CPN</label>
                    <div class="col-sm-9">
                        <table >
                            <thead>
                            <tr>
                                <td style="width: 50px">Khối lượng (kg)</td>
                                <td style="width: 50px">A</td>
                                <td style="width: 50px">B</td>
                                <td style="width: 50px">C</td>
                                <td style="width: 50px">D</td>
                                <td style="width: 50px">E</td>
                                <td style="width: 50px">F</td>
                                <td style="width: 50px">G</td>
                                <td style="width: 50px">H</td>
                                <td style="width: 50px">I</td>
                                <td style="width: 50px">đơn vị</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="banggiak" id="1">
                                <td><input type="text" name="CPN_khoiluong[1]" placeholder="0.1" required="" style="width: 80px"></td>
                                <td>
                                    <input type="text" name="CPN_A[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="CPN_B[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="CPN_C[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="CPN_D[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="CPN_E[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="CPN_F[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="CPN_G[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="CPN_H[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="CPN_I[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>VNĐ</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="form-group row">
                            <a id="plus-imageK" class="btn btn-success">
                                <i class="fa fa-plus"></i>Thêm
                            </a>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-3 col-form-label">Bảng giá VTK</label>
                    <div class="col-sm-9">
                        <table >
                            <thead>
                            <tr>
                                <td style="width: 50px">Khối lượng (kg)</td>
                                <td style="width: 50px">A</td>
                                <td style="width: 50px">B</td>
                                <td style="width: 50px">C</td>
                                <td style="width: 50px">D</td>
                                <td style="width: 50px">E</td>
                                <td style="width: 50px">F</td>
                                <td style="width: 50px">G</td>
                                <td style="width: 50px">H</td>
                                <td style="width: 50px">I</td>
                                <td style="width: 50px">đơn vị</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="banggiaV" id="1">
                                <td><input type="text" name="VTK_khoiluong[1]" placeholder="0.1" required="" style="width: 80px"></td>
                                <td>
                                    <input type="text" name="VTK_A[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="VTK_B[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="VTK_C[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="VTK_D[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="VTK_E[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="VTK_F[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="VTK_G[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="VTK_H[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>
                                    <input type="text" name="VTK_I[1]" placeholder="9000" required="" style="width: 80px">
                                </td>
                                <td>VNĐ</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="form-group row">
                            <a id="plus-imageV" class="btn btn-success">
                                <i class="fa fa-plus"></i>Thêm
                            </a>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#plus-image').on('click', function (e) {
            e.preventDefault();
            let tinh_count = parseInt($('.banggia').length);
            let next = tinh_count + 1;
            let html = '';
            console.log(tinh_count);
            console.log(next);
            html += '<tr class="banggia" id="'+next+'">\n' +
                '                                    <td><input type="text" name="VCN_khoiluong['+next+']" placeholder="0.1" required="" style="width: 80px"></td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="VCN_A['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="VCN_B['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="VCN_C['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="VCN_D['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="VCN_E['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="VCN_F['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="VCN_G['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="VCN_H['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                    </td>\n' +
                '                                    <td>\n' +
                '                                        <input type="text" name="VCN_I['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                    </td>\n' +
                '                                    <td>VNĐ</td>\n' +
                '                                </tr>';
            let box = $(this).closest('.form-group');
            $(html).insertBefore(box);
        });
        $('#plus-imageK').on('click', function (e) {
            e.preventDefault();
            let tinh_count = parseInt($('.banggiak').length);
            let next = tinh_count + 1;
            let html = '';
            console.log(tinh_count);
            console.log(next);
            html += ' <tr class="banggiak" id="'+next+'">\n' +
                '                                <td><input type="text" name="CPN_khoiluong['+next+']" placeholder="0.1" required="" style="width: 80px"></td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="CPN_A['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="CPN_B['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="CPN_C['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="CPN_D['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="CPN_E['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="CPN_F['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="CPN_G['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="CPN_H['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="CPN_I['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>VNĐ</td>\n' +
                '                            </tr>';
            let box = $(this).closest('.form-group');
            $(html).insertBefore(box);
        });
        $('#plus-imageV').on('click', function (e) {
            e.preventDefault();
            let tinh_count = parseInt($('.banggiaV').length);
            let next = tinh_count + 1;
            let html = ' <tr class="banggiaV" id="'+next+'">\n' +
                '                                <td><input type="text" name="VTK_khoiluong['+next+']" placeholder="0.1" required="" style="width: 80px"></td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="VTK_A['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="VTK_B['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="VTK_C['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="VTK_D['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="VTK_E['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="VTK_F['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="VTK_G['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="VTK_H['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>\n' +
                '                                    <input type="text" name="VTK_I['+next+']" placeholder="9000" required="" style="width: 80px">\n' +
                '                                </td>\n' +
                '                                <td>VNĐ</td>\n' +
                '                            </tr>';
            console.log(tinh_count);
            console.log(next);
            html += '';
            let box = $(this).closest('.form-group');
            $(html).insertBefore(box);
        });
    });
</script>
@endsection
