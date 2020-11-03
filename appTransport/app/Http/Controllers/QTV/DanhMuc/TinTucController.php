<?php

namespace App\Http\Controllers\QTV\DanhMuc;

use App\Http\Controllers\Controller;
use App\Models\BlogCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinTucController extends Controller
{
    public $cate = array();
    public $n_cate=0;
    public $dd= array();
    public $t= array();
    public function dequy($k)
    {
        $this->n_cate++;
        $this->cate[$this->n_cate] = array();
        $this->cate[$this->n_cate]['id'] = $this->t[$k]->id;
        $this->cate[$this->n_cate]['name'] = $this->t[$k]->name;
        $this->cate[$this->n_cate]['level'] = $this->t[$k]->level;
        $this->cate[$this->n_cate]['slug'] = $this->t[$k]->slug;
        $this->dd[$k] = true;
        for($i=0;$i< count($this->t);$i++)
        {
            if($this->t[$i]->id_parent == $this->t[$k]->id && $this->dd[$i] == false)
            {
                $this->dequy($i);
            }
        }
    }
    public function __construct()
    {
        $this->middleware('auth:qtv');
        $this->t = DB::table('blog_categories')
            ->get();
        // khoi tao mang danh dau de quy
        for($i=0;$i<=count($this->t);$i++)
            $this->dd[$i] = false;
        // de quy
        for ($i=0;$i<count($this->t);$i++)
        {
            if($this->dd[$i]==false)
            {
                $this->dequy($i);
            }
        }
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
        $data['categories'] =$this->cate;
        return view('qtv.content.danhmuc.tintuc.index',$data);
    }
    public function add()
    {
        $data['categories'] = $this->cate;
        return view('qtv.content.blog.category.add',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $item = new BlogCategoryModel();
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->id_parent = $input['id_parent'];
        if($input['id_parent']>0)
        {
            $parent = BlogCategoryModel::find($input['id_parent']);
            $item->level = $parent->level + 1;
        }
        else
        {
            $item->level = 1;
        }
        $item->save();
        return redirect()->route('qtv.blog.category.index');
    }
    public function edit($id)
    {
        $data['category'] = BlogCategoryModel::find($id);
        return view('qtv.content.danhmuc.tintuc.edit',$data);
    }
    public function update(Request  $request, $id)
    {
        $input= $request->all();
        $category = BlogCategoryModel::find($id);
        $category->name = $input['name'];
        $category->slug = $input['slug'];
        $category->seo_title = $input['seo_title'];
        $category->seo_desc = $input['seo_desc'];
        $category->seo_keywords = $input['seo_keywords'];
        $category->save();
        return redirect()->route('qtv.danhmuc.tintuc.index');
    }
   /* public function edit($id)
    {
        $data['item'] = BlogCategoryModel::find($id);
        $data['categories'] = $this->cate;
        return view('backend.content.blog.category.edit',$data);
    }*/
    /*public function updateLevel($id,$level)
    {
        $tmp = DB::table('blog_categories')->get();
        foreach ($tmp as $tp)
        {
            if($tp->id_parent == $id)
            {
                $tk = BlogCategoryModel::find($tp->id);
                $tk->level = $level+1;
                $tk->save();
                $this->updateLevel($tk->id,$tk->level);
            }
        }
    }*/
   /* public function update(Request $request,$id)
    {
        $input = $request->all();
        $item = BlogCategoryModel::find($id);
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->id_parent = $input['id_parent'];
        if($input['id_parent']>0)
        {
            $parent = BlogCategoryModel::find($input['id_parent']);
            $item->level = $parent->level + 1;

        }
        else
        {
            $item->level = 1;
        }
        $this->updateLevel($id,$item->level);
        $item->save();
        return redirect()->route('qtv.blog.category.index');
    }*/
    public function destroy($id)
    {
        $item = BlogCategoryModel::find($id);
        $item->delete();
        return redirect()->route('qtv.blog.category.index');

    }
}
