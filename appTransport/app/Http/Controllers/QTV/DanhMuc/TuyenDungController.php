<?php

namespace App\Http\Controllers\QTV\DanhMuc;

use App\Http\Controllers\Controller;
use App\Models\tuyendungCAteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuyenDungController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }
    public function index()
    {
        $data['categories'] =DB::table('tuyendung_categories')
            ->get();
        return view('qtv.content.danhmuc.tuyendung.index',$data);
    }
    public function store(Request $request)
    {
        $input= $request->all();
        $category =  new tuyendungCAteModel();
        $category->name = $input['name'];
        $category->slug = $input['slug'];
        $category->seo_title = $input['seo_title'];
        $category->seo_desc = $input['seo_desc'];
        $category->seo_keywords = $input['seo_keywords'];
        $category->save();
        return redirect()->route('qtv.danhmuc.tuyendung.index');
    }
    public function edit($id)
    {
        $data['category'] = tuyendungCAteModel::find($id);
        return view('qtv.content.danhmuc.tuyendung.edit',$data);
    }
    public function update(Request  $request, $id)
    {
        $input= $request->all();
        $category = tuyendungCAteModel::find($id);
        $category->name = $input['name'];
        $category->slug = $input['slug'];
        $category->seo_title = $input['seo_title'];
        $category->seo_desc = $input['seo_desc'];
        $category->seo_keywords = $input['seo_keywords'];
        $category->save();
        return redirect()->route('qtv.danhmuc.tuyendung.index');
    }
    public function destroy($id)
    {
        $category = tuyendungCAteModel::find($id);
        $category->delete();
        return redirect()->route('qtv.danhmuc.tuyendung.index');
    }
}
