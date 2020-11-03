<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BlogCategoryModel;
use App\Models\BlogPageModel;
use App\Models\SeoPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class BlogController extends Controller
{
    public $data= array();
    public $catek= array();
    public function __construct()
    {
        $this->data['seo'] = SeoPageModel::find(8);
        $this->catek[1] =[1,6,8,9,19,20,21,22,40,41];
        $this->catek[2] =[2,36,37,38,39];
        $this->catek[3] =[3,28,29,30,31];
        $this->catek[4] =[4,32,33,34,35];
        $this->catek[5]=[5,23,24,26,27];
        $this->catek[6]=[6];
        $this->catek[8]=[8];
        $this->catek[9]=[9];
        $this->catek[19]=[19,20,21,22];
        $this->catek[20]=[20];
        $this->catek[21]=[21];
        $this->catek[22]=[22];
        $this->catek[40]=[40];
        $this->catek[41]=[41];
        $this->catek[36]=[36];
        $this->catek[37]=[37];
        $this->catek[38]=[38];
        $this->catek[39]=[39];
        $this->catek[28]=[28];
        $this->catek[29]=[29];
        $this->catek[30]=[30];
        $this->catek[31]=[31];
        $this->catek[32]=[32];
        $this->catek[32]=[32];
        $this->catek[33]=[33];
        $this->catek[34]=[34];
        $this->catek[35]=[35];
        $this->catek[23]=[23];
        $this->catek[24]=[24];
        $this->catek[26]=[26];
        $this->catek[27]=[27];

    }
    public function index()
    {
        $item= DB::table('blog_categories')
            ->where('level','=',1)
            ->orderBy('id','ASC')
            ->get();
        $this->data['pages'] = array();

        foreach ($item as $tmp)
        {
            $this->data['pages'][$tmp->id] = DB::table('blog_pages')
                    ->whereIn('id_category',$this->catek[$tmp->id])
                    ->orderBy('status','ASC')
                    ->orderBy('created_at','DESC')
                    ->orderBy('views','DESC')
                    ->get();
        }
        $this->data['main_cates'] = $item;

        return view('frontend.content.blog.index',$this->data);
    }
    public function detail($slug_cate)
    {
        $item=  DB::table('blog_categories')
            ->where('slug','=',$slug_cate)
            ->get();
        $cate = $item[0];
        switch ($cate->level)
        {
            case 1:
                {
                    $this->data['categories'] = DB::table('blog_categories')
                        ->where('id_parent','=',$cate->id)->get();
                    foreach ($this->data['categories'] as $tmp)
                    {
                        $this->data['pages'][$tmp->id] = DB::table('blog_pages')
                            ->whereIn('id_category',$this->catek[$tmp->id])
                            ->orderBy('status','ASC')
                            ->orderBy('created_at','DESC')
                            ->orderBy('views','DESC')
                            ->get();
                    }
                    $this->data['cate'] = $cate;
                    return view('frontend.content.blog.index_level1',$this->data);
                }
            case 2:
                {
                    $this->data['categories'] = DB::table('blog_categories')
                        ->where('id_parent','=',$cate->id)->get();
                    if(count($this->data['categories']) ==0 )
                    {

                        $this->data['pages']= DB::table('blog_pages')
                            ->where('id_category','=',$cate->id)
                            ->orderBy('status','ASC')
                            ->orderBy('created_at','DESC')
                            ->orderBy('views','DESC')
                            ->paginate(10);
                        $this->data['cate3'] = $cate;
                        $this->data['cate2'] = $cate;
                        $this->data['cate1'] = BlogCategoryModel::find($this->data['cate2']->id_parent);
                        return view('frontend.content.blog.index_level3',$this->data);
                    }
                    foreach ($this->data['categories'] as $tmp)
                    {
                        $this->data['pages'][$tmp->id] = DB::table('blog_pages')
                            ->whereIn('id_category',$this->catek[$tmp->id])
                            ->orderBy('status','ASC')
                            ->orderBy('created_at','DESC')
                            ->orderBy('views','DESC')
                            ->get();
                    }
                    $tmk =  DB::table('blog_categories')
                        ->where('id','=',$cate->id_parent)
                        ->get();
                    $this->data['cate1'] = $tmk[0];
                    $this->data['cate2'] = $cate;

                    return view('frontend.content.blog.index_level2',$this->data);
                }
            default:
                {
                    $this->data['pages']= DB::table('blog_pages')
                        ->where('id_category','=',$cate->id)
                        ->orderBy('status','ASC')
                        ->orderBy('created_at','DESC')
                        ->orderBy('views','DESC')
                        ->paginate(10);
                    $this->data['cate3'] = $cate;
                    $this->data['cate2'] = BlogCategoryModel::find($cate->id_parent);
                    $this->data['cate1'] = BlogCategoryModel::find($this->data['cate2']->id_parent);
                    return view('frontend.content.blog.index_level3',$this->data);
                }
        }
    }
    public function detailPage($slug_page)
    {
        $item = DB::table('blog_pages')
            ->where('slug','=',$slug_page)
            ->get();
        $category = $item[0]->id_category;
        $this->data['related_pages']=DB::table('blog_pages')
            ->where('id_category','=',$category)
            ->get();
        $page = $item[0];
        $this->data['page'] = $page;
        $comment =DB::table('comments')
            ->where('id_page','=',$page->id)
            ->orderBy('status','DESC')
            ->orderBy('created_at','ASC')
            ->get();
        $d = array();
        $n_d = 0;
        foreach ($comment as $ct)
        {
            if($ct->level == 0)
            {
                $n_d++;
                $d[$n_d] = $ct;
                foreach ($comment as $ctt)
                {
                    if($ctt->level == 1 && $ctt->id_parent == $ct->id)
                    {
                        $n_d++;
                        $d[$n_d] = $ctt;
                    }
                }
            }
        }

        $this->data['comments'] = $d;
        /*exit();*/
        $item = BlogPageModel::find($page->id);
        $item->views = $item->views+1;
        $item->save();
        return view('frontend.content.blog.detail',$this->data);
    }
}
