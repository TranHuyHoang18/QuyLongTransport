<?php

namespace App\Http\Controllers\QTV\BaiViet;

use App\Http\Controllers\Controller;
use App\Models\ChinhSachModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChinhSachController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }
    public function slugify($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
    public function index()
    {
        $data['pages'] = DB::table('chinhsachs')
            ->paginate(6);
        return view('qtv.content.baiviet.chinhsach.index',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $item = new ChinhSachModel();
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->seo_title= $input['seo_title'];
        $item->seo_keywords= $input['seo_keywords'];
        $item->seo_desc= $input['seo_desc'];
        $item->save();
        return redirect()->route('qtv.baiviet.chinhsach.index');
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $item = ChinhSachModel::find($id);
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->seo_title= $input['seo_title'];
        $item->seo_keywords= $input['seo_keywords'];
        $item->seo_desc= $input['seo_desc'];
        $item->save();
        return redirect()->route('qtv.baiviet.chinhsach.index');
    }
    public function destroy($id)
    {
        $item = ChinhSachModel::find($id);
        $item->delete();
        return redirect()->route('qtv.baiviet.chinhsach.index');
    }
}
