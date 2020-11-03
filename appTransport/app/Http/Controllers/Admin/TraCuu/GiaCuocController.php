<?php

namespace App\Http\Controllers\Admin\TraCuu;

use App\Http\Controllers\Controller;
use App\models\AddressModel;
use App\Models\GoiCuocModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiaCuocController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function converttext($id_tinh,$id_huyen)
    {
        $tinh = AddressModel::find($id_tinh);
        $huyens = json_decode($tinh->huyen);
        $huyen = $huyens[$id_huyen];

        $text = $huyen . ' - ' .$tinh->tinh;
        return $text;
    }
    public function index()
    {
        $data['goicuocs'] = DB::table('goicuocs')
            ->paginate(24);
        $data['tinhs'] = DB::table('address')
            ->orderBy('id','ASC')
            ->get();
        return view('backend.content.tracuu.goicuoc.index',$data);
    }
    public function add()
    {
        $data['tinhs'] = DB::table('address')
            ->get();
        return view('backend.content.tracuu.goicuoc.add',$data);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        /*echo"<pre>";
        print_r($input);
        echo "</pre>";
        exit();*/
        $item = new GoiCuocModel();
        $item->loai = $input['loai'];
        $item->thoigianvc = $input['thoigianvc'];
        $item->hinhthucvc = $input['hinhthucvc'];
        $item->gia = $input['gia'];
        $item->gia_doitac = $input['gia_doitac'];
        $item->khoiluong = $input['khoiluong'];
        $item->chitiet = $input['chitiet'];
        $dcgui= array();
        $dcgui['tinh'] = $input['tinh_gui'];
        $dcgui['huyen'] = $input['huyen_gui'][$input['tinh_gui']-1];
        $item->diachigui = json_encode($dcgui);
        $dcgui['tinh'] = $input['tinh_nhan'];
        $dcgui['huyen'] = $input['huyen_nhan'][$input['tinh_nhan']-1];
        $item->diachinhan= json_encode($dcgui);
        $item->save();
        return redirect()->route('admin.goicuoc.index');
    }
    public function edit($id)
    {
        $data['tinhs'] = DB::table('address')
            ->get();
        $data['goicuoc'] = GoiCuocModel::find($id);

        return view('backend.content.tracuu.goicuoc.edit',$data);
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $item = GoiCuocModel::find($id);
        $item->loai = $input['loai'];
        $item->thoigianvc = $input['thoigianvc'];
        $item->hinhthucvc = $input['hinhthucvc'];
        $item->gia = $input['gia'];
        $item->gia_doitac = $input['gia_doitac'];
        $item->khoiluong = $input['khoiluong'];
        $item->chitiet = $input['chitiet'];
        $dcgui= array();
        $dcgui['tinh'] = $input['tinh_gui'];
        $dcgui['huyen'] = $input['huyen_gui'][$input['tinh_gui']];
        $item->diachigui = json_encode($dcgui);
        $dcnhan= array();
        $dcnhan['tinh'] = $input['tinh_nhan'];
        $dcnhan['huyen'] = $input['huyen_nhan'][$input['tinh_nhan']];
        $item->diachinhan= json_encode($dcnhan);
        $item->save();
        return redirect()->route('admin.goicuoc.index');
    }
    public function destroy($id)
    {
        $item = GoiCuocModel::find($id);
        $item->delete();
        return redirect()->route('admin.goicuoc.index');
    }
}
