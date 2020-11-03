<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TransSPModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuVanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['trans_sps'] = DB::table('trans_sp')
            ->orderBy('created_at','DESC')
            ->orderBy('status','ASC')
            ->paginate(12);
        return view('backend.content.tuvan.index',$data);
    }
    public function destroy($id)
    {
        $item = TransSPModel::find($id);
        $item->delete();
        return redirect()->route('admin.tuvan.index');
    }
    public function detail($id)
    {
        $data['item']= TransSPModel::find($id);
        return view('backend.content.tuvan.detail',$data);
    }
    public function answer($id)
    {
        $data['item']= TransSPModel::find($id);
        return view('backend.content.tuvan.answer',$data);
    }
}
