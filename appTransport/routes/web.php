 <?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'filemanager', 'middleware' => ['auth:qtv']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::prefix('qtv')->group(function()
 {
     // Tai khoan
     Route::get('/','QTV\QTVController@index')->name('qtv');
     Route::get('/register', 'QTV\QTVController@create')->name('qtv.register');
     Route::post('/register', 'QTV\QTVController@store')->name('qtv.register.store');
     Route::get('/login','QTV\QTVLoginController@showLoginForm')->name('qtv.auth.login');
     Route::post('/login', 'QTV\QTVLoginController@login')->name('qtv.login.submit');
     Route::get('/logout/', 'QTV\QTVLoginController@logout')->name('qtv.logout');
     Route::post('/logout', 'QTV\QTVLoginController@logout')->name('qtv.auth.logout');

     // Quản trị danh mục
     Route::group(['prefix'=>'danh-muc'],function() {
         Route::group(['prefix'=>'dich-vu'],function() {
             Route::get('/', 'QTV\DanhMuc\DichVuController@index')->name('qtv.danhmuc.dichvu.index');
             Route::get('/edit/{id}', 'QTV\DanhMuc\DichVuController@edit')->name('qtv.danhmuc.dichvu.edit');
             Route::post('/edit/{id}', 'QTV\DanhMuc\DichVuController@update')->name('qtv.danhmuc.dichvu.update');
             Route::post('/store', 'QTV\DanhMuc\DichVuController@store')->name('qtv.danhmuc.dichvu.store');
             Route::get('/delete/{id}', 'QTV\DanhMuc\DichVuController@destroy')->name('qtv.danhmuc.dichvu.delete');
         });
         Route::group(['prefix'=>'gia-cuoc'],function() {
             Route::get('/', 'QTV\DanhMuc\GiaCuocController@index')->name('qtv.danhmuc.giacuoc.index');
             Route::get('/edit/{id}', 'QTV\DanhMuc\GiaCuocController@edit')->name('qtv.danhmuc.giacuoc.edit');
             Route::post('/edit/{id}', 'QTV\DanhMuc\GiaCuocController@update')->name('qtv.danhmuc.giacuoc.update');
         });
         Route::group(['prefix'=>'tin-tuc'],function() {
             Route::get('/', 'QTV\DanhMuc\TinTucController@index')->name('qtv.danhmuc.tintuc.index');
             Route::get('/edit/{id}', 'QTV\DanhMuc\TinTucController@edit')->name('qtv.danhmuc.tintuc.edit');
             Route::post('/edit/{id}', 'QTV\DanhMuc\TinTucController@update')->name('qtv.danhmuc.tintuc.update');
         });
         Route::group(['prefix'=>'tuyen-dung'],function() {
             Route::get('/', 'QTV\DanhMuc\TuyenDungController@index')->name('qtv.danhmuc.tuyendung.index');
             Route::get('/edit/{id}', 'QTV\DanhMuc\TuyenDungController@edit')->name('qtv.danhmuc.tuyendung.edit');
             Route::post('/edit/{id}', 'QTV\DanhMuc\TuyenDungController@update')->name('qtv.danhmuc.tuyendung.update');
             Route::post('/store', 'QTV\DanhMuc\TuyenDungController@store')->name('qtv.danhmuc.tuyendung.store');
             Route::get('/delete/{id}', 'QTV\DanhMuc\TuyenDungController@destroy')->name('qtv.danhmuc.tuyendung.delete');
         });
     });
     // Quản trị bài viết
     Route::group(['prefix'=>'bai-viet'],function() {
         // dịch vụ
         Route::group(['prefix'=>'dich-vu'],function() {
             Route::get('/', 'QTV\BaiViet\DichVuController@index')->name('qtv.baiviet.dichvu.index');
             Route::post('/add','QTV\BaiViet\DichVuController@store')->name('qtv.baiviet.dichvu.store');
             Route::post('/edit/{id}','QTV\BaiViet\DichVuController@update')->name('qtv.baiviet.dichvu.update');
             Route::get('/delete/{id}','QTV\BaiViet\DichVuController@destroy')->name('qtv.baiviet.dichvu.delete');
         });
         // gia cước
         Route::group(['prefix'=>'gia-cuoc'],function() {
             Route::get('/', 'QTV\BaiViet\GiaCuocController@index')->name('qtv.baiviet.giacuoc.index');
             Route::post('/add','QTV\BaiViet\GiaCuocController@store')->name('qtv.baiviet.giacuoc.store');
             Route::post('/edit/{id}','QTV\BaiViet\GiaCuocController@update')->name('qtv.baiviet.giacuoc.update');
             Route::get('/delete/{id}','QTV\BaiViet\GiaCuocController@destroy')->name('qtv.baiviet.giacuoc.delete');
         });
         // tuyển dụng
         Route::group(['prefix'=>'tuyen-dung'],function() {
             Route::get('/', 'QTV\BaiViet\TuyenDungController@index')->name('qtv.baiviet.tuyendung.index');
             Route::post('/add','QTV\BaiViet\TuyenDungController@store')->name('qtv.baiviet.tuyendung.store');
             Route::post('/edit/{id}','QTV\BaiViet\TuyenDungController@update')->name('qtv.baiviet.tuyendung.update');
             Route::get('/delete/{id}','QTV\BaiViet\TuyenDungController@destroy')->name('qtv.baiviet.tuyendung.delete');
         });
         // Tin tức
         Route::group(['prefix'=>'tin-tuc'],function() {
             Route::get('/', 'QTV\BaiViet\TinTucController@index')->name('qtv.baiviet.tintuc.index');
             Route::post('/add','QTV\BaiViet\TinTucController@store')->name('qtv.baiviet.tintuc.store');
             Route::post('/edit/{id}','QTV\BaiViet\TinTucController@update')->name('qtv.baiviet.tintuc.update');
             Route::get('/delete/{id}','QTV\BaiViet\TinTucController@destroy')->name('qtv.baiviet.tintuc.delete');
         });
         // Chinh sach
         Route::group(['prefix'=>'chinh-sach'],function() {
             Route::get('/', 'QTV\BaiViet\ChinhSachController@index')->name('qtv.baiviet.chinhsach.index');
             Route::post('/add','QTV\BaiViet\ChinhSachController@store')->name('qtv.baiviet.chinhsach.store');
             Route::post('/edit/{id}','QTV\BaiViet\ChinhSachController@update')->name('qtv.baiviet.chinhsach.update');
             Route::get('/delete/{id}','QTV\BaiViet\ChinhSachController@destroy')->name('qtv.baiviet.chinhsach.delete');
         });
     });
     // setting
     Route::group(['prefix'=>'cai-dat'],function()
     {
         // Seo page
         Route::group(['prefix'=>'seo-page'],function() {
             Route::get('/', 'QTV\Setting\SeoPageController@index')->name('qtv.cai-dat.seo-page.index');
             Route::post('/add','QTV\Setting\SeoPageController@store')->name('qtv.cai-dat.seo-page.store');
             Route::post('/edit/{id}','QTV\Setting\SeoPageController@update')->name('qtv.cai-dat.seo-page.update');
         });
         // liên hệ
         Route::group(['prefix'=>'lien-he'],function() {
             Route::get('/', 'QTV\Setting\ContactController@index')->name('qtv.cai-dat.lien-he.index');
             Route::post('/edit','QTV\Setting\ContactController@update')->name('qtv.cai-dat.lien-he.update');
         });
         // Media
         Route::group(['prefix'=>'media'],function() {
             Route::get('/', 'QTV\Setting\MediaController@index')->name('qtv.cai-dat.media.index');
         });
         // danh muc vc
         Route::group(['prefix'=>'danh-muc-vc'],function() {
             Route::get('/', 'QTV\Setting\DMVanChuyenController@index')->name('qtv.cai-dat.danh-muc-vc.index');
             Route::post('/add', 'QTV\Setting\DMVanChuyenController@store')->name('qtv.cai-dat.danh-muc-vc.store');
             Route::post('/edit/{id}', 'QTV\Setting\DMVanChuyenController@update')->name('qtv.cai-dat.danh-muc-vc.update');
         });
     });
     // quản trị gmail cần hỗ trợ
     Route::group(['prefix'=>'newsletter'],function()
     {
         Route::get('/','Admin\NewsLetterController@index')->name('admin.newsletter.index');
         Route::get('/delete/{id}','Admin\NewsLetterController@destroy')->name('admin.newsletter.delete');
     });
     // Quản trị tư vấn hỗ trợ
     Route::group(['prefix'=>'tuvan'],function()
     {
         Route::get('/','Admin\TuVanController@index')->name('admin.tuvan.index');
         Route::get('/gmail/answer/{id}','Admin\TuVanController@answer')->name('admin.tuvan.answer');
         Route::get('/detail/{id}','Admin\TuVanController@detail')->name('admin.tuvan.detail');
         Route::get('/delete/{id}','Admin\TuVanController@destroy')->name('admin.tuvan.delete');
         Route::get('/edit/{id}','Admin\NewsController@edit')->name('admin.tuvan.edit');
         Route::post('/edit/{id}','Admin\NewsController@update')->name('admin.tuvan.update');
     });

     Route::get('/address','Admin\AddressController@InitCSDL');

     // Quản trị buu cục
     Route::group(['prefix'=>'buu-cuc'],function() {
         Route::get('/', 'QTV\TraCuu\BuuCucController@index')->name('qtv.buucuc.index');
         Route::get('/add','QTV\TraCuu\BuuCucController@add')->name('qyv.buucuc.add');
         Route::post('/add','QTV\TraCuu\BuuCucController@store')->name('qtv.buucuc.store');
         Route::get('/edit/{id}','QTV\TraCuu\BuuCucController@edit')->name('qtv.buucuc.edit');
         Route::post('/edit/{id}','QTV\TraCuu\BuuCucController@update')->name('qtv.buucuc.update');
         Route::get('/delete/{id}','QTV\TraCuu\BuuCucController@destroy')->name('qtv.buucuc.delete');
     });
     // Quản trị tra cuu giá cước

     Route::group(['prefix'=>'goi-cuoc'],function() {
         Route::get('/', 'QTV\TraCuu\GiaCuocController@index')->name('qtv.goicuoc.index');
         Route::get('/add','QTV\TraCuu\GiaCuocController@add')->name('qtv.goicuoc.add');
         Route::post('/add','QTV\TraCuu\GiaCuocController@store')->name('qtv.goicuoc.store');
         Route::get('/detail/{id}','QTV\TraCuu\GiaCuocController@detail')->name('qtv.goicuoc.detail');
         Route::get('/edit/{id}','QTV\TraCuu\GiaCuocController@edit')->name('qtv.goicuoc.edit');
         Route::post('/edit/{id}','QTV\TraCuu\GiaCuocController@update')->name('qtv.goicuoc.update');
         Route::get('/delete/{id}','QTV\TraCuu\GiaCuocController@destroy')->name('qtv.goicuoc.delete');
     });
     // Quản trị điểm gửi hàng
     Route::group(['prefix'=>'diem-gui-hang'],function() {
         Route::get('/', 'QTV\TraCuu\DiemGuiHangController@index')->name('qtv.diem-gui.index');
         Route::get('/add','QTV\TraCuu\DiemGuiHangController@add')->name('qtv.diem-gui.add');
         Route::post('/add','QTV\TraCuu\DiemGuiHangController@store')->name('qtv.diem-gui.store');
         Route::get('/edit/{id}','QTV\TraCuu\DiemGuiHangController@edit')->name('qtv.diem-gui.edit');
         Route::post('/edit/{id}','QTV\TraCuu\DiemGuiHangController@update')->name('qtv.diem-gui.update');
         Route::get('/delete/{id}','QTV\TraCuu\DiemGuiHangController@destroy')->name('qtv.diem-gui.delete');
         Route::post('/import','QTV\TraCuu\DiemGuiHangController@import')->name('qtv.diem-gui.import');
     });
     Route::group(['prefix'=>'cuoc-van-chuyen'],function() {
         Route::get('/', 'QTV\TraCuu\CuocVanChuyenController@index')->name('qtv.cuoc.index');
         Route::get('/add','QTV\TraCuu\CuocVanChuyenController@add')->name('qtv.cuoc.add');
         Route::post('/add','QTV\TraCuu\CuocVanChuyenController@store')->name('qtv.cuoc.store');
         Route::get('/edit/{id}','QTV\TraCuu\CuocVanChuyenController@edit')->name('qtv.cuoc.edit');
         Route::post('/edit/{id}','QTV\TraCuu\CuocVanChuyenController@update')->name('qtv.cuoc.update');
         Route::get('/delete/{id}','QTV\TraCuu\CuocVanChuyenController@destroy')->name('qtv.cuoc.delete');
     });

 });
