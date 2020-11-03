@extends('nvkho.layouts.NewHomepageLayout')
@section('title')
    Đơn hàng mới chưa có tài xế
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
    @if(session()->has('success-message'))
        <div class="alert alert-success">
            {{ session()->get('success-message') }}
        </div>
    @endif
    <div class="uk-card uk-card-default cardBox uk-margin">
        <div class="cardBox__header uk-card-header uk-background-mySin">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">DANH SÁCH ĐƠN HÀNG CHƯA CÓ TÀI XẾ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardBox__body uk-card-body uk-padding-remove">
            <div class="uk-overflow-auto">
                <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                    <thead>
                    <tr>
                        <th class="uk-text-center" style="border-right: 1px dashed white">STT</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Mã Đơn hàng</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Tên mặt hàng</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Điểm đi</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Điểm đến</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Ngày tạo đơn</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Chọn tài xế</th>
                        <th class="uk-text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0;?>
                    @foreach($donhangs as $tmp)
                        <?php $i++; ?>
                        <tr>
                            <td class="uk-text-center">{{$i}}</td>
                            <td class="uk-text-left" style="padding-left: 20px">{{$tmp->madonhang}}</td>
                            <?php $info_hanghoa = json_decode($tmp->info_hanghoa); ?>
                            <td class="uk-text-left" style="padding-left: 20px">{{$info_hanghoa->{'ten'} }}</td>
                            <?php $info_vanchuyen = json_decode($tmp->info_vanchuyen); ?>
                            <td class="uk-text-left" style="padding-left: 20px">{{$info_vanchuyen->{'noidi'} }}</td>
                            <td class="uk-text-left" style="padding-left: 20px">{{$info_vanchuyen->{'noiden'} }}</td>
                            <td class="uk-text-left" style="padding-left: 20px">{{$tmp->created_at }}</td>
                            <td class="uk-text-center">
                                <select onchange="resetButton(this,{{$tmp->id}})" style="border-radius: 5px 5px 5px 5px;height: 30px">
                                    <option value="0">{{"Chưa có tài xế"}}</option>
                                    @foreach($taixes as $taixe)
                                        <option value="{{$taixe->id}}">{{$taixe->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td style="border-right: none">
                                <a id ={{'btn-luu'.$tmp->id}} href="{{url('nhan-vien-kho/set-tai-xe/'.$tmp->id.'/0')}}">
                                    <button style="color: #FFAA00;font-style: italic;border: none;background: none">Lưu</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function resetButton(obj,id)
        {
            console.log(obj.value);
            console.log(id);
            document.getElementById('btn-luu'+id).setAttribute("href","{{url('/nhan-vien-kho/set-tai-xe')}}"+"/"+id+"/"+obj.value);
        }
    </script>
@endsection

