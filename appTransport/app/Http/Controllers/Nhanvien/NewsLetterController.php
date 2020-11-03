<?php

namespace App\Http\Controllers\Nhanvien;

use App\Http\Controllers\Controller;
use App\Models\NewsLetterModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsLetterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:nhanvien');
    }
    public function index()
    {
        $data['newsletters'] = DB::table('newsletter')
            ->paginate(12);
        return view('user.content.newsletter.index',$data);
    }
    public function destroy($id)
    {
        $item = NewsLetterModel::find($id);
        $item->delete();
        return redirect()->route('nhanvien.newsletter.index')->with('success-message', 'Đã Xóa thành công!');
    }
}
