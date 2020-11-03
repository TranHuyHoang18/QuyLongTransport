<?php

namespace App\Http\Controllers\Admin\DonHang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonHangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['donhangs']=DB::table('donhangs')
            ->get();
        return view('backend.content.donhang.index',$data);
    }
}
