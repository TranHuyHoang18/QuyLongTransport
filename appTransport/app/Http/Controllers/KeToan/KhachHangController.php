<?php

namespace App\Http\Controllers\KeToan;

use App\Http\Controllers\Controller;
use App\Models\KhachHangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth:ketoan');
    }
    public function DoiTacIndex()
    {
        $data['doitacs'] = DB::table('khachhangs')
            ->where('loaikhach','=',0)
            ->orderBy('id_nhanvien','ASC')
            ->get();
        $data['nhanviens'] = DB::table('nhanviens')
            ->orderBy('id','ASC')
            ->get();
        return view('ketoan.content.khachhang.doitac',$data);
    }
    public function AddDoiTac(Request $request)
    {
        $input = $request->all();
        $tmp = DB::table('khachhangs')
            ->where('phone','=',$input['phone'])
            ->get();
        if(count($tmp)==0)
        {
            $khachhang=new KhachHangModel();
            $khachhang->Ma_khachhang=$input['Ma_khachhang'];
            $khachhang->ten_don_vi=$input['ten_don_vi'];
            $khachhang->nguoi_dd=$input['nguoi_dd'];
            $khachhang->phone=$input['phone'];
            $khachhang->email=$input['email'];
            $khachhang->address=$input['address'];
            $khachhang->loaikhach=0;
            $khachhang->id_nhanvien=$input['id_nhanvien'];
            $khachhang->save();
            $khachhang->Ma_khachhang = $khachhang->Ma_khachhang.$khachhang->id;
            $khachhang->save();
            return redirect()->route('ketoan.khachhang.doitac.index')->with('success-message', 'đã thêm đối tác mới!');
        }
        return redirect()->back()->with('warning-message', 'đối tác trùng số điện thoại!');

    }
    public function DeleteDoiTac($id)
    {
        $doitac = KhachHangModel::find($id);
        $doitac->delete();
        return redirect()->route('ketoan.khachhang.doitac.index')->with('success-message', 'đã xóa đối tác thành công!');
    }
    public function KhachLeIndex()
    {
        $data['khachles'] = DB::table('khachhangs')
            ->where('loaikhach','=',1)
            ->orderBy('id_nhanvien','ASC')
            ->get();
        $data['nhanviens'] = DB::table('nhanviens')
            ->orderBy('id','ASC')
            ->get();
        return view('ketoan.content.khachhang.khachle',$data);
    }
    public function AddKhachLe(Request $request)
    {
        $input = $request->all();
        $tmp = DB::table('khachhangs')
            ->where('phone','=',$input['phone'])
            ->get();
        if(count($tmp)==0)
        {
            $khachhang=new KhachHangModel();
            $khachhang->Ma_khachhang=$input['Ma_khachhang'];
            $khachhang->ten_don_vi="";
            $khachhang->nguoi_dd=$input['nguoi_dd'];
            $khachhang->phone=$input['phone'];
            $khachhang->email=$input['email'];
            $khachhang->address=$input['address'];
            $khachhang->loaikhach=1;
            $khachhang->id_nhanvien=$input['id_nhanvien'];
            $khachhang->save();
            $khachhang->Ma_khachhang = $khachhang->Ma_khachhang .$khachhang->id;
            $khachhang->save();
            return redirect()->route('ketoan.khachhang.khachle.index')->with('success-message', 'đã thêm khách hàng mới!');
        }
        return redirect()->back()->with('warning-message', 'khách hàng trùng số điện thoại!');

    }
    public function DeleteKhachLe($id)
    {
        $doitac = KhachHangModel::find($id);
        $doitac->delete();
        return redirect()->route('ketoan.khachhang.khachle.index')->with('success-message', 'đã xóa khách hàng thành công!');
    }
    public function ThongkeKhach($id)
    {
        $donhangs = DB::table('donhangs')
            ->where('id_nguoigui','=',$id)
            ->orderBy('created_at','ASC')
            ->get();
        $data['donhangs'] = $donhangs;
        $data['thongkeVC'] = array();
        $data['thongkeVC']['tongsodonhang'] = count($donhangs);
        $data['thongkeVC']['tongcuocvc'] = 0;
        foreach ($donhangs as $donhang)
        {
            $tkl = json_decode($donhang->info_vanchuyen);
            $data['thongkeVC']['tongcuocvc'] += $tkl->{'giacuoc'};
        }
        $data['thongkeVC']['dathanhtoan'] =  $data['thongkeVC']['tongcuocvc'] *40/100;
        $data['khachle'] = KhachHangModel::find($id);
        return view('ketoan.content.khachhang.thongke.index',$data);
    }
    public function thongkewithtime($id, Request  $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required',
        ]);
        $input = $request->all();
        $donhangs = DB::table('donhangs')
            ->where('id_nguoigui','=',$id)
            ->where('created_at','>=',$input['from'])
            ->where('created_at','<=',$input['to'])
            ->orderBy('date_tpnhan','DESC')
            ->get();
        $data['donhangs'] = $donhangs;
        $data['thongkeVC'] = array();
        $data['thongkeVC']['tongsodonhang'] = count($donhangs);
        $data['thongkeVC']['tongcuocvc'] = 0;
        foreach ($donhangs as $donhang)
        {
            $tkl = json_decode($donhang->info_vanchuyen);
            $data['thongkeVC']['tongcuocvc'] += $tkl->{'giacuoc'};
        }
        $data['thongkeVC']['dathanhtoan'] =  $data['thongkeVC']['tongcuocvc'] *40/100;
        $data['khachle'] = KhachHangModel::find($id);
        $data['from'] = $input['from'];
        $data['to'] = $input['to'];
        return view('ketoan.content.khachhang.thongke.detail',$data);
    }
}
