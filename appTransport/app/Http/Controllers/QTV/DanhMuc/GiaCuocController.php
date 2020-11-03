<?php

namespace App\Http\Controllers\QTV\DanhMuc;

use App\Http\Controllers\Controller;
use App\Models\GiaCuocCateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GiaCuocController extends Controller
{
    public $cate = array();
    public $n_cate=0;
    public $dd= array();
    public $t= array();
    public function dequy($k,$tk)
    {
        $this->n_cate++;
        $this->cate[$this->n_cate] = array();
        $this->cate[$this->n_cate]['id'] = $this->t[$k]->id;
        $this->cate[$this->n_cate]['name'] = $this->t[$k]->name;
        $this->cate[$this->n_cate]['slug'] = $this->t[$k]->slug;
        $this->cate[$this->n_cate]['level'] = $tk;
        $this->dd[$k] = true;
        for($i=0;$i< count($this->t);$i++)
        {
            if($this->t[$i]->id_parent == $this->t[$k]->id && $this->dd[$i] == false)
            {
                $this->dequy($i,$tk+1);
            }
        }
    }
    public function __construct()
    {
        $this->middleware('auth:qtv');
        $this->t = DB::table('giacuoc_cates')
            ->get();
        // khoi tao mang danh dau de quy
        for($i=0;$i<=count($this->t);$i++)
            $this->dd[$i] = false;
        // de quy
        for ($i=0;$i<count($this->t);$i++)
        {
            if($this->dd[$i]==false)
            {
                $this->dequy($i,0);
            }
        }
    }
    public function index()
    {
        $data['categories'] =$this->cate;

        return view('qtv.content.danhmuc.giacuoc.index',$data);
    }
    public function edit($id)
    {
        $data['category'] = GiaCuocCateModel::find($id);
        return view('qtv.content.danhmuc.giacuoc.edit',$data);
    }
    public function update(Request  $request, $id)
    {
        $input= $request->all();
        $category = GiaCuocCateModel::find($id);
        $category->name = $input['name'];
        $category->slug = $input['slug'];
        $category->seo_title = $input['seo_title'];
        $category->seo_desc = $input['seo_desc'];
        $category->seo_keywords = $input['seo_keywords'];
        $category->save();
        return redirect()->route('qtv.danhmuc.giacuoc.index');
    }
}
