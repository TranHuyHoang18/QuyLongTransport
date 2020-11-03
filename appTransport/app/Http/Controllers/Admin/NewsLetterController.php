<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsLetterModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsLetterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $data['newsletters'] = DB::table('newsletter')
            ->paginate(12);
        return view('backend.content.newsletter.index',$data);
    }
    public function destroy($id)
    {
        $item = NewsLetterModel::find($id);
        $item->delete();
        return redirect()->route('admin.newsletter.index');
    }
}
