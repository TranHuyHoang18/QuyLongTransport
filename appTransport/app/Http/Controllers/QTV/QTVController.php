<?php

namespace App\Http\Controllers\QTV;

use App\Http\Controllers\Controller;
use App\Models\QTVModel;
use Illuminate\Http\Request;

class QTVController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }

    public function index()
    {
        return view('qtv.homepage.new_index');
    }
    public function create()
    {
        return view('qtv.auth.register');
    }
    public function store(Request $request) {
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ));
        $qtvModel = new QTVModel();
        $qtvModel->name = $request->name;
        $qtvModel->email = $request->email;
        $qtvModel->password = bcrypt($request->password);
        $qtvModel->save();
        return redirect()->route('qtv.auth.login');
    }
}
