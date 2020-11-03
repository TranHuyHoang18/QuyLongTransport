<div class="sidebar" style="height:100% ">
    <ul style="margin-top: 3%">
        <a href="{{url('ketoan')}}"><li><i class="fa fa-home" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i> Trang chủ</li></a>
        <li>
            <i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Quản lý yêu cầu</span>
            <button id="btn-open-sub1" onclick="opent('sub1')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub1" onclick="closet('sub1')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub1" style="display: none">
                <a href="{{url('ketoan/yeu-cau')}}"><li>Danh sách yêu cầu</li></a>
                <a href="{{url('ketoan/yeu-cau/add')}}"><li>Tạo yêu cầu</li></a>
            </ul>
        </li>
        <li>
            <i class="fa fa-suitcase" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Đơn hàng</span>
            <button id="btn-open-sub2" onclick="opent('sub2')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub2" onclick="closet('sub2')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub2" style="display: none">
                <a href="{{url('ketoan/don-hang')}}" ><li>Danh sách đơn hàng</li></a>
                <a href="{{url('ketoan/don-hang/add')}}" ><li>Tạo đơn hàng</li></a>
                <a href="{{url('ketoan/quan-ly/thanh-toan')}}" ><li>Quản lý thanh toán</li></a>
            </ul>
        </li>

        <li>
            <i class="fa fa-users" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
                <span style="color: white">Khách hàng</span>
            <button id="btn-open-sub4" onclick="opent('sub4')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub4" onclick="closet('sub4')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub4" style="display: none">
                <a href="{{url('/ketoan/khach-hang/doi-tac')}}" ><li>Danh sách đối tác</li></a><br>
                <a href="{{url('/ketoan/khach-hang/khach-le')}}" ><li>Khách lẻ</li></a><br>
            </ul>
        </li>
    </ul>
</div>
<script type="text/javascript">
    function opent(id)
    {
        document.getElementById(id).style.display="block";
        document.getElementById('btn-open-'+id).style.display="none";
        document.getElementById('btn-close-'+id).style.display="inline";
    }
    function closet(id)
    {
        document.getElementById(id).style.display="none";
        document.getElementById('btn-open-'+id).style.display="inline";
        document.getElementById('btn-close-'+id).style.display="none";
    }
</script>


