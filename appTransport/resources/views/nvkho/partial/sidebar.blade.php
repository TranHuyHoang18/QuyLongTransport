<div class="sidebar" style="height:100% ">
    <ul style="margin-top: 3%">
        <a href="{{url('nhan-vien-kho')}}"><li><i class="fa fa-home" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i> Trang chủ</li></a>
        <li>
            <i class="fa fa-suitcase" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Đơn hàng</span>
            <button id="btn-open-sub1" onclick="opent('sub1')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub1" onclick="closet('sub1')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub1" style="display: none">
                <a href="{{url('nhan-vien-kho/don-hang')}}" ><li>Chưa có tài xế</li></a>
                <a href="{{url('nhan-vien-kho/don-hang/all')}}" ><li>Danh sách đơn hàng</li></a>
            </ul>
        </li>
        <li>
            <i class="fa fa-suitcase" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Tài Xế</span>
            <button id="btn-open-sub2" onclick="opent('sub2')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub2" onclick="closet('sub2')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub2" style="display: none">
                <a href="{{url('nhan-vien-kho/tai-xe')}}" ><li>Danh sách tài xế</li></a>
                <a href="{{url('nhan-vien-kho/tai-xe/don-hang')}}" ><li>Danh sách đơn hàng</li></a>
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


