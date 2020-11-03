<?php

namespace App\Http\Controllers\KeToan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:ketoan');
    }
    public function thongke(Request $request)
    {
        echo $request->month;
        echo $request->id_khachhang;
        
    }
}
