<?php

namespace App\Http\Controllers\Admin\TaiKhoan;

use App\Http\Controllers\Controller;
use App\Models\KeToanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeToanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['nhanviens']=DB::table('ketoans')
            ->get();
        return view('backend.content.taikhoan.ketoan',$data);
    }
    public function create(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
        ));
        $user = new KeToanModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('admin.taikhoan.ketoan.index');
    }
    public function resetPass($id)
    {
        $item = KeToanModel::find($id);
        $mkmd ="123456789";
        $item->password = bcrypt($mkmd);
        return redirect()->route('admin.taikhoan.ketoan.index');
    }
}
