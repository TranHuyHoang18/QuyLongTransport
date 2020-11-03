<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\SeoPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuyenDungController extends Controller
{
    public $data= array();
    public function __construct()
    {
        $this->data['seo'] = SeoPageModel::find(9);
    }
    public function index()
    {
        $this->data['categories'] = DB::table('tuyendung_categories')->get();
        $this->data['pages'] = array();
        foreach ($this->data['categories'] as $category)
        {
            $id = $category->id;
            $this->data['pages'][$id] =  DB::table('tuyendung_pages')
                ->where('id_category','=',$id)
                ->orderBy('created_at','DESC')
                ->orderBy('date','DESC')
                ->get();
        }
        return view('frontend.content.tuyendung.index',$this->data);
    }
    public function danhmuc($slug)
    {
        $cate = DB::table('tuyendung_categories')
            ->where('slug','=',$slug)
            ->get();

        if(count($cate)>0) {
            $cate = $cate['0'];
        }
        $this->data['pages'] = DB::table('tuyendung_pages')
            ->where('id_category','=',$cate->id)
            ->orderBy('created_at','DESC')
            ->orderBy('date','DESC')
            ->get();
        $this->data['cate'] = $cate;
        $this->data['name'] = $cate->name;
        $this->data['slug'] = $slug;

        return view('frontend.content.tuyendung.category',$this->data);
    }
    public function detail($slug_cate,$slug)
    {
        $cate = DB::table('tuyendung_categories')
            ->where('slug','=',$slug_cate)
            ->get();
        $this->data['cate'] = $cate;
        if(count($cate)>0) {
            $cate = $cate['0'];


        }
        $this->data['page'] = DB::table('tuyendung_pages')
            ->where('id_category', '=', $cate->id)
            ->where('slug', '=', $slug)->get();
        $this->data['name'] = $cate->name;
        return view('frontend.content.tuyendung.detail',$this->data);
    }
}