Route::prefix('nhanvien')->group(function() {
    // Tai khoan
    Route::get('/', 'Nhanvien\UserController@index')->name('nhanvien');
    Route::get('/login', 'Nhanvien\UserLoginController@showLoginForm')->name('nhanvien.auth.login');
    Route::post('/login', 'Nhanvien\UserLoginController@login')->name('nhanvien.login.submit');
    Route::get('/logout/', 'Nhanvien\UserLoginController@logout')->name('nhanvien.logout');
    Route::post('/logout', 'Nhanvien\UserLoginController@logout')->name('nhanvien.auth.logout');
    // Đơn hàng
    Route::group(['prefix'=>'don-hang'],function()
    {
        Route::get('/','Nhanvien\DonHangController@index')->name('user.donhang.index');
        Route::get('/add','Nhanvien\DonHangController@add')->name('user.donhang.add');
        Route::post('/add','Nhanvien\DonHangController@store')->name('user.donhang.store');
        Route::get('/delete/{id}','Nhanvien\DonHangController@destroy')->name('user.donhang.delete');
        Route::post('/chi-tiet/edit/{id}','Nhanvien\DonHangController@editChiTiet')->name('user.donhang.editCt');
        Route::get('/edit_status/{id}/{tt}','Nhanvien\DonHangController@editStatus')->name('user.donhang.editSt');
        Route::post('/tracking/{id}','Nhanvien\DonHangController@tracking')->name('user.donhang.tracking');
        Route::get('/tracking/delete/{madonhang}/{stt}','Nhanvien\DonHangController@DeleteTracking')->name('user.donhang.tracking.delete');
    });
    // Yeu Cau
    Route::group(['prefix'=>'yeu-cau'],function()
    {
        Route::get('/','Nhanvien\YeuCauController@index')->name('user.yeucau.index');
        Route::get('/add','Nhanvien\YeuCauController@add')->name('user.yeucau.add');
        Route::post('/add','Nhanvien\YeuCauController@store')->name('user.yeucau.store');
        Route::get('/tiep-nhan/{id}','Nhanvien\YeuCauController@tiepnhan')->name('user.yeucau.tiepnhan');
        Route::get('/delete/{id}','Nhanvien\YeuCauController@destroy')->name('user.yeucau.delete');
    });
    // Khachs hang
    Route::group(['prefix'=>'khach-hang'],function()
    {
        Route::group(['prefix'=>'doi-tac'],function()
        {
            Route::get('/','Nhanvien\KhachHangController@DoiTacIndex')->name('user.khachhang.doitac.index');
            Route::post('/add','Nhanvien\KhachHangController@AddDoiTac')->name('user.khachhang.doitac.add');
            Route::get('/delete/{id}','Nhanvien\KhachHangController@DeleteDoiTac')->name('user.khachhang.doitac.delete');
        });
        Route::group(['prefix'=>'khach-le'],function()
        {
            Route::get('/','Nhanvien\KhachHangController@KhachLeIndex')->name('user.khachhang.khachle.index');
            Route::post('/add','Nhanvien\KhachHangController@AddKhachLe')->name('user.khachhang.khachle.add');
            Route::get('/delete/{id}','Nhanvien\KhachHangController@DeleteKhachLe')->name('user.khachhang.khachle.delete');
        });
        //thong ke
        Route::get('/thong-ke/{id}','Nhanvien\KhachHangController@ThongkeKhachle')->name('user.khachhang.thongke');
        Route::post('/thong-ke/{id}','Nhanvien\KhachHangController@thongkewithtime')->name('user.khachhang.thongkewithtime');


    });
    // Tra cuu
    Route::group(['prefix'=>'tra-cuu'],function()
    {
        Route::post('/don-hang/','Nhanvien\TraCuuController@search_donhang')->name('user.tracuu.search-donhang');
        Route::get('/bang-cuoc/','Nhanvien\TraCuuController@show_cuoc')->name('user.tracuu.show-cuoc');
        Route::get('/diem-gui-hang/','Nhanvien\TraCuuController@show_diemguihang')->name('user.tracuu.show-diemguihang');
    });
    // gmail cần hỗ trợ
    Route::group(['prefix'=>'trung-tam-ho-tro'],function()
    {
        Route::group(['prefix'=>'newsletter'],function()
        {
            Route::get('/','Nhanvien\NewsLetterController@index')->name('nhanvien.newsletter.index');
            Route::get('/delete/{id}','Nhanvien\NewsLetterController@destroy')->name('nhanvien.newsletter.delete');
        });
        // Quản trị tư vấn hỗ trợ
        Route::group(['prefix'=>'tu-van-khach-hang'],function()
        {
            Route::get('/','Nhanvien\TuVanController@index')->name('nhanvien.tuvan.index');
            Route::get('/detail/{id}','Nhanvien\TuVanController@detail')->name('nhanvien.tuvan.detail');
            Route::get('/answered/{id}','Nhanvien\TuVanController@answered')->name('nhanvien.tuvan.answered');
            Route::get('/hide/{id}','Nhanvien\TuVanController@hide')->name('nhanvien.tuvan.hide');
            Route::post('/edit/{id}','Nhanvien\NewsController@update')->name('nhanvien.tuvan.update');
        });
    });

});
Route::prefix('nhan-vien-kho')->group(function() {
     // Tai khoan
     Route::get('/', 'NVKho\NVKhoController@index')->name('nvkho');
     Route::get('/login', 'NVKho\NVKhoLoginController@showLoginForm')->name('nvkho.auth.login');
     Route::post('/login', 'NVKho\NVKhoLoginController@login')->name('nvkho.login.submit');
     Route::get('/logout/', 'NVKho\NVKhoLoginController@logout')->name('nvkho.logout');
     Route::post('/logout', 'NVKho\NVKhoLoginController@logout')->name('nvkho.auth.logout');
     // Đơn hàng
     Route::group(['prefix'=>'don-hang'],function()
     {
         Route::get('/','NVKho\DonHangController@index')->name('nvkho.donhang.index');
         Route::get('/all','NVKho\DonHangController@all')->name('nvkho.donhang.all');
         Route::get('/edit_status/{id}/{tt}','NVKho\DonHangController@editStatus')->name('nvkho.donhang.editSt');
         Route::post('/tracking/{id}','NVKho\DonHangController@tracking')->name('nvkho.donhang.tracking');
         Route::get('/tracking/delete/{madonhang}/{stt}','NVKho\DonHangController@DeleteTracking')->name('nvkho.donhang.tracking.delete');
     });
     // tai xe
     Route::group(['prefix'=>'tai-xe'],function()
     {
         Route::get('/','NVKho\NVKhoController@TaiXeIndex')->name('nvkho.taixe.index');
         Route::get('/don-hang','NVKho\NVKhoController@TaiXeDonHang')->name('nvkho.taixe.donhang');
     });
     Route::get('/set-tai-xe/{id}/{value}','NVKho\NVKhoController@SetTaiXe')->name('nvkho.set_taixe');
 });

