<?php

namespace App\Http\Controllers\QTV\TraCuu;

use App\Http\Controllers\Controller;
use App\Models\BuuCucModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuuCucController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:qtv');
    }
    public function slugify($str) {
        $str = trim(mb_strtolower($str));
        $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
        $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
        $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
        $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
        $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
        $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
        $str = preg_replace('/(đ)/', 'd', $str);
        $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
        $str = preg_replace('/([\s]+)/', '-', $str);
        return $str;
    }
    public function index()
    {
        $data['buucucs'] = DB::table('buucucs')
            ->paginate(12);
        return view('qtv.content.buucuc.index',$data);
    }
    public function add()
    {
        $data['address'] = DB::table('address')->get();
        return view('qtv.content.buucuc.add',$data);
    }
    public function store(Request $request)
    {

        $input = $request->all();
        $item = new BuuCucModel();
        $item->name = $input['name'];
        $item->code = $input['code'];
        $item->phone = $input['phone'];
        $item->id_tinh = $input['id_tinh'];
        $item->slug = $this->slugify($input['name']);
        $item->address = $input['address'];
        $item->location = $input['location'];

        $item->save();
        return redirect()->route('qtv.buucuc.index');
    }
    public function edit($id)
    {
        $data['address'] = DB::table('address')->get();
        $data['buucuc'] = BuuCucModel::find($id);
        return view('qtv.content.buucuc.edit',$data);
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $item = BuuCucModel::find($id);
        $item->name = $input['name'];
        $item->code = $input['code'];
        $item->phone = $input['phone'];
        $item->id_tinh = $input['id_tinh'];
        $item->slug = $this->slugify($input['name']);
        $item->address = $input['address'];
        $item->location = $input['location'];
        $item->save();

        return redirect()->route('qtv.buucuc.index');
    }
    public function destroy($id)
    {
        $item = BuuCucModel::find($id);
        $item->delete();
        return redirect()->route('qtv.buucuc.index');
    }
}
