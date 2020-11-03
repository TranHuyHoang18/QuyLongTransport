<div class="sidebar">
    <ul style="margin-top: 3%">
        <a href="{{url('admin')}}"><li><i class="fa fa-home" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i> Trang chủ</li></a>
        <li>
            <i class="fa fa-list-alt" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Quản lý</span>
            <button id="btn-open-sub1" onclick="opent('sub1')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub1" onclick="closet('sub1')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub1" style="display: none">
                <a href="{{url('admin/don-hang')}}"><li>Danh sách đơn hàng</li></a>
                <a href="{{url('admin/thanh-toan')}}"><li>Quản lý thanh toán</li></a>
            </ul>
        </li>
        <li>
            <i class="fa fa-suitcase" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Tra cứu</span>
            <button id="btn-open-sub2" onclick="opent('sub2')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub2" onclick="closet('sub2')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub2" style="display: none">
                <a href="{{url('admin/tra-cuu/don-hang')}}" ><li>Tra cứu đơn hàng</li></a>
                <a href="{{url('admin/tra-cuu/bang-cuoc')}}" ><li>Tra cứu bảng cước</li></a>
            </ul>
        </li>
        <li>
            <a href="{{url('admin/nhan-vien/')}}" ><i class="fa fa-users" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
                <span style="color: white">Tài Khoản</span></a>
            <button id="btn-open-sub3" onclick="opent('sub3')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub3" onclick="closet('sub3')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub3" style="display: none">
                <a href="{{url('admin/tai-khoan/quan-ly')}}" ><li>Quản lý(theo dõi)</li></a><br>
                <a href="{{url('admin/tai-khoan/ke-toan')}}" ><li>Kế Toán</li></a><br>
                <a href="{{url('admin/tai-khoan/nhan-vien-sale')}}" ><li>Nhân viên Sale</li></a><br>
                <a href="{{url('admin/tai-khoan/tai-xe')}}" ><li>Tài Xế</li></a><br>
                <a href="{{url('admin/tai-khoan/nv-kho')}}" ><li>Nhân viên kho hàng</li></a><br>
                <a href="{{url('admin/tai-khoan/khach-hang')}}" ><li>Khách hàng</li></a><br>
                <a href="{{url('admin/tai-khoan/doi-tac')}}" ><li>Đối tác</li></a><br>
            </ul>
        </li>
        <li>
            <i class="fa fa-th-list" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Danh Mục</span>
            <button id="btn-open-sub4" onclick="opent('sub4')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub4" onclick="closet('sub4')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub4" style="display: none">
                <a href="{{url('admin/danh-muc/dich-vu')}}" ><li>Dịch Vụ</li></a><br>
                <a href="{{url('admin/danh-muc/gia-cuoc')}}" ><li>Giá Cước</li></a><br>
                <a href="{{url('admin/danh-muc/tin-tuc')}}" ><li>Tin Tức</li></a><br>
                <a href="{{url('admin/danh-muc/tuyen-dung')}}" ><li>Tuyển Dụng</li></a><br>
            </ul>
        </li>
        <li>
            <i class="fa fa-file-text" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Bài Viết</span>
            <button id="btn-open-sub5" onclick="opent('sub5')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub5" onclick="closet('sub5')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub5" style="display: none">
                <a href="{{url('admin/bai-viet/dich-vu')}}" ><li>Dịch Vụ</li></a><br>
                <a href="{{url('admin/bai-viet/gia-cuoc')}}" ><li>Giá Cước</li></a><br>
                <a href="{{url('admin/bai-viet/tin-tuc')}}" ><li>Tin Tức</li></a><br>
                <a href="{{url('admin/bai-viet/tuyen-dung')}}" ><li>Tuyển Dụng</li></a><br>
            </ul>
        </li>
        <li>
            <i class="fa fa-search" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Quản lý Tra Cứu</span>
            <button id="btn-open-sub6" onclick="opent('sub6')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub6" onclick="closet('sub6')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub6" style="display: none">
                <a href="{{url('admin/diem-gui-hang')}}" ><li>Điểm gửi hàng</li></a>
                <a href="{{url('admin/cuoc-van-chuyen')}}" ><li>Bảng cước</li></a>
                <a href="{{url('admin/buu-cuc')}}" ><li>Bưu cục</li></a>
            </ul>
        </li>
        <li>
            <i class="fa fa-cog" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Cài đặt</span>
            <button id="btn-open-sub7" onclick="opent('sub7')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub7" onclick="closet('sub7')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub7" style="display: none">
                <a href="{{url('admin/cai-dat/trang-chu')}}" ><li>Trang chủ</li></a>
                <a href="{{url('admin/cai-dat/lien-he')}}" ><li>Liên Hệ</li></a>
                <a href="{{url('admin/cai-dat/media')}}" ><li>Media</li></a>
            </ul>
        </li>
        <li>
            <i class="fa fa-address-book" aria-hidden="true" style="margin-right: 10px;color: #FBB03B;font-size: 30px"></i>
            <span style="color: white">Trung tâm hỗ trợ</span>
            <button id="btn-open-sub8" onclick="opent('sub8')" style="border: none;background: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <button id="btn-close-sub8" onclick="closet('sub8')" style="border: none;background: none;display: none" ><i class="fa fa-angle-double-down" aria-hidden="true" style="margin-left: 10px;color: white;font-size: 20px"></i></button>
            <ul id="sub8" style="display: none">
                <a href="{{url('admin/trung-tam-ho-tro/newsletter')}}" ><li>Newsletter</li></a>
                <a href="{{url('admin/trung-tam-ho-tro/tu-van-khach-hang')}}" ><li>Tư vấn khách hàng</li></a>
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
