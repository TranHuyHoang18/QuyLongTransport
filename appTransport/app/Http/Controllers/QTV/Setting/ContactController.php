<?php

namespace App\Http\Controllers\QTV\Setting;

use App\Http\Controllers\Controller;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }

    public function index()
    {
        $item = DB::table('contact')->get();
        $data['contact'] = null;
        if(count($item)>0) $data['contact'] = $item[0];
        return view('qtv.content.caidat.lienhe.index',$data);
    }
    public function update(Request $request)
    {
        $item = DB::table('contact')->get();
        $data['contact'] = null;
        if(count($item)>0) $data['contact'] = $item[0];
        $tmp = ContactModel::find($item[0]->id);
        $tmp->desc = $request->desc;
        $tmp->save();
        return redirect()->route('qtv.cai-dat.lien-he.index');
    }
}
