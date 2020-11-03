<div class="row" style="position: fixed;width: 300px;bottom: 0px;right: 0px; background:rgba(0,0,0,0)">
    <div class="row" id="mess" >
        <a onclick="close1()"><img src="{{asset('images/front/icon/mes_4.png')}}" style="height: 15px;bottom: 170px;right: 165px;position: fixed;"></a>
        <a onclick="startchat()"><img src="{{asset('images/front/icon/mes_3.png')}}" style="height: 100px;bottom: 75px;right: 180px;position: fixed;"></a>
    </div>
    <div class="row" id="icon_mess">
        <img id ="icon_mess1" src="{{asset('images/front/icon/mes.png')}}" style="height: 150px;bottom: 0;right: 100px;position: fixed;">
        <a onclick="open1()"><img src="{{asset('images/front/icon/mes_1.png')}}" style="height: 60px;bottom: 2px;right: 40px;position: fixed;"></a>
    </div>
    <div class="row formchat" id="formchat" style="display: none">
        <div class="row head">
            <ul>
                <li style="margin-left: -30px;margin-top: 10px">
                    <a href="{{url('/')}}" ><img src="{{asset('images/front/logo/icon.png')}}" style="width: 40px;"></a>
                </li>
                <li>
                    <h5 style="color: white">QUY LONG LOGISTICS</h5>
                    <h5 style="color: white">Chúng tôi thường phản hồi ngay</h5>
                </li>
                <li style="margin-top: 10px">
                    <button onclick="close_form()" style="margin: 0;padding: 0;background: none;border: none"><img src="{{asset('images/front/icon/x.png')}}" style="width: 30px;margin: 0px auto"></button>
                </li>
            </ul>
        </div>
        <div class="row body">
            <div class="row" style="margin-top: 10px">
                <div class="col-sm-2">
                    <a href="{{url('/')}}" ><img src="{{asset('images/front/logo/icon.png')}}" style="width: 30px;"></a>
                </div>
                <div class="col-sm-10">
                    <div class="row" style="background: #DDE5EC;box-shadow: 2px 2px #6B6B6B;border-radius: 0px 5px 5px 5px;padding: 10px 5px 10px 5px;">
                        <p style="color: #6B6B6B;font-size: 14px">Chúng tôi luôn ở đây để hỗ trợ bạn, bạn cần
                            tư vấn vận chuyển hàng phải không?</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-10">
                    <div class="row" style="background: #FFA00D;box-shadow: 2px 2px #6B6B6B;border-radius: 5px 0px 5px 5px;padding: 10px 5px 10px 5px; ">
                        <p style="color: #FFFFFF;font-size: 14px">Tôi muốn được tư vấn</p>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="row">

                </div>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .formchat
    {
        position: fixed;
        width: 300px;
        height: 400px;
        bottom: 0;
        right: 50px;
    }
    .formchat .row
    {
        margin-left: 0px;
    }
    .formchat .head
    {
        background-image: url("{{asset('images/front/background/back_10.png')}}");
        height: 60px;
        border-radius: 5px 5px 0px 0px;
    }
    .formchat ul li
    {
        float: left; margin-left: 0px;
        list-style: none;

    }
    .formchat .body
    {
        background: #FFFFFF;
        height:340px ;
    }
</style>
<script type="text/javascript">

   function close1()
   {
        document.getElementById('mess').style="display:none";
        document.getElementById('icon_mess1').style="display:none";
   }
   function open1()
   {
       document.getElementById('mess').style="display:block";
       document.getElementById('icon_mess1').style="display:block;height: 150px;bottom: 0;right: 100px;position: fixed;";
   }
   function startchat()
   {
       document.getElementById('mess').style="display:none";
       document.getElementById('icon_mess').style="display:none";
       document.getElementById('formchat').style="display:block";
   }
   function close_form()
   {
       document.getElementById('mess').style="display:block";
       document.getElementById('icon_mess').style="display:block";
       document.getElementById('formchat').style="display:none";
   }

</script>
