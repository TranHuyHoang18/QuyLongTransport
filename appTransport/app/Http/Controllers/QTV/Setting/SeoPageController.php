<?php

namespace App\Http\Controllers\QTV\Setting;

use App\Http\Controllers\Controller;
use App\Models\SeoPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeoPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }
    public function index()
    {
        $data['pages'] = DB::table('seo_pages')
            ->paginate(12);
        return view('qtv.content.caidat.seopage.index',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $item = new SeoPageModel();
        $item->name = $input['name'];
        $item->seo_title= $input['seo_title'];
        $item->seo_keyword= $input['seo_keyword'];
        $item->seo_desc= $input['seo_desc'];
        $item->save();
        return redirect()->route('qtv.cai-dat.seo-page.index');
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $item = SeoPageModel::find($id);
        $item->name = $input['name'];
        $item->seo_title= $input['seo_title'];
        $item->seo_keyword= $input['seo_keyword'];
        $item->seo_desc= $input['seo_desc'];
        $item->save();
        return redirect()->route('qtv.cai-dat.seo-page.index');
    }
}
