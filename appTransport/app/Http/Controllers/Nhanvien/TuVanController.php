<?php

namespace App\Http\Controllers\Nhanvien;

use App\Http\Controllers\Controller;
use App\Models\TransSPModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuVanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:nhanvien');
    }
    public function index()
    {
        $data['trans_sps'] = DB::table('trans_sp')
            ->where('status','>=',0)
            ->orderBy('status','ASC')
            ->orderBy('created_at','DESC')
            ->paginate(12);
        return view('user.content.tuvan.index',$data);
    }
    public function hide($id)
    {
        $item = TransSPModel::find($id);
        $item->status=-1;
        $item->save();
        return redirect()->route('nhanvien.tuvan.index')->with('success-message', 'Đã ẩn thành công!');
    }
    public function detail($id)
    {
        $data['item']= TransSPModel::find($id);
        return view('user.content.tuvan.detail',$data);
    }
    public function answered($id)
    {
        $item = TransSPModel::find($id);
        $item->status = 1;
        $item->save();
        return redirect()->route('nhanvien.tuvan.index')->with('success-message', 'Sửa trạng thái thành công!');
    }
}
