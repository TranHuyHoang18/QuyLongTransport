<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['news'] = DB::table('news')
                ->orderBy('created_at','DESC')->paginate(12);
        return view('backend.content.news.index',$data);
    }
    public function add()
    {
        return view('backend.content.news.add');
    }
    public function store(Request $request)
    {

        $input = $request->all();

        $item = new NewsModel();
        $item->name = $input['name'];
        $item->intro = $input['intro'];
        $item->images = isset($input['images']) ? json_encode($input['images']) : '';
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->save();
        return redirect()->route('admin.news.index');
    }
    public function detail($id)
    {
        $data['news']= NewsModel::find($id);
        return view('backend.content.news.detail',$data);
    }
    public function edit($id)
    {
        $data['news'] = NewsModel::find($id);
        return view('backend.Content.news.edit',$data);
    }
    public function update(Request $request,$id)
    {
        $input = $request->all();
        $item = NewsModel::find($id);
        $item->name = $input['name'];
        $item->intro = $input['intro'];
        $item->images = isset($input['images']) ? json_encode($input['images']) : '';
        $item->desc = isset($input['desc']) ? $input['desc'] : '';
        $item->save();

        return redirect()->route('admin.news.index');
    }
    public function destroy($id)
    {
        $item = NewsModel::find($id);
        $item->delete();
        return redirect()->route('admin.news.index');
    }
}
