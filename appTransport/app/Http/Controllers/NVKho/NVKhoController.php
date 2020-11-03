<?php

namespace App\Http\Controllers\NVKho;

use App\Http\Controllers\Controller;
use App\Models\DonHangModel;
use App\Models\NhanVienModel;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NVKhoController extends Controller
{

    public function  __construct()
    {
        $this->middleware('auth:nvkho');
    }
    public function index()
    {
        return view('nvkho.homepage.index');
    }
    public function TaiXeIndex()
    {
        $data['nhanviens'] = DB::table('taixes')
            ->get();
        $data['donhangs'] = array();
        foreach ($data['nhanviens'] as $tmp)
        {
            $data['donhangs'][$tmp->id] = DB::table('donhangs')
                ->where('id_taixe','=',$tmp->id)
                ->where('status','<',100)
                ->get();
        }
        return view('nvkho.content.taixe.index',$data);
    }
    public function TaiXeDonHang()
    {
        $data['taixes']  = DB::table('taixes')
            ->get();
        $data['donhangs'] = array();
        foreach ($data['taixes'] as $tmp)
        {
            $data['donhangs'][$tmp->id] = DB::table('donhangs')
                ->where('id_taixe','=',$tmp->id)
                ->where('status','<',100)
                ->get();
        }
        return view('nvkho.content.taixe.donhang',$data);
    }
    public function SetTaiXe($id,$value)
    {
        $item = DonHangModel::find($id);
        $item->id_taixe = $value;
        $item->save();
        if($value > 0 )
            return redirect()->route('nvkho.donhang.index')->with('success-message', 'Thêm tài xế thành công!');
        return redirect()->route('nvkho.donhang.index')->with('success-message', 'Xóa tài xế khỏi đơn hàng thành công!');

    }

}
