@extends('nvkho.layouts.NewHomepageLayout')
@section('title')
    Danh sách đơn hàng của các tài xế
@endsection

@section('content')
    <div class="uk-card uk-card-default cardBox uk-margin">
        <div class="cardBox__header uk-card-header uk-background-mySin">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">Danh sách đơn hàng của các tài xế</span>
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
                        <th class="uk-text-center" style="border-right: 1px dashed white">Họ và Tên</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Email</th>
                        <th class="uk-text-center" style="border-right: 1px dashed white">Đang vận chuyển</th>
                        <th class="uk-text-center">Chi tiết</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0; ?>
                    @foreach($taixes as $taixe)
                        <?php  $i++; ?>
                        <tr>
                            <td class="uk-text-center">{{$i}}</td>
                            <td class="uk-text-left" style="padding-left: 20px">{{$taixe->name}}</td>
                            <td class="uk-text-left" style="padding-left: 20px">{{$taixe->email}}</td>
                            <td class="uk-text-center" style="border-right: none">
                                {{count($donhangs[$taixe->id]).' Đơn hàng'}}
                            </td>
                            <td class="uk-text-center">
                                <button id ="btnopen-{{$taixe->id}}" onclick="openCK({{$taixe->id}})" style="color: #FFAA00;font-style: italic;border: none;background: none">Chi tiết</button>
                                <button id ="btnclose-{{$taixe->id}}" onclick="closeCK({{$taixe->id}})" style="color: #FFAA00;font-style: italic;border: none;background: none;display: none">ẩn</button>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @foreach($taixes as $taixe)
        <div class="detail-dh" id="detail-{{$taixe->id}}" style="margin-top: 2%;width:96%;margin-left: 2%;display: none" >
            <div class="uk-card uk-card-default cardBox uk-margin">
                <div class="cardBox__header uk-card-header uk-background-mySin">
                    <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                        <div>
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">Danh sách hàng hóa </span>
                                    <span class="uk-text-italic" style="font-size: large">{{$taixe->name}}</span>
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
                                <th class="uk-text-center" style="border-right: 1px dashed white">Mã đơn hàng</th>
                                <th class="uk-text-center" style="border-right: 1px dashed white">Tên mặt hàng</th>
                                <th class="uk-text-center" style="border-right: 1px dashed white">	Nơi đến</th>
                                <th class="uk-text-center">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=0;?>
                            @foreach($donhangs[$taixe->id] as $tmp)
                                <?php $i++; ?>
                                <tr>
                                    <td class="uk-text-center">{{$i}}</td>
                                    <td class="uk-text-left" style="padding-left: 20px">{{$tmp->madonhang}}</td>
                                    <?php $info_hanghoa = json_decode($tmp->info_hanghoa); ?>
                                    <td class="uk-text-left" style="padding-left: 20px">{{$info_hanghoa->{'ten'} }}</td>
                                    <?php $info_vanchuyen = json_decode($tmp->info_vanchuyen); ?>
                                    <td class="uk-text-center" style="border-right: none">
                                        {{$info_vanchuyen->{'noiden'} }}
                                    </td>
                                    <td class="uk-text-center">
                                        <a href="{{url('nhan-vien-kho/set-tai-xe/'.$tmp->id.'/0')}}">
                                            <button style="color: #FFAA00;font-style: italic;border: none;background: none">Xóa</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script type="text/javascript">
        function openCK(id)
        {
            x = document.getElementsByClassName('detail-dh');
            for(let j=0;j<x.length;j++)
            {
                x[j].style.display = "none";
            }
            document.getElementById('detail-'+id).style.display="block";
            document.getElementById('btnclose-'+id).style.display="table-row";
            document.getElementById('btnopen-'+id).style.display="none";
        }
        function closeCK(id)
        {
            document.getElementById('detail-'+id).style.display="none";
            document.getElementById('btnclose-'+id).style.display="none";
            document.getElementById('btnopen-'+id).style.display="table-row";
        }
    </script>
@endsection

