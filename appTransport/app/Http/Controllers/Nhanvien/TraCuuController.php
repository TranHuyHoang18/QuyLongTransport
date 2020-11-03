<?php

namespace App\Http\Controllers\Nhanvien;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TraCuuController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth:nhanvien');
    }

    public function search_donhang(Request  $request)
    {
        $request->validate([
            'madonhang' => 'required',
        ]);
        $input= $request->all();
        $donhang = DB::table('donhangs')
            ->where('madonhang','=',$input['madonhang'])
            ->where('id_nv','=',Auth::user()->id)
            ->get();
        if(count($donhang)>0)
        {
            $data['donhang'] = $donhang[0];
            return view('user.content.donhang.detail',$data);
        }
        else
        {
            return redirect()->back()->with('warning-message', 'Nhập sai mã đơn hàng!');
        }
    }
    public function show_cuoc()
    {
        $data['diemguihangs'] = DB::table('diemguihangs')
            ->get();
        $data['cuocs'] = DB::table('cuocs')
            ->join('diemguihangs','diemguihangs.id','=','cuocs.id_diemguihang')
            ->get();
        return view('user.content.tracuu.cuocvanchuyen',$data);
    }
    public function show_diemguihang()
    {
        $data['diemguihangs'] = DB::table('diemguihangs')
            ->get();
        $data['tinhs'] = DB::table('address')
            ->orderBy('id','ASC')
            ->get();
        return view('user.content.tracuu.diemguihang',$data);
    }
}
