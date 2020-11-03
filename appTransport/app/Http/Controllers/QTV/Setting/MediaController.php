<?php

namespace App\Http\Controllers\QTV\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }
    public function index()
    {
        return view('qtv.content.caidat.media.index');
    }
}
