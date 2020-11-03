<div class="row " style="height:60px;background:#FBB03B;width: 100%">
    <div class="row" style="width: 70%;float: left;background:#FBB03B">
        <img src="{{asset('images/front/logo/logo2_hh.png')}}" style="height: 100%;max-height: 60px" alt="QuyLong">
    </div>
    <div class="row" style="width: 30%;float: right;background:#4D4D4D;height: 60px;text-align: center;padding-top: 15px">
        @if(Auth::user()==NULL)
            <a href="{{url('/tai-xe/login')}}" style="color: white;font-size: 14px;font-weight: bold;">Đăng nhập</a>
        @else
            <a href="{{url('/tai-xe/logout')}}" style="color: white;font-size: 14px;font-weight: bold;">Đăng xuất</a>
        @endauth
    </div>
</div>
