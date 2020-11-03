<?php

namespace App\Http\Controllers\Admin\TaiKhoan;

use App\Http\Controllers\Controller;
use App\Models\NhanVienModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhanVienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['nhanviens']=DB::table('nhanviens')
            ->get();
        return view('backend.content.taikhoan.nhanvien',$data);
    }
    public function create(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
        ));
        $user = new NhanVienModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('admin.taikhoan.nhanvien.index');

    }
    public function resetPass($id)
    {
        $item = NhanVienModel::find($id);
        $mkmd ="123456789";
        $item->password = bcrypt($mkmd);
        return redirect()->route('admin.taikhoan.nhanvien.index');
    }
}
