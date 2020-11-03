<?php

namespace App\Http\Controllers\QTV\Setting;

use App\Http\Controllers\Controller;
use App\Models\DMVanChuyenModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DMVanChuyenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }

    public function index()
    {
        $data['items'] = DB::table('danhmucvcs')->get();
        return view('qtv.content.caidat.danhmucvc.index',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();

        $item = new DMVanChuyenModel();
        $item->name = $input['name'];
        $item->image = $input['image'];
        $item->alt = $input['alt'];
        $item->save();
        return redirect()->route('qtv.cai-dat.danh-muc-vc.index');
    }
    public function update($id,Request $request)
    {
        $input = $request->all();
        $item = DMVanChuyenModel::find($id);
        $item->name = $input['name'];
        $item->image = $input['image'];
        $item->alt = $input['alt'];
        $item->save();
        return redirect()->route('qtv.cai-dat.danh-muc-vc.index');
    }
    public function destroy($id)
    {
        $item = DMVanChuyenModel::find($id);
        $item->delete();
        return redirect()->route('qtv.cai-dat.danh-muc-vc.index');
    }
}
