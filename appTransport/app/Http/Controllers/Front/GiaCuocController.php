<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\SeoPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiaCuocController extends Controller
{
    public $data= array();
    public function __construct()
    {
        $this->data['seo'] = SeoPageModel::find(7);
    }
    public function index()
    {
        $this->data['categories']=DB::table('giacuoc_cates')
            ->orderBy('id','ASC')
            ->get();
        $this->data['pages'] = array();
        foreach ($this->data['categories'] as $category)
        {
            $id = $category->id;
            $this->data['pages'][$id] =  DB::table('giacuoc_pages')
                ->where('category','=',$id)
                ->orderBy('created_at','DESC')
                ->get();
        }
        return view('frontend.content.giacuoc.index',$this->data);
    }
    public function detail($slug_cate)
    {
        $item = DB::table('giacuoc_cates')
            ->where('slug','=',$slug_cate)
            ->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $item = DB::table('giacuoc_pages')
            ->where('category','=',$item->id)
            ->get();
        $this->data['page']= $item[0];
        return view('frontend.content.giacuoc.detail',$this->data);
    }
}
