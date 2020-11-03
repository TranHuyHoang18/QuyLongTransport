<?php

namespace App\Http\Controllers\Nhanvien;

use App\Http\Controllers\Controller;
use App\Models\NhanVienModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth:nhanvien');
    }
    public function index()
    {
        return view('user.homepage.index');
    }
}
