<?php

namespace App\Http\Controllers\QTV\TraCuu;

use App\Http\Controllers\Controller;
use App\Imports\CuocImport;
use App\Models\CuocModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class CuocVanChuyenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }
    public function index()
    {
        $data['diemguihangs'] = DB::table('diemguihangs')
            ->get();
        $data['cuocs'] = DB::table('cuocs')
            ->join('diemguihangs','diemguihangs.id','=','cuocs.id_diemguihang')
            ->get();
        return view('qtv.content.tracuu.cuocvanchuyen.index',$data);
    }
    public function add()
    {
        $data['tinhs'] = DB::table('address')
            ->get();
        $data['diemguihangs'] = DB::table('diemguihangs')
            ->get();
        return view('qtv.content.tracuu.cuocvanchuyen.add',$data);
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $tmp = DB::table('cuocs')
            ->where('id_diemguihang','=',$input['id_diemguihang'])
            ->get();
        $cpns=  array();
        $vcns=  array();
        $vtks=  array();
        if (count($tmp)==0)
        {
            $item = new CuocModel();
            $item->id_diemguihang = $input['id_diemguihang'];
            $item->CPN = json_encode($cpns);
            $item->VCN = json_encode($vcns);
            $item->VTK = json_encode($vtks);
            $item->save();
        }
        else
        {
            $item = CuocModel::find($tmp[0]->id);
            $item->id_diemguihang = $input['id_diemguihang'];
            $item->save();
        }
        Excel::import(new CuocImport,request()->file('file'));
        return redirect()->route('qtv.cuoc.index')->with('success-message', 'Thêm bảng cước thành công!');
    }
    public function edit($id)
    {
        $data['tinhs'] = DB::table('address')
            ->get();
        $tmp = DB::table('cuocs')
            ->where('id_diemguihang','=',$id)
            ->get();
        if(count($tmp)>0) $data['cuoc'] = $tmp[0];
        $data['diemguihangs'] = DB::table('diemguihangs')
            ->get();
        return view('qtv.content.tracuu.cuocvanchuyen.edit',$data);
    }
    public function destroy($id)
    {
        $tmp = DB::table('cuocs')
            ->where('id_diemguihang','=',$id)
            ->get();
        if(count($tmp)>0)
        {
            $item = CuocModel::find($tmp[0]->id);
            $item->delete();
        }
        return redirect()->route('qtv.cuoc.index')->with('success-message', 'Xóa bảng cước thành công!');
    }
}
