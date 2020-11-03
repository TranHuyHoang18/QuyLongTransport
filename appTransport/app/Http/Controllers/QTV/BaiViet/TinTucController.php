<?php

namespace App\Http\Controllers\QTV\BaiViet;

use App\Http\Controllers\Controller;
use App\Models\BlogPageModel;
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
    public function index()
    {
        $data['map'] = array();
        $tk = DB::table('blog_categories')->get();
        foreach ($tk as $tl)
        {
            $data['map'][$tl->id]= $tl->name;
        }
        $data['categories'] = $this->cate;
        $data['pages'] = DB::table('blog_pages')
            ->orderBy('created_at','DESC')
            ->orderBy('id_category','ASC')
            ->paginate(12);
        return view('qtv.content.baiviet.tintuc.index',$data);
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

    public function store(Request $request)
    {
        $input = $request->all();

        $item = new BlogPageModel();
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->image = isset($input['image']) ? ($input['image']) : '';
        $item->id_category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->intro = isset($input['intro']) ? $input['intro'] : '';
        $item->alt = isset($input['alt']) ? $input['alt'] : '';
        $item->title= $input['titles'];
        $item->keywords= $input['keywords'];
        $item->description= $input['descriptions'];
        $item->views =0;
        $item->comments =0;
        $item->status =0;
        $item->vitri =$input['vitri'];
        $item->save();
        return redirect()->route('qtv.baiviet.tintuc.index');
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();

        $item = BlogPageModel::find($id);
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->image = isset($input['image']) ? ($input['image']) : '';
        $item->id_category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->intro = isset($input['intro']) ? $input['intro'] : '';
        $item->alt = isset($input['alt']) ? $input['alt'] : '';
        $item->title= $input['titles'];
        $item->keywords= $input['keywords'];
        $item->description= $input['descriptions'];
        $item->vitri = $input['vitri'];
        $item->save();
        return redirect()->route('qtv.baiviet.tintuc.index');
    }
    public function destroy($id)
    {
        $item = BlogPageModel::find($id);
        $item->delete();
        return redirect()->route('qtv.baiviet.tintuc.index');
    }
}
