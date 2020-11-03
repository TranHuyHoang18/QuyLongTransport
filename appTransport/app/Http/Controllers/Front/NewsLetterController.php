<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\NewsLetterModel;
use App\models\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsLetterController extends Controller
{
    public $data= array();
    public function store(Request $request)
    {
        $input = $request->all();

        $tmp = DB::table('newsletter')
            ->where('email','=',$input['email'])
            ->get();
        if(count($tmp) == 0 )
        {
            $item = new NewsLetterModel();
            $item->email = $input['email'];
            $item->save();
            return redirect()->route('home')->with('success-message', 'Đăng ký nhận thông báo thành công!');
        }
        else
        {
            return redirect()->route('home')->with('warning-message', 'Tài khoản '.$input['email'].' đã đăng ký nhận thông tin mới nhất!');
        }
    }
}
