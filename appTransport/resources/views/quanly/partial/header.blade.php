<div class="row " style="height:60px;background:#FBB03B ">
    <div class="col-sm-1"></div>
    <div class="col-sm-3">
        <img src="{{asset('images/front/logo/logo2_hh.png')}}" style="height: 100%;max-height: 60px" alt="QuyLong">
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
        <p style="color: white;margin: 0px auto;float: right;margin-top: 20px">Hotline: <span style="font-weight: bold">1900 8052</span>   07:00 -21:00, Thứ 2 - Chủ Nhật</p>
    </div>
    <div class="col-sm-3" style="height: 100%">
        <div class="row topk">
            <ul>
                @if(Auth::user()==NULL)
                    <a href="{{url('admin/cai-dat')}}"><li><i class="fa fa-cog" aria-hidden="true" style="font-size: 30px;color: white"></i></li></a>
                    @if (Route::has('admin.register'))
                        <a href="{{url('admin/register') }}"><li style="color:white">Đăng ký</li></a>
                    @endif
                    @if (Route::has('admin.login'))
                        <a href="{{url('admin/login') }}"><li style="color:white">Đăng nhập</li></a>
                    @endif
                @else
                    <li><i class="fa fa-user-o userhead" aria-hidden="true" style="font-size: 30px;color: white"></i></li>
                    <a href="{{url('admin/cai-dat')}}"><li><i class="fa fa-cog" aria-hidden="true" style="font-size: 30px;color: white"></i></li></a>
                    <a href="{{ url('admin/logout') }}"><li style="color:white">Đăng Xuất</li></a>
                @endauth
            </ul>

        </div>
    </div>
</div>
