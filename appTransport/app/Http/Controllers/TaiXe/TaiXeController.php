<?php

namespace App\Http\Controllers\TaiXe;

use App\Http\Controllers\Controller;
use App\Models\DonHangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaiXeController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth:taixe');
    }
    public function index()
    {
        $data['donhangs'] =DB::table('donhangs')
            ->where('id_taixe','=',Auth::user()->id)
            ->where('status','<',4)
            ->get();
        return view('taixe.homepage.index',$data);
    }
    public function tracking($id,$nd)
    {

        $item = DB::table('donhangs')
            ->where('madonhang','=',$id)
            ->get();
        if(count($item)>0)
        {
            $id = $item[0]->id;
            $donhang= DonHangModel::find($id);
            $chitiet = json_decode($donhang->chitiet);
            $chitiet[0] = $chitiet[0]+1;
            $chitiet[$chitiet[0]] = array();
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $time = time();
            $date = getdate($time);

            $chitiet[$chitiet[0]]['date']=$date['mday'].'/'.$date['mon'].'/'.$date['year'];
            $chitiet[$chitiet[0]]['time']=$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
            $chitiet[$chitiet[0]]['content']=$nd;
            $donhang->chitiet = json_encode($chitiet);
            if($nd =='Đã lấy hàng')
            {
                $donhang->status = 2;
            }
            else
            {
                $donhang->status = 4;
            }

            $donhang->save();
        }
        return redirect()->route('taixe');
    }
}
