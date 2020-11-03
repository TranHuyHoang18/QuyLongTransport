<?php

namespace App\Http\Controllers;

use App\Models\SeoPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public $data= array();
    public function __construct()
    {
        $this->data['seo'] = SeoPageModel::find(1);
    }
    public function index()
    {
        $this->data['news'] = DB::table('blog_pages')
            ->where('vitri','=',1)
            ->orderBy('created_at','DESC')
            ->get();
        $this->data['tinhs'] = DB::table('address')
            ->orderBy('id','ASC')
            ->get();
        $this->data['diemguihangs']=DB::table('diemguihangs')
            ->get();
        return view('frontend.homepage.index2',$this->data);
    }
    public function test()
    {
        $this->data['name'] = "Hoang";
        $this->data['age'] = "21";
        $tmp = array();
        $tmp['key1'] ='abc';
        $tmp['key2'] ='xyz';
        $this->data['a'] = $tmp;
        return view('tesst.index', $this->data);

    }
}
