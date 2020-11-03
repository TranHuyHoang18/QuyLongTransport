<?php

namespace App\Http\Controllers\Admin\TaiKhoan;

use App\Http\Controllers\Controller;
use App\Models\QuanlyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanLyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['nhanviens']=DB::table('quanlys')
            ->get();
        return view('backend.content.taikhoan.quanly',$data);
    }
    public function create(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
        ));
        $user = new QuanlyModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('admin.taikhoan.quanly.index');

    }
    public function resetPass($id)
    {
        $item = QuanlyModel::find($id);
        $mkmd ="123456789";
        $item->password = bcrypt($mkmd);
        return redirect()->route('admin.taikhoan.quanly.index');
    }
}
