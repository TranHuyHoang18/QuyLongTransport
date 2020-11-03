<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\DichVuPageModel;
use App\Models\SeoPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DichVuController extends Controller
{
    public $data= array();
    public function __construct()
    {
        $this->data['seo'] = SeoPageModel::find(6);
    }
    public function index()
    {
        $this->data['seo'] = SeoPageModel::find(6);
        $this->data['categories']=DB::table('dichvucates')->get();
        $this->data['pages'] = array();
        foreach ($this->data['categories'] as $category)
        {
            $id = $category->id;
            $this->data['pages'][$id] =  DB::table('dichvupages')
                ->where('category','=',$id)
                ->orderBy('created_at','DESC')
                ->get();
        }
        return view('frontend.content.dichvu.index',$this->data);
    }

    public function detail($slug_cate)
    {
        $item = DB::table('dichvucates')
            ->where('slug','=',$slug_cate)->get();
        $item = $item[0];
        $this->data['parent'] = $item;
        $item = DB::table('dichvupages')
            ->where('category','=',$item->id)
            ->get();
        $this->data['page']= $item[0];
        $tmp = DichVuPageModel::find($item[0]->id);
        $tmp->views = $tmp->views + 1;
        $tmp->save();
        return view('frontend.content.dichvu.detail',$this->data);
    }
}
