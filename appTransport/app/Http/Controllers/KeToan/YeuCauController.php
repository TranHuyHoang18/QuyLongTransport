<?php

namespace App\Http\Controllers\KeToan;

use App\Http\Controllers\Controller;
use App\Models\HangHoaModel;
use App\Models\KhachHangModel;
use App\Models\YeuCauModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class YeuCauController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth:ketoan');
    }
    public function index()
    {
        $data['yeucaus'] = DB::table('yeucaus')
            ->join('nvkhos','yeucaus.id_nguoitiepnhan','=','nvkhos.id')
            ->join('hanghoas','yeucaus.id_hanghoa','=','hanghoas.id')
            ->join('khachhangs','yeucaus.id_khachhang','=','khachhangs.id')
            ->join('diemguihangs','hanghoas.id_diemgui','=','diemguihangs.id')
            ->orderBy('yeucaus.trangthai','ASC')
            ->orderBy('yeucaus.time_create','ASC')
            ->get();
        $items = DB::table('address')
            ->get();
        $data['citys'] = array();
        foreach ($items as $item)
        {
            $data['citys'][$item->id] = $item->tinh;
        }
        return view('ketoan.content.yeucau.index',$data);
    }
    public function add()
    {
        $data['diemguihangs'] = DB::table('diemguihangs')
            ->get();
        $data['nhanviens'] = DB::table('nhanviens')
            ->get();
        $data['nvkhos'] = DB::table('nvkhos')
            ->get();
        return view('ketoan.content.yeucau.add',$data);
    }
    public function store(Request $request)
    {

        $input = $request->all();

        $yeucau = new YeuCauModel();
        // khach hàng

        $item = DB::table('khachhangs')
            ->where('phone','=',$input['dienthoai'])
            ->get();

        if(count($item) ==0)
        {
            $khachhang = new KhachHangModel();
            $khachhang->ten_don_vi = $input['tendonvi'];
            $khachhang->nguoi_dd = $input['nguoidd'];
            $khachhang->phone = $input['dienthoai'];
            $khachhang->email = $input['email'];
            $khachhang->address = $input['address'];
            $khachhang->status = 0;
            $khachhang->id_nhanvien = $input['id_nhanvien'];
            $khachhang->save();
            $yeucau->id_khachhang=$khachhang->id;
        }
        else
        {
            $yeucau->id_khachhang= $item[0]->id;
        }


        // Hàng hóa

        $hanghoa= new HangHoaModel();
        $hanghoa->ten = $input['tenhang'];
        $hanghoa->donvi = $input['donvi'];
        $hanghoa->trongluong = $input['trongluong'];
        $hanghoa->id_diemgui = $input['id_diemgui'];
        $hanghoa->id_diemnhan = $input['tinh_nhan'][$input['id_diemgui']];
        $hanghoa->chitiet = "";
        $hanghoa->save();

        $yeucau->id_hanghoa = $hanghoa->id;
        // Tao yêu cầu
        $yeucau->dichvu = $input['dichvu'];
        $yeucau->yeucaulayhang = $input['yclayhang'];
        $yeucau->yeucaugiaohang = $input['ycgiaohang'];
        $yeucau->id_nguoitiepnhan = 1;
        $yeucau->ghichu = $input['ghichu'];
        $yeucau->trangthai = 0;
        $yeucau->ma_yc = 0;
        $yeucau->time_create = "2020-06-29 21:24:28";
        $yeucau->save();
        $yeucau->ma_yc= $yeucau->id;
        $yeucau->time_create = $yeucau->created_at;
        $yeucau->save();
        return redirect()->route('ketoan.yeucau.index')->with('success-message', 'đã thêm yêu cầu mới!');
    }
    public function destroy($id)
    {
        $item = YeuCauModel::find($id);
        $item->delete();
        return redirect()->route('ketoan.yeucau.index')->with('success-message', 'đã xóa yêu cầu !');
    }
    public function tiepnhan($id)
    {
        $item = YeuCauModel::find($id);
        $item->trangthai=1;
        $item->save();
        return redirect()->route('ketoan.yeucau.index')->with('success-message', 'đã tiếp nhận yêu cầu !');
    }
}