Route::prefix('ketoan')->group(function() {
    // Tai khoan
    Route::get('/', 'KeToan\KeToanController@index')->name('ketoan');
    Route::get('/login', 'KeToan\KeToanLoginController@showLoginForm')->name('ketoan.auth.login');
    Route::post('/login', 'KeToan\KeToanLoginController@login')->name('ketoan.login.submit');
    Route::get('/logout/', 'KeToan\KeToanLoginController@logout')->name('ketoan.logout');
    Route::post('/logout', 'KeToan\KeToanLoginController@logout')->name('ketoan.auth.logout');
    // Đơn hàng

    Route::group(['prefix'=>'don-hang'],function()
    {
        Route::get('/','KeToan\DonHangController@index')->name('ketoan.donhang.index');
        Route::get('/add','KeToan\DonHangController@add')->name('ketoan.donhang.add');
        Route::post('/add','KeToan\DonHangController@store')->name('ketoan.donhang.store');
        Route::get('/edit/{madonhang}','KeToan\DonHangController@edit')->name('ketoan.donhang.edit');
        Route::post('/edit/{id}','KeToan\DonHangController@update')->name('ketoan.donhang.update');
        Route::get('/delete/{id}','KeToan\DonHangController@destroy')->name('ketoan.donhang.delete');
        Route::post('/chi-tiet/edit/{id}','KeToan\DonHangController@editChiTiet')->name('ketoan.donhang.editCt');
        Route::get('/edit_status/{id}/{tt}','KeToan\DonHangController@editStatus')->name('ketoan.donhang.editSt');
        Route::post('/tracking/{id}','KeToan\DonHangController@tracking')->name('ketoan.donhang.tracking');
        Route::get('/tracking/delete/{madonhang}/{stt}','KeToan\DonHangController@DeleteTracking')->name('ketoan.donhang.tracking.delete');
    });

    // Yeu Cau
    Route::group(['prefix'=>'yeu-cau'],function()
    {
        Route::get('/','KeToan\YeuCauController@index')->name('ketoan.yeucau.index');
        Route::get('/add','KeToan\YeuCauController@add')->name('ketoan.yeucau.add');
        Route::post('/add','KeToan\YeuCauController@store')->name('ketoan.yeucau.store');
        Route::get('/tiep-nhan/{id}','KeToan\YeuCauController@tiepnhan')->name('ketoan.yeucau.tiepnhan');
        Route::get('/delete/{id}','KeToan\YeuCauController@destroy')->name('ketoan.yeucau.delete');
    });
    // Khachs hang
    Route::group(['prefix'=>'khach-hang'],function()
    {
        Route::group(['prefix'=>'doi-tac'],function()
        {
            Route::get('/','KeToan\KhachHangController@DoiTacIndex')->name('ketoan.khachhang.doitac.index');
            Route::post('/add','KeToan\KhachHangController@AddDoiTac')->name('ketoan.khachhang.doitac.add');
            Route::get('/delete/{id}','KeToan\KhachHangController@DeleteDoiTac')->name('ketoan.khachhang.doitac.delete');
        });
        Route::group(['prefix'=>'khach-le'],function()
        {
            Route::get('/','KeToan\KhachHangController@KhachLeIndex')->name('ketoan.khachhang.khachle.index');
            Route::post('/add','KeToan\KhachHangController@AddKhachLe')->name('ketoan.khachhang.khachle.add');
            Route::get('/delete/{id}','KeToan\KhachHangController@DeleteKhachLe')->name('ketoan.khachhang.khachle.delete');
        });
        //thong ke
        Route::get('/thong-ke/{id}','KeToan\KhachHangController@ThongkeKhach')->name('ketoan.khachhang.thongke');
        Route::post('/thong-ke/{id}','KeToan\KhachHangController@thongkewithtime')->name('ketoan.khachhang.thongkewithtime');
    });
    // thống kê
    Route::post('/thong-ke','KeToan\ThongKeController@thongke')->name('ketoan.thongke.index');
});


