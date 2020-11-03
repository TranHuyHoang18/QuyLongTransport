<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LienHeController extends Controller
{
    public $data= array();
    public function __construct()
    {
        $this->data['tuyendung_cates'] = DB::table('tuyendung_categories')
            ->get();
    }
    public function index()
    {
        $item = DB::table('contact')->get();
        $this->data['contact']= null;
        if(count($item)>0)
            $this->data['contact'] = $item[0];
        return view('frontend.content.lienhe.index',$this->data);
    }
}
