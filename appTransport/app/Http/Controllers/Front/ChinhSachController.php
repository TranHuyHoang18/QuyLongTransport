<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChinhSachController extends Controller
{
    public $data= array();
    public function __construct()
    {
        $this->data['tuyendung_cates'] = DB::table('tuyendung_categories')
            ->get();
    }
    public function detail($slug_pages)
    {

        $this->data['page'] = DB::table('chinhsachs')
            ->where('slug', '=', $slug_pages)
            ->get();
        return view('frontend.content.chinhsach.detail',$this->data);
    }
}