Route::prefix('tai-xe')->group(function() {
    // Tai khoan
    Route::get('/', 'TaiXe\TaiXeController@index')->name('taixe');
    Route::get('/login', 'TaiXe\TaiXeLoginController@showLoginForm')->name('taixe.auth.login');
    Route::post('/login', 'TaiXe\TaiXeLoginController@login')->name('taixe.login.submit');
    Route::get('/logout/', 'TaiXe\TaiXeLoginController@logout')->name('taixe.logout');
    Route::post('/logout', 'TaiXe\TaiXeLoginController@logout')->name('taixe.auth.logout');
    // Đơn hàng
    Route::get('/tracking/{id}/{nd}','TaiXe\TaiXeController@tracking')->name('taixe.donhang.tracking');

});
Route::prefix('quanly')->group(function() {
    // Login
    Route::get('/','QuanLy\HomeController@index')->name('quanly.home');
});


Route::prefix('admin')->group(function()
{
    // Tai khoan
    Route::get('/','Admin\AdminController@index')->name('admin');
    Route::get('/register', 'Admin\AdminController@create')->name('admin.register');
    Route::post('/register', 'Admin\AdminController@store')->name('admin.register.store');
    Route::get('/login','Admin\AdminLoginController@showLoginForm')->name('admin.auth.login');
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout/', 'Admin\AdminLoginController@logout')->name('admin.logout');
    Route::post('/logout', 'Admin\AdminLoginController@logout')->name('admin.auth.logout');


    // Quản trị bài viết
    Route::group(['prefix'=>'news'],function()
    {
        Route::get('/','Admin\NewsController@index')->name('admin.news.index');
        Route::get('/add','Admin\NewsController@add')->name('admin.news.add');
        Route::post('/add','Admin\NewsController@store')->name('admin.news.store');
        Route::get('/detail/{id}','Admin\NewsController@detail')->name('admin.news.detail');
        Route::get('/edit/{id}','Admin\NewsController@edit')->name('admin.news.edit');
        Route::post('/edit/{id}','Admin\NewsController@update')->name('admin.news.update');
        Route::get('/delete/{id}','Admin\NewsController@destroy')->name('admin.news.delete');
    });
    // Quản trị tư vấn hỗ trợ
    Route::group(['prefix'=>'tuvan'],function()
    {
        Route::get('/','Admin\TuVanController@index')->name('admin.tuvan.index');
        Route::get('/gmail/answer/{id}','Admin\TuVanController@answer')->name('admin.tuvan.answer');
        Route::get('/detail/{id}','Admin\TuVanController@detail')->name('admin.tuvan.detail');
        Route::get('/delete/{id}','Admin\TuVanController@destroy')->name('admin.tuvan.delete');
        Route::get('/edit/{id}','Admin\NewsController@edit')->name('admin.tuvan.edit');
        Route::post('/edit/{id}','Admin\NewsController@update')->name('admin.tuvan.update');
    });
    // quản trị Tin tức
    Route::group(['prefix'=>'tin-tuc'],function()
    {
        Route::get('/','Admin\BlogController@index')->name('admin.blog.index');
        // Quản trị danh mục Blog
        Route::group(['prefix'=>'danh-muc'],function() {
            Route::get('/', 'Admin\Blog\CategoryController@index')->name('admin.blog.category.index');
            Route::get('/add','Admin\Blog\CategoryController@add')->name('admin.blog.category.add');
            Route::post('/add','Admin\Blog\CategoryController@store')->name('admin.blog.category.store');
            Route::get('/edit/{id}','Admin\Blog\CategoryController@edit')->name('admin.blog.category.edit');
            Route::post('/edit/{id}','Admin\Blog\CategoryController@update')->name('admin.blog.category.update');
            Route::get('/delete/{id}','Admin\Blog\CategoryController@destroy')->name('admin.blog.category.delete');

        });
        // Quản trị bài viết Blog
        Route::group(['prefix'=>'bai-viet'],function() {
            Route::get('/', 'Admin\Blog\PageController@index')->name('admin.blog.page.index');
            Route::get('/add','Admin\Blog\PageController@add')->name('admin.blog.page.add');

            Route::post('/add','Admin\Blog\PageController@store')->name('admin.blog.page.store');
            Route::get('/detail/{id}','Admin\Blog\PageController@detail')->name('admin.blog.page.detail');
            Route::get('/edit/{id}','Admin\Blog\PageController@edit')->name('admin.blog.page.edit');
            Route::post('/edit/{id}','Admin\Blog\PageController@update')->name('admin.blog.page.update');
            Route::get('/delete/{id}','Admin\Blog\PageController@destroy')->name('admin.blog.page.delete');

        });

    });
    // Quản trị tuyển dụng
    Route::group(['prefix'=>'tuyen-dung'],function()
    {
        Route::get('/','Admin\TuyenDungController@index')->name('admin.tuyendung.index');
        // Quản trị danh mục tuyển dụng
        Route::group(['prefix'=>'danh-muc'],function() {
            Route::get('/', 'Admin\TuyenDung\CategoryController@index')->name('admin.tuyendung.category.index');
            Route::get('/add','Admin\TuyenDung\CategoryController@add')->name('admin.tuyendung.category.add');
            Route::post('/add','Admin\TuyenDung\CategoryController@store')->name('admin.tuyendung.category.store');
            Route::get('/edit/{id}','Admin\TuyenDung\CategoryController@edit')->name('admin.tuyendung.category.edit');
            Route::post('/edit/{id}','Admin\TuyenDung\CategoryController@update')->name('admin.tuyendung.category.update');
            Route::get('/delete/{id}','Admin\TuyenDung\CategoryController@destroy')->name('admin.tuyendung.category.delete');
        });
        // Quản trị bài viết Tuyen dung
        Route::group(['prefix'=>'bai-viet'],function() {
            Route::get('/', 'Admin\TuyenDung\PageController@index')->name('admin.tuyendung.page.index');
            Route::get('/add','Admin\TuyenDung\PageController@add')->name('admin.tuyendung.page.add');
            Route::post('/add','Admin\TuyenDung\PageController@store')->name('admin.tuyendung.page.store');
            Route::get('/detail/{id}','Admin\TuyenDung\PageController@detail')->name('admin.tuyendung.page.detail');
            Route::get('/edit/{id}','Admin\TuyenDung\PageController@edit')->name('admin.tuyendung.page.edit');
            Route::post('/edit/{id}','Admin\TuyenDung\PageController@update')->name('admin.tuyendung.page.update');
            Route::get('/delete/{id}','Admin\TuyenDung\PageController@destroy')->name('admin.tuyendung.page.delete');
        });

    });
    // setting
    Route::group(['prefix'=>'setting'],function()
    {
        Route::get('/','Admin\SettingController@index')->name('admin.setting.index');
        // Quản trị bài viết Tuyen dung
        Route::group(['prefix'=>'contact'],function() {
            Route::get('/', 'Admin\Setting\ConTactController@index')->name('admin.setting.contact.index');
            Route::post('/edit','Admin\Setting\ConTactController@update')->name('admin.setting.contact.update');
        });


    });

    Route::get('/address','Admin\AddressController@InitCSDL');

    // Quản trị buu cục
    Route::group(['prefix'=>'buu-cuc'],function() {
        Route::get('/', 'Admin\BuuCucController@index')->name('admin.buucuc.index');
        Route::get('/add','Admin\BuuCucController@add')->name('admin.buucuc.add');
        Route::post('/add','Admin\BuuCucController@store')->name('admin.buucuc.store');
        Route::get('/edit/{id}','Admin\BuuCucController@edit')->name('admin.buucuc.edit');
        Route::post('/edit/{id}','Admin\BuuCucController@update')->name('admin.buucuc.update');
        Route::get('/delete/{id}','Admin\BuuCucController@destroy')->name('admin.buucuc.delete');
    });
    // Quản trị tra cuu giá cước
    Route::group(['prefix'=>'goi-cuoc'],function() {
        Route::get('/', 'Admin\TraCuu\GiaCuocController@index')->name('admin.goicuoc.index');
        Route::get('/add','Admin\TraCuu\GiaCuocController@add')->name('admin.goicuoc.add');
        Route::post('/add','Admin\TraCuu\GiaCuocController@store')->name('admin.goicuoc.store');
        Route::get('/detail/{id}','Admin\TraCuu\GiaCuocController@detail')->name('admin.goicuoc.detail');
        Route::get('/edit/{id}','Admin\TraCuu\GiaCuocController@edit')->name('admin.goicuoc.edit');
        Route::post('/edit/{id}','Admin\TraCuu\GiaCuocController@update')->name('admin.goicuoc.update');
        Route::get('/delete/{id}','Admin\TraCuu\GiaCuocController@destroy')->name('admin.goicuoc.delete');
    });
    // Quản trị điểm gửi hàng
    Route::group(['prefix'=>'diem-gui-hang'],function() {
        Route::get('/', 'Admin\TraCuu\DiemGuiController@index')->name('admin.diem-gui.index');
        Route::get('/add','Admin\TraCuu\DiemGuiController@add')->name('admin.diem-gui.add');
        Route::post('/add','Admin\TraCuu\DiemGuiController@store')->name('admin.diem-gui.store');
        Route::get('/edit/{id}','Admin\TraCuu\DiemGuiController@edit')->name('admin.diem-gui.edit');
        Route::post('/edit/{id}','Admin\TraCuu\DiemGuiController@update')->name('admin.diem-gui.update');
        Route::get('/delete/{id}','Admin\TraCuu\DiemGuiController@destroy')->name('admin.diem-gui.delete');

    });
    Route::group(['prefix'=>'cuoc-van-chuyen'],function() {
        Route::get('/', 'Admin\TraCuu\CuocVanChuyenController@index')->name('admin.cuoc.index');
        Route::get('/add','Admin\TraCuu\CuocVanChuyenController@add')->name('admin.cuoc.add');
        Route::post('/add','Admin\TraCuu\CuocVanChuyenController@store')->name('admin.cuoc.store');
        Route::get('/edit/{id}','Admin\TraCuu\CuocVanChuyenController@edit')->name('admin.cuoc.edit');
        Route::post('/edit/{id}','Admin\TraCuu\CuocVanChuyenController@update')->name('admin.cuoc.update');
        Route::get('/delete/{id}','Admin\TraCuu\CuocVanChuyenController@destroy')->name('admin.cuoc.delete');
    });
    // Quản trị đơn hàng
    Route::group(['prefix'=>'don-hang'],function() {
        Route::get('/', 'Admin\DonHang\DonHangController@index')->name('admin.donhang.index');
    });
    // Quản trị Tai Khoan
    Route::group(['prefix'=>'tai-khoan'],function()
    {
        Route::group(['prefix'=>'quan-ly'],function()
        {
            Route::get('/', 'Admin\TaiKhoan\QuanLyController@index')->name('admin.taikhoan.quanly.index');
            Route::post('/them', 'Admin\TaiKhoan\QuanLyController@create')->name('admin.taikhoan.quanly.create');
            Route::get('/doi-mat-khau/{id}', 'Admin\TaiKhoan\QuanLyController@resetPass')->name('admin.taikhoan.quanly.resetpassword');
        });
        Route::group(['prefix'=>'ke-toan'],function()
        {
            Route::get('/', 'Admin\TaiKhoan\KeToanController@index')->name('admin.taikhoan.ketoan.index');
            Route::post('/them', 'Admin\TaiKhoan\KeToanController@create')->name('admin.taikhoan.ketoan.create');
            Route::get('/doi-mat-khau/{id}', 'Admin\TaiKhoan\KeToanController@resetPass')->name('admin.taikhoan.ketoan.resetpassword');
        });
        Route::group(['prefix'=>'tai-xe'],function()
        {
            Route::get('/', 'Admin\TaiKhoan\TaiXeController@index')->name('admin.taikhoan.taixe.index');
            Route::post('/them', 'Admin\TaiKhoan\TaiXeController@create')->name('admin.taikhoan.taixe.create');
            Route::get('/doi-mat-khau/{id}', 'Admin\TaiKhoan\TaiXeController@resetPass')->name('admin.taikhoan.taixe.resetpassword');

        });
        Route::group(['prefix'=>'nv-kho'],function()
        {
            Route::get('/', 'Admin\TaiKhoan\NVKhoController@index')->name('admin.taikhoan.nvkho.index');
            Route::post('/them', 'Admin\TaiKhoan\NVKhoController@create')->name('admin.taikhoan.nvkho.create');
            Route::get('/doi-mat-khau/{id}', 'Admin\TaiKhoan\NVKhoController@resetPass')->name('admin.taikhoan.nvkho.resetpassword');

        });
        Route::group(['prefix'=>'nhan-vien-sale'],function()
        {
            Route::get('/', 'Admin\TaiKhoan\NhanVienController@index')->name('admin.taikhoan.nhanvien.index');
            Route::post('/them', 'Admin\TaiKhoan\NhanVienController@create')->name('admin.taikhoan.nhanvien.create');
            Route::get('/doi-mat-khau/{id}', 'Admin\TaiKhoan\NhanVienController@resetPass')->name('admin.taikhoan.nhanvien.resetpassword');

        });
    });

    // Quản trị danh mục
    Route::group(['prefix'=>'danh-muc'],function() {
        Route::get('/dich-vu', 'Admin\DanhMuc\DichVuController@index')->name('admin.danhmuc.dichvu.index');
        Route::get('/gia-cuoc', 'Admin\DanhMuc\GiaCuocController@index')->name('admin.danhmuc.giacuoc.index');
        Route::get('/tin-tuc', 'Admin\DanhMuc\TinTucController@index')->name('admin.danhmuc.tintuc.index');
        Route::get('/tuyen-dung', 'Admin\DanhMuc\TuyenDungController@index')->name('admin.danhmuc.tuyendung.index');
    });
    // Quản trị bài viết
    Route::group(['prefix'=>'bai-viet'],function() {
        // dịch vụ
        Route::group(['prefix'=>'dich-vu'],function() {
            Route::get('/', 'Admin\BaiViet\DichVuController@index')->name('admin.baiviet.dichvu.index');
            Route::post('/add','Admin\BaiViet\DichVuController@store')->name('admin.baiviet.dichvu.store');
            Route::post('/edit/{id}','Admin\BaiViet\DichVuController@update')->name('admin.baiviet.dichvu.update');
            Route::get('/delete/{id}','Admin\BaiViet\DichVuController@destroy')->name('admin.baiviet.dichvu.delete');
        });
        // gia cước
        Route::group(['prefix'=>'gia-cuoc'],function() {
            Route::get('/', 'Admin\BaiViet\GiaCuocController@index')->name('admin.baiviet.giacuoc.index');
            Route::post('/add','Admin\BaiViet\GiaCuocController@store')->name('admin.baiviet.giacuoc.store');
            Route::post('/edit/{id}','Admin\BaiViet\GiaCuocController@update')->name('admin.baiviet.giacuoc.update');
            Route::get('/delete/{id}','Admin\BaiViet\GiaCuocController@destroy')->name('admin.baiviet.giacuoc.delete');
        });
        // tuyển dụng
        Route::group(['prefix'=>'tuyen-dung'],function() {
            Route::get('/', 'Admin\BaiViet\TuyenDungController@index')->name('admin.baiviet.tuyendung.index');
            Route::post('/add','Admin\BaiViet\TuyenDungController@store')->name('admin.baiviet.tuyendung.store');
            Route::post('/edit/{id}','Admin\BaiViet\TuyenDungController@update')->name('admin.baiviet.tuyendung.update');
            Route::get('/delete/{id}','Admin\BaiViet\TuyenDungController@destroy')->name('admin.baiviet.tuyendung.delete');
        });
        Route::get('/tin-tuc', 'Admin\BaiViet\TinTucController@index')->name('admin.baiviet.tintuc.index');
    });
});
Auth::routes();

