<?php

namespace App\Http\Controllers\Admin\TraCuu;

use App\Http\Controllers\Controller;
use App\models\AddressModel;
use App\Models\DiemGuiHangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\CountTest;

class DiemGuiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['diemguihangs'] = DB::table('diemguihangs')
            ->get();
        $data['tinhs'] = DB::table('address')
            ->orderBy('id','ASC')
            ->get();
        return view('backend.content.tracuu.diemguihang.index',$data);
    }
    public function add()
    {
        $data['tinhs'] = DB::table('address')
            ->get();
        return view('backend.content.tracuu.diemguihang.add',$data);
    }
    public function findIDCity($name)
    {
        $tinh = DB::table('address')
            ->where('tinh','=',$name)
            ->get();
        if(count($tinh)>0)
            return $tinh[0]->id;
        return 0;
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $tinhs=  array();
        for ($i=1;$i<=count($input['tinh']);$i++)
        {
            $tinhs[$i]= array();
            $tinhs[$i]['tinh']=$input['tinh'][$i];
            $tinhs[$i]['id_tinh']=$this->findIDCity($input['tinh'][$i]);
            $tinhs[$i]['mavung']=$input['mavung'][$i];
            $tinhs[$i]['khuvuctra']=$input['khuvuctra'][$i];
            $tinhs[$i]['CPN']=$input['CPN'][$i];
            $tinhs[$i]['VCN']=$input['VCN'][$i];
            $tinhs[$i]['VTK']=$input['VTK'][$i];
        }
        $item= new DiemGuiHangModel();
        $item->diemguihang = $input['diemguihang'];
        $item->id_tinh = $input['id_tinh'];
        $item->tinhs = json_encode($tinhs);
        $item->save();
        return redirect()->route('admin.diem-gui.index');
    }
    public function edit($id)
    {
        $data['tinhs'] = DB::table('address')
            ->get();
        $data['diemguihang'] = DiemGuiHangModel::find($id);

        return view('backend.content.tracuu.diemguihang.edit',$data);
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $item = DiemGuiHangModel::find($id);
        $tinhs=  array();
        for ($i=1;$i<=count($input['tinh']);$i++)
        {
            $tinhs[$i]= array();
            $tinhs[$i]['tinh']=$input['tinh'][$i];
            $tinhs[$i]['id_tinh']=$this->findIDCity($input['tinh'][$i]);
            $tinhs[$i]['mavung']=$input['mavung'][$i];
            $tinhs[$i]['khuvuctra']=$input['khuvuctra'][$i];
            $tinhs[$i]['CPN']=$input['CPN'][$i];
            $tinhs[$i]['VCN']=$input['VCN'][$i];
            $tinhs[$i]['VTK']=$input['VTK'][$i];
        }
        $item->diemguihang = $input['diemguihang'];
        $item->id_tinh = $input['id_tinh'];
        $item->tinhs = json_encode($tinhs);
        $item->save();
        return redirect()->route('admin.diem-gui.index');
    }
    public function destroy($id)
    {
        $item = DiemGuiHangModel::find($id);
        $item->delete();
        return redirect()->route('admin.diem-gui.index');
    }
}
