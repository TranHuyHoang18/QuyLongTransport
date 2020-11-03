<?php

namespace App\Http\Controllers\Admin\TraCuu;

use App\Http\Controllers\Controller;
use App\Models\CuocModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuocVanChuyenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['diemguihangs'] = DB::table('diemguihangs')
            ->get();
        $data['cuocs'] = DB::table('cuocs')
            ->join('diemguihangs','diemguihangs.id','=','cuocs.id_diemguihang')
            ->get();
        return view('backend.content.tracuu.cuocvanchuyen.index',$data);
    }
    public function add()
    {
        $data['tinhs'] = DB::table('address')
            ->get();
        $data['diemguihangs'] = DB::table('diemguihangs')
            ->get();
        return view('backend.content.tracuu.cuocvanchuyen.add',$data);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        echo"<pre>";
        print_r($input);
        echo "</pre>";

        $cpns=  array();
        for ($i=1;$i<=count($input['CPN_khoiluong']);$i++)
        {
            $cpns[$i]= array();
            $cpns[$i]['khoiluong']=$input['CPN_khoiluong'][$i];
            $cpns[$i]['A']=$input['CPN_A'][$i];
            $cpns[$i]['B']=$input['CPN_B'][$i];
            $cpns[$i]['C']=$input['CPN_C'][$i];
            $cpns[$i]['D']=$input['CPN_D'][$i];
            $cpns[$i]['E']=$input['CPN_E'][$i];
            $cpns[$i]['F']=$input['CPN_F'][$i];
            $cpns[$i]['G']=$input['CPN_G'][$i];
            $cpns[$i]['H']=$input['CPN_H'][$i];
            $cpns[$i]['I']=$input['CPN_I'][$i];
        }
        $vcns=  array();
        for ($i=1;$i<=count($input['VCN_khoiluong']);$i++)
        {
            $vcns[$i]= array();
            $vcns[$i]['khoiluong']=$input['VCN_khoiluong'][$i];
            $vcns[$i]['A']=$input['VCN_A'][$i];
            $vcns[$i]['B']=$input['VCN_B'][$i];
            $vcns[$i]['C']=$input['VCN_C'][$i];
            $vcns[$i]['D']=$input['VCN_D'][$i];
            $vcns[$i]['E']=$input['VCN_E'][$i];
            $vcns[$i]['F']=$input['VCN_F'][$i];
            $vcns[$i]['G']=$input['VCN_G'][$i];
            $vcns[$i]['H']=$input['VCN_H'][$i];
            $vcns[$i]['I']=$input['VCN_I'][$i];
        }

        $vtks=  array();
        for ($i=1;$i<=count($input['VTK_khoiluong']);$i++)
        {
            $vtks[$i]= array();
            $vtks[$i]['khoiluong']=$input['VTK_khoiluong'][$i];
            $vtks[$i]['A']=$input['VTK_A'][$i];
            $vtks[$i]['B']=$input['VTK_B'][$i];
            $vtks[$i]['C']=$input['VTK_C'][$i];
            $vtks[$i]['D']=$input['VTK_D'][$i];
            $vtks[$i]['E']=$input['VTK_E'][$i];
            $vtks[$i]['F']=$input['VTK_F'][$i];
            $vtks[$i]['G']=$input['VTK_G'][$i];
            $vtks[$i]['H']=$input['VTK_H'][$i];
            $vtks[$i]['I']=$input['VTK_I'][$i];
        }
        echo"<pre>";
        print_r($cpns);
        echo "</pre>";
        echo"<pre>";
        print_r($vcns);
        echo "</pre>";
        echo"<pre>";
        print_r($vtks);
        echo "</pre>";
        /*exit();*/
        $item= new CuocModel();
        $item->id_diemguihang = $input['id_diemguihang'];
        $item->CPN = json_encode($cpns);
        $item->VCN = json_encode($vcns);
        $item->VTK = json_encode($vtks);
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