// Route Frontend
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');

// đăng kí nhận tin mới nhất
Route::group(['prefix'=>'newsletter'],function()
{
    Route::post('/add','Front\NewsLetterController@store')->name('front.newsletter.store');
});

Route::group(['prefix'=>'transport'],function()
{
    Route::post('/support','Front\TransController@store')->name('front.transSP.store');
});
// gui mail
Route::get('laravel-send-email', 'EmailController@sendEMail');
// Blog
Route::group(['prefix'=>'tin-tuc'],function()
{
    Route::get('/','Front\BlogController@index')->name('front.blog.index');
    Route::get('/{slug_cate}','Front\BlogController@detail');
    Route::get('bai-viet/{slug_page}','Front\BlogController@detailPage')->name('tin-tuc.bai-viet.detail');

});
//Tuyen dung
Route::group(['prefix'=>'tuyen-dung'],function()
{
    Route::get('/','Front\TuyenDungController@index')->name('front.tuyendung.index');
    Route::get('/danh-muc/{slug}','Front\TuyenDungController@danhmuc')->name('front.tuyendung.danhmuc');
    Route::get('/bai-viet/{slug_cate}/{slug_pages}','Front\TuyenDungController@detail')->name('front.tuyendung.detail');
});
// lien he
Route::group(['prefix'=>'lien-he'],function()
{
    Route::get('/','Front\LienHeController@index')->name('front.lienhe.index');
});
// Chinh sach
Route::group(['prefix'=>'chinh-sach'],function()
{
 Route::get('/bai-viet/{slug_pages}','Front\ChinhSachController@detail')->name('front.chinhsach.detail');
});
// tra cuu
Route::group(['prefix'=>'tra-cuu'],function ()
{
    Route::get('/','Front\TraCuuController@index')->name('front.tracuu.index');
    Route::get('/gia-cuoc-van-chuyen','Front\TraCuuController@giacuoc')->name('front.tracuu.giacuoc');
    Route::get('/van-don-van-chuyen','Front\TraCuuController@vandon')->name('front.tracuu.vandon');
    Route::get('/diem-gui-hang','Front\TraCuuController@diemguihang')->name('front.tracuu.diemguihang');
    Route::post('hang-hoa','Front\TraCuuController@tracuu')->name('front.tracuu.hanghoa.index');
    Route::post('van-don','Front\TraCuuController@tracuuVD')->name('front.tracuu.vandon.index');
});
// dich vu
Route::group(['prefix'=>'dich-vu'],function ()
{
    Route::get('/','Front\DichVuController@index')->name('front.dichvu.index');
    Route::get('/{slug_cate}','Front\DichVuController@detail')->name('front.dichvu.detail');
});
// gia cuoc
Route::group(['prefix'=>'gia-cuoc'],function ()
{
    Route::get('/','Front\GiaCuocController@index')->name('front.giacuoc.index');
    Route::get('/{slug_cate}','Front\GiaCuocController@detail')->name('front.giacuoc.detail');
});
// comments
Route::prefix('comment')->group(function ()
{
    Route::post('/post/{id}', 'Front\CommentController@create');
});
// chat
Route::get('export', 'ExportController@export')->name('export');
Route::get('/in-van-don/{madonhang}','VanDonController@InVanDon')->name('invandon');
