<?php

namespace App\Http\Controllers\QTV\DanhMuc;

use App\Http\Controllers\Controller;
use App\Models\DichVuCateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DichVuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }

    public function index()
    {
        $data['categories'] =DB::table('dichvucates')
            ->get();
        return view('qtv.content.danhmuc.dichvu.index',$data);
    }

    public function store(Request  $request)
    {
        $input= $request->all();
        $category =  new DichVuCateModel();
        $category->name = $input['name'];
        $category->slug = $input['slug'];
        $category->seo_title = $input['seo_title'];
        $category->seo_desc = $input['seo_desc'];
        $category->seo_keywords = $input['seo_keywords'];
        $category->save();
        return redirect()->route('qtv.danhmuc.dichvu.index');
    }

    public function edit($id)
    {
        $data['category'] = DichVuCateModel::find($id);
        return view('qtv.content.danhmuc.dichvu.edit',$data);
    }

    public function update(Request  $request, $id)
    {
        $input= $request->all();
        $category = DichVuCateModel::find($id);
        $category->name = $input['name'];
        $category->slug = $input['slug'];
        $category->seo_title = $input['seo_title'];
        $category->seo_desc = $input['seo_desc'];
        $category->seo_keywords = $input['seo_keywords'];
        $category->save();
        return redirect()->route('qtv.danhmuc.dichvu.index');
    }

    public function destroy($id)
    {
        $category = DichVuCateModel::find($id);
        $category->delete();
        return redirect()->route('qtv.danhmuc.dichvu.index');
    }
}
