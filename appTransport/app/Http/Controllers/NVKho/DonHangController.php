<?php

namespace App\Http\Controllers\NVKho;

use App\Http\Controllers\Controller;
use App\Models\DonHangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DonHangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:nvkho');
    }
    public function index()
    {
        $data['donhangs']=DB::table('donhangs')
            ->where('id_taixe','=',0)
            ->orderBy('created_at','DESC')
            ->get();
        $data['taixes']=DB::table('taixes')
            ->get();
        return view('nvkho.content.donhang.index',$data);
    }
    public function all()
    {
        $data['donhangs']=DB::table('donhangs')
            ->orderBy('id_taixe','ASC')
            ->orderBy('created_at','DESC')
            ->get();
        $data['taixes']=DB::table('taixes')
            ->get();
        return view('nvkho.content.donhang.all',$data);
    }
    public function editStatus($id,$tt)
    {
        $item = DonHangModel::find($id);
        $item->status = $tt;
        $item->save();
        return redirect()->route('nvkho.donhang.all')->with('success-message', 'Sửa đơn hàng thành công!');
    }
    public function tracking($id,Request $request)
    {

        $input = $request->all();
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
            $chitiet[$chitiet[0]]['content']=$input['tracking'];
            $donhang->chitiet = json_encode($chitiet);
            $donhang->save();
        }
        return redirect()->route('nvkho.donhang.all')->with('success-message', 'Tracking đơn hàng thành công!');
    }
    public function DeleteTracking($madonhang,$stt)
    {
        $item = DB::table('donhangs')
            ->where('madonhang','=',$madonhang)
            ->get();
        if(count($item)>0)
        {
            $id = $item[0]->id;
            $donhang= DonHangModel::find($id);
            $chitiet = json_decode($donhang->chitiet);
            for($j = $stt;$j<$chitiet[0];$j++)
            {
                $chitiet[$j]->{'date'} =$chitiet[$j+1]->{'date'};
                $chitiet[$j]->{'time'} =$chitiet[$j+1]->{'time'};
                $chitiet[$j]->{'content'} =$chitiet[$j+1]->{'content'};
            }
            $chitiet[$chitiet[0]] = null;
            $chitiet[0] = $chitiet[0]-1;
            $donhang->chitiet = json_encode($chitiet);
            $donhang->save();
        }

        return redirect()->route('nvkho.donhang.all')->with('success-message', 'Xóa Tracking đơn hàng thành công!');
    }

}
