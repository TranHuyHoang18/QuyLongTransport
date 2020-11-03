<div class="home__block__tracuu">
    <div class="home__block__tracuu__bg uk-background-norepeat uk-section uk-background-center-center" data-src="{{asset('frontend/images/tracuuvc/bg3.png')}}" uk-img>
        <div class="uk-container">
            <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span>TRA CỨU CƯỚC VẬN CHUYỂN TẠI ĐÂY</span></div>
            <div class="uk-flex-right@m" uk-grid>
                <div class="uk-width-2-5@m uk-flex-last@m">
                    <div class="">
                        <ul class="uk-subnav uk-subnav-pill tracuu__tab uk-grid-5" uk-switcher>
                            <li class="tracuu__tab__item"><a class="tracuu__tab__link" href="#">Hàng hóa</a></li>
                            <li class="tracuu__tab__item"><a class="tracuu__tab__link" href="#">Xe máy</a></li>
                            <li class="tracuu__tab__item"><a class="tracuu__tab__link" href="#">Thú cưng</a></li>
                            <li class="tracuu__tab__item"><a class="tracuu__tab__link" href="#">Chuyển nhà</a></li>
                        </ul>
                        <ul class="uk-switcher">
                            <li>
                                <div class="uk-card uk-card-default tracuu__card1">
                                    <div class="uk-card-body uk-padding-small">
                                        <form action="{{url('/tra-cuu/hang-hoa')}}" method="post" class="uk-grid-small" uk-grid>
                                            @csrf
                                            <div class="uk-width-3-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Gửi từ</label>
                                                <div class="uk-form-controls">
                                                    @if(session()->has('tinhgui'))
                                                        <div class="alert alert-danger">
                                                            {{ session()->get('tinhgui') }}
                                                        </div>
                                                    @endif
                                                    <div class="uk-child-width-1-1 uk-grid-10" uk-grid>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select name="tinh_gui" onchange="resetHuyen(this)" >
                                                                    <option value="0">Chọn Tỉnh/TP</option>
                                                                    @foreach($diemguihangs as $diemguihang)
                                                                        <option value="{{$diemguihang->id_tinh}}">{{$diemguihang->diemguihang}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            @if(session()->has('huyengui'))
                                                                <div class="alert alert-danger">
                                                                    {{ session()->get('huyengui') }}
                                                                </div>
                                                            @endif
                                                            <div id="tmp" class="uk-width-1-1"  uk-form-custom="target: > * > span:first-child">
                                                                <select  name="kk">
                                                                    <option >{{'    Chọn Quận/Huyện'}}</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>

                                                            @foreach($tinhs as $tinh)
                                                                <div class="uk-width-1-1"  id="{{$tinh->id+400}}" uk-form-custom="target: > * > span:first-child" style="display: none">
                                                                    <select name="huyen_gui[{{$tinh->id}}]"  >
                                                                        <?php
                                                                        $huyens = json_decode($tinh->huyen);
                                                                        ?>
                                                                        @for($i=1;$i<=$tinh->n_huyen;$i++)
                                                                            <option value="{{$i}}" >{{$huyens[$i]}}</option>
                                                                        @endfor
                                                                    </select>
                                                                    <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                        <span></span>
                                                                        <span uk-icon="icon: menu"></span>
                                                                    </button>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <script type="text/javascript">
                                                            function resetHuyen(obj)
                                                            {
                                                                let options = obj.value;
                                                                for(let i=1;i<=63;i++)
                                                                    document.getElementById(400+i).style.display="none";
                                                                document.getElementById('tmp').style.display="none";
                                                                document.getElementById('tmp1').style.display="none";
                                                                document.getElementById(parseInt(obj.value)+400).style.display="block";
                                                                let x = document.getElementsByClassName('tinhnhan');
                                                                for(let j=0;j<x.length;j++)
                                                                {
                                                                    x[j].style.display="none";
                                                                }
                                                                document.getElementById(parseInt(obj.value)+500).style.display="block";
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Hình thức vận chuyển</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                        <select name="hinhthucvc">
                                                            <option value="Vp-Vp">Vp-Vp</option>
                                                            <option value="door to door">Door to door</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Gửi đến</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-child-width-1-1 uk-grid-10" uk-grid>
                                                        <div>
                                                            @if(session()->has('tinhnhan'))
                                                                <div class="alert alert-danger">
                                                                    {{ session()->get('tinhnhan') }}
                                                                </div>
                                                            @endif
                                                            <div id="tmp1" class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select name="cc">
                                                                    <option >{{'    Chọn Tỉnh/TP'}}</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                            @foreach($diemguihangs as $diemguihang)
                                                                <div  class="tinhnhan" id="{{$diemguihang->id_tinh+500}}" style="display: none" class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                    <select name="tinh_nhan[]" onchange="resetHuyen1(this)" >
                                                                        <?php
                                                                        $tinh1s = json_decode($diemguihang->tinhs);
                                                                        ?>
                                                                        @foreach($tinh1s as $tinh)
                                                                            <option value="{{$tinh->{'id_tinh'} }}">{{$tinh->{'tinh'} }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                        <span></span>
                                                                        <span uk-icon="icon: menu"></span>
                                                                    </button>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <div>
                                                            @if(session()->has('huyennhan'))
                                                                <div class="alert alert-danger">
                                                                    {{ session()->get('huyennhan') }}
                                                                </div>
                                                            @endif
                                                            <div id="tmp2" class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select  name="kk" >
                                                                    <option >{{'    Chọn Quận/Huyện'}}</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>

                                                            @foreach($tinhs as $tinh)
                                                                <div  id="{{$tinh->id+600}}"  style="display: none"  class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                    <select name="huyen_nhan[]" >
                                                                        <?php
                                                                        $huyens = json_decode($tinh->huyen);
                                                                        ?>
                                                                        @for($i=1;$i<=$tinh->n_huyen;$i++)
                                                                            <option value="{{$i}}" >{{$huyens[$i]}}</option>
                                                                        @endfor
                                                                    </select>
                                                                    <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                        <span></span>
                                                                        <span uk-icon="icon: menu"></span>
                                                                    </button>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <script type="text/javascript">
                                                            function resetHuyen1(obj)
                                                            {
                                                                let options = obj.value;
                                                                for(let i=1;i<=63;i++)
                                                                    document.getElementById(600+i).style.display="none";
                                                                document.getElementById('tmp2').style.display="none";
                                                                document.getElementById(600+parseInt(obj.value)).style.display="block";
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Chọn gói dịch vụ</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                        <select name="loaidichvu" >
                                                            <option value  ="VCN">VCN - vận chuyển nhanh</option>
                                                            <option value="CPN">CPN - Chuyển phát nhanh</option>
                                                            <option value="VTK">VTK - Vận chuyển tiết kiệm</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-5">
                                                <div class="uk-child-width-auto@s uk-grid-small" uk-grid>
                                                    <div>
                                                        <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Cân nặng</label>
                                                        @error('kg')
                                                        <div class="alert alert-danger">{{ 'Chưa điền Cân nặng' }}</div>
                                                        @enderror
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input uk-form-width-small tracuu__card1__input" id="form-stacked-text" type="text" name="kg" placeholder="100" value="" required=""">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Đơn vị</label>
                                                        <div class="uk-form-controls">
                                                            <div class="" uk-form-custom="target: > * > span:first-child">
                                                                <select name="donvi">
                                                                    <option >Kg</option>
                                                                    <option>Túi</option>
                                                                    <option>Xe</option>
                                                                    <option>Bọc</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Thu hồi biên bản</label>
                                                <div class="uk-form-controls">
                                                    <div class="" uk-form-custom="target: > * > span:first-child">
                                                        <select name="bienban">
                                                            <option value="1">có</option>
                                                            <option value="0"> Không</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn">Tra cứu ngay</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default tracuu__card1">
                                    <div class="uk-card-body uk-padding-small">
                                        <form class="uk-grid-small" uk-grid>
                                            <div class="uk-width-3-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Gửi từ</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-child-width-1-1 uk-grid-10" uk-grid>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Tỉnh/TP</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Quận/ Huyện</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Hình thức vận chuyển</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                        <select>
                                                            <option value="">Chọn hình thức</option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">Hà Nam</option>
                                                            <option value="3">Đà Nẵng</option>
                                                            <option value="4">TP. Hồ Chí Minh</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Gửi đến</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-child-width-1-1 uk-grid-10" uk-grid>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Tỉnh/TP</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Quận/ Huyện</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Chọn gói dịch vụ</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                        <select>
                                                            <option value="">Chọn dịch vụ</option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">Hà Nam</option>
                                                            <option value="3">Đà Nẵng</option>
                                                            <option value="4">TP. Hồ Chí Minh</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-5">
                                                <div class="uk-child-width-auto@s uk-grid-small" uk-grid>
                                                    <div>
                                                        <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Cân nặng</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input uk-form-width-small tracuu__card1__input" id="form-stacked-text" type="text" placeholder="100">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Đơn vị</label>
                                                        <div class="uk-form-controls">
                                                            <div class="" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">kg</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Thu hồi biên bản</label>
                                                <div class="uk-form-controls">
                                                    <div class="" uk-form-custom="target: > * > span:first-child">
                                                        <select>
                                                            <option value="">Chọn</option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">Hà Nam</option>
                                                            <option value="3">Đà Nẵng</option>
                                                            <option value="4">TP. Hồ Chí Minh</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn">Tra cứu ngay</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default tracuu__card1">
                                    <div class="uk-card-body uk-padding-small">
                                        <form class="uk-grid-small" uk-grid>
                                            <div class="uk-width-3-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Gửi từ</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-child-width-1-1 uk-grid-10" uk-grid>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Tỉnh/TP</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Quận/ Huyện</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Hình thức vận chuyển</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                        <select>
                                                            <option value="">Chọn hình thức</option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">Hà Nam</option>
                                                            <option value="3">Đà Nẵng</option>
                                                            <option value="4">TP. Hồ Chí Minh</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Gửi đến</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-child-width-1-1 uk-grid-10" uk-grid>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Tỉnh/TP</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Quận/ Huyện</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Chọn gói dịch vụ</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                        <select>
                                                            <option value="">Chọn dịch vụ</option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">Hà Nam</option>
                                                            <option value="3">Đà Nẵng</option>
                                                            <option value="4">TP. Hồ Chí Minh</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-5">
                                                <div class="uk-child-width-auto@s uk-grid-small" uk-grid>
                                                    <div>
                                                        <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Cân nặng</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input uk-form-width-small tracuu__card1__input" id="form-stacked-text" type="text" placeholder="100">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Đơn vị</label>
                                                        <div class="uk-form-controls">
                                                            <div class="" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">kg</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Thu hồi biên bản</label>
                                                <div class="uk-form-controls">
                                                    <div class="" uk-form-custom="target: > * > span:first-child">
                                                        <select>
                                                            <option value="">Chọn</option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">Hà Nam</option>
                                                            <option value="3">Đà Nẵng</option>
                                                            <option value="4">TP. Hồ Chí Minh</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn">Tra cứu ngay</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default tracuu__card1">
                                    <div class="uk-card-body uk-padding-small">
                                        <form class="uk-grid-small" uk-grid>
                                            <div class="uk-width-3-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Gửi từ</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-child-width-1-1 uk-grid-10" uk-grid>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Tỉnh/TP</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Quận/ Huyện</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Hình thức vận chuyển</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                        <select>
                                                            <option value="">Chọn hình thức</option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">Hà Nam</option>
                                                            <option value="3">Đà Nẵng</option>
                                                            <option value="4">TP. Hồ Chí Minh</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Gửi đến</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-child-width-1-1 uk-grid-10" uk-grid>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Tỉnh/TP</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">Chọn Quận/ Huyện</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Chọn gói dịch vụ</label>
                                                <div class="uk-form-controls">
                                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                        <select>
                                                            <option value="">Chọn dịch vụ</option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">Hà Nam</option>
                                                            <option value="3">Đà Nẵng</option>
                                                            <option value="4">TP. Hồ Chí Minh</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-3-5">
                                                <div class="uk-child-width-auto@s uk-grid-small" uk-grid>
                                                    <div>
                                                        <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Cân nặng</label>
                                                        <div class="uk-form-controls">
                                                            <input class="uk-input uk-form-width-small tracuu__card1__input" id="form-stacked-text" type="text" placeholder="100">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Đơn vị</label>
                                                        <div class="uk-form-controls">
                                                            <div class="" uk-form-custom="target: > * > span:first-child">
                                                                <select>
                                                                    <option value="">kg</option>
                                                                    <option value="1">Hà Nội</option>
                                                                    <option value="2">Hà Nam</option>
                                                                    <option value="3">Đà Nẵng</option>
                                                                    <option value="4">TP. Hồ Chí Minh</option>
                                                                </select>
                                                                <button class="uk-button uk-button-default uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                                    <span></span>
                                                                    <span uk-icon="icon: menu"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="uk-width-2-5">
                                                <label class="uk-form-label tracuu__card1__label" for="form-stacked-text">Thu hồi biên bản</label>
                                                <div class="uk-form-controls">
                                                    <div class="" uk-form-custom="target: > * > span:first-child">
                                                        <select>
                                                            <option value="">Chọn</option>
                                                            <option value="1">Hà Nội</option>
                                                            <option value="2">Hà Nam</option>
                                                            <option value="3">Đà Nẵng</option>
                                                            <option value="4">TP. Hồ Chí Minh</option>
                                                        </select>
                                                        <button class="uk-button uk-button-default uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                                            <span></span>
                                                            <span uk-icon="icon: menu"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn">Tra cứu ngay</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-text-center uk-hidden@m">
                        <img src="{{asset('frontend/images/tracuuvc/background.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
