<?php

namespace App\Http\Controllers\Nhanvien;

use App\Http\Controllers\Controller;
use App\Models\KhachHangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth:nhanvien');
    }
    public function DoiTacIndex()
    {
        $data['doitacs'] = DB::table('khachhangs')
            ->where('loaikhach','=',0)
            ->where('id_nhanvien','=',Auth::user()->id)
            ->paginate(12);
        return view('user.content.khachhang.doitac',$data);
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
            $khachhang->id_nhanvien=Auth::user()->id;
            $khachhang->save();
            $khachhang->Ma_khachhang = $khachhang->Ma_khachhang.$khachhang->id;
            $khachhang->save();
            return redirect()->route('user.khachhang.doitac.index')->with('success-message', 'đã thêm đối tác mới!');
        }
        return redirect()->back()->with('warning-message', 'đối tác trùng số điện thoại!');

    }
    public function DeleteDoiTac($id)
    {
        $doitac = KhachHangModel::find($id);
        if($doitac->id_nhanvien == Auth::user()->id)
        {
            $doitac->delete();
        }
        return redirect()->route('user.khachhang.doitac.index')->with('success-message', 'đã xóa đối tác thành công!');
    }
    public function KhachLeIndex()
    {
        $data['khachles'] = DB::table('khachhangs')
            ->where('loaikhach','=',1)
            ->where('id_nhanvien','=',Auth::user()->id)
            ->paginate(12);
        return view('user.content.khachhang.khachle',$data);
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
            $khachhang->id_nhanvien=Auth::user()->id;
            $khachhang->save();
            $khachhang->Ma_khachhang = $khachhang->Ma_khachhang .$khachhang->id;
            $khachhang->save();
        }
        return redirect()->route('user.khachhang.khachle.index')->with('success-message', 'đã thêm khách hàng mới!');
    }
    public function DeleteKhachLe($id)
    {
        $doitac = KhachHangModel::find($id);
        if($doitac->id_nhanvien == Auth::user()->id)
        {
            $doitac->delete();
        }
        return redirect()->route('user.khachhang.khachle.index')->with('success-message', 'đã xóa khách hàng thành công!');
    }
    public function ThongkeKhachLe($id)
    {
        $donhangs = DB::table('donhangs')
            ->where('id_nguoigui','=',$id)
            ->where('id_nv','=',Auth::user()->id)
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
        return view('user.content.khachhang.thongke.index',$data);
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
            ->where('id_nv','=',Auth::user()->id)
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
        return view('user.content.khachhang.thongke.detail',$data);


    }
}
