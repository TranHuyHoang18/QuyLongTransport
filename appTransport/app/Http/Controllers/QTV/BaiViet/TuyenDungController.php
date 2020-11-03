<?php

namespace App\Http\Controllers\QTV\BaiViet;

use App\Http\Controllers\Controller;
use App\Models\TuyenDungPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuyenDungController extends Controller
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
        $data['map'] = array();
        $tk = DB::table('tuyendung_categories')->get();
        foreach ($tk as $tl)
        {
            $data['map'][$tl->id]= $tl->name;
        }
        $data['pages'] = DB::table('tuyendung_pages')
            ->orderBy('created_at','DESC')
            ->orderBy('id_category','ASC')
            ->paginate(6);
        $data['categories'] =DB::table('tuyendung_categories')
            ->get();
        return view('qtv.content.baiviet.tuyendung.index',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();

        $item = new TuyenDungPageModel();
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->id_category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->image = isset($input['image']) ? $input['image'] : '';
        $item->date = $input['date'];
        $item->status =0;
        $item->views =0;
        $item->alt = isset($input['alt']) ? $input['alt'] : '';
        $item->title= $input['titles'];
        $item->keywords= $input['keywords'];
        $item->description= $input['descriptions'];
        $item->save();
        return redirect()->route('qtv.baiviet.tuyendung.index');
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();

        $item = TuyenDungPageModel::find($id);
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->id_category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->image = isset($input['image']) ? $input['image'] : '';
        $item->alt = isset($input['alt']) ? $input['alt'] : '';
        $item->date = $input['date'];
        $item->title= $input['titles'];
        $item->keywords= $input['keywords'];
        $item->description= $input['descriptions'];
        $item->save();
        return redirect()->route('qtv.baiviet.tuyendung.index');
    }
    public function destroy($id)
    {
        $item = TuyenDungPageModel::find($id);
        $item->delete();
        return redirect()->route('qtv.baiviet.tuyendung.index');
    }
}
