@extends('nvkho.layouts.LoginLayout')
@section('title')
    Nhân viên Kho
@endsection
@section('content')

    <div class="col-sm-1"></div>
    <div class="col-sm-6">
        <img src="{{asset('images/front/background/back_11.png')}}" style="width: 90%;margin-left: 5%;margin-top: 30%">
    </div>
    <div class="col-sm-4">
        <form method="POST" action="{{ url('nhan-vien-kho/login') }}">
            @csrf
            <div class="row" style="background: #FFFFFF;border: 1px solid #707070;border-radius: 5px 5px 5px;box-shadow: 2px 2px #707070;padding-bottom: 10%">
                <div class="row" style="text-align: center;margin-top: 5%">
                    <img src="{{asset('images/front/icon/user_1.png')}}" style="width: 150px;margin: 0px auto;">
                </div>
                <div class="row" style="margin-top: 8%;background:#E6E7E8;border-radius: 20px 20px 20px 20px;width: 80%;margin-left: 10%;height: 50px">
                    <input id="email" type="email" name="email" placeholder="       Email" style="background: none;border: none;height: 100%;float: left;color:#666666;width: 80%" required autocomplete="email" autofocus>
                    <img src="{{asset('images/front/icon/user_2.png')}}"  style="float: right;width: 30px;margin-right: 20px;margin-top: 10px">
                </div>
                <div class="row" style="margin-top: 8%;background:#E6E7E8;border-radius: 20px 20px 20px 20px;width: 80%;margin-left: 10%;height: 50px">
                    <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="       Mật khẩu" style="background: none;border: none;height: 100%;float: left;color:#666666;width: 80% ">
                    <img src="{{asset('images/front/icon/lock_1.png')}}"  style="float: right;width: 30px;margin-right: 20px;margin-top: 10px">
                </div>
                <div class="row" style="margin-top: 8%;width: 80%;margin-left: 10%">
                    <input type="radio" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >
                    <label style="color: #939598;font-size: 18px">
                        {{ __('Lưu đăng nhập') }}
                    </label>
                    <a class="btn btn-link" href="#" style="color: #939598;font-size: 18px">
                        {{ __('Quên mật khẩu') }}
                    </a>
                </div>

                <div class="row" style="margin-top: 8%;text-align: center">
                   <button style="border-radius: 20px 20px 20px 20px;background: #F7931E;color: #FFFFFF;font-size: 24px;text-align: center;padding: 5px 20px 5px 20px;border: none"> Đăng nhập</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-1"></div>

@endsection

