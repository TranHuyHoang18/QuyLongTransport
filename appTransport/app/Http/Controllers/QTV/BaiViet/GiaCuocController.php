<?php

namespace App\Http\Controllers\QTV\BaiViet;

use App\Http\Controllers\Controller;
use App\Models\GiaCuocPageModel;
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
        $data['map'] = array();
        $tk = DB::table('giacuoc_cates')->get();
        foreach ($tk as $tl)
        {
            $data['map'][$tl->id]= $tl->name;
        }
        $data['pages'] = DB::table('giacuoc_pages')
            ->orderBy('created_at','DESC')
            ->orderBy('category','ASC')
            ->paginate(4);
        $data['categories'] =$this->cate;

        return view('qtv.content.baiviet.giacuoc.index',$data);
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

        $item = new GiaCuocPageModel();
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->image = isset($input['image']) ? $input['image'] : '';
        $item->alt = isset($input['alt']) ? $input['alt'] : '';
        $item->title= $input['titles'];
        $item->keywords= $input['keywords'];
        $item->description= $input['descriptions'];
        $item->status =0;
        $item->views =random_int(5,15);
        $item->save();
        return redirect()->route('qtv.baiviet.giacuoc.index');
    }

    public function update(Request $request,$id)
    {
        $input = $request->all();

        $item = GiaCuocPageModel::find($id);
        $item->name = $input['name'];
        $item->slug = $this->slugify($input['name']);
        $item->category = $input['id_parent'];
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->image = isset($input['image']) ? $input['image'] : '';
        $item->alt = isset($input['alt']) ? $input['alt'] : '';
        $item->title= $input['titles'];
        $item->keywords= $input['keywords'];
        $item->description= $input['descriptions'];
        $item->save();
        return redirect()->route('qtv.baiviet.giacuoc.index');
    }
    public function destroy($id)
    {
        $item = GiaCuocPageModel::find($id);
        $item->delete();
        return redirect()->route('qtv.baiviet.giacuoc.index');
    }
}
