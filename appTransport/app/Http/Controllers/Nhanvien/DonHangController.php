<?php

namespace App\Http\Controllers\Nhanvien;

use App\Http\Controllers\Controller;
use App\models\AddressModel;
use App\Models\DonHangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonHangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:nhanvien');
    }
    public function index()
    {
        $data['donhangs']=DB::table('donhangs')
            ->where('id_nv','=',Auth::id())
            ->orderBy('created_at','DESC')
            ->paginate(12);
        return view('user.content.donhang.index',$data);
    }
    public function add()
    {
        $data['khachhangs']=DB::table('khachhangs')
            ->where('id_nhanvien','=',Auth::id())
            ->get();
        $data['tinhs'] = DB::table('address')
            ->orderBy('id','ASC')
            ->get();
        $data['diemguihangs']=DB::table('diemguihangs')
            ->get();
        return view('user.content.donhang.add',$data);
    }
    public function converttext($id_tinh,$id_huyen)
    {
        $tinh = AddressModel::find($id_tinh);
        $huyens = json_decode($tinh->huyen);
        $huyen = $huyens[$id_huyen];

        $text = $huyen . ' - ' .$tinh->tinh;
        return $text;
    }
    public function store(Request $request)
    {

        $input = $request->all();
        $id_tinhgui = $input['tinh_gui'];
        $id_huyengui = $input['huyen_gui'][$input['tinh_gui']];
        $id_tinhnhan =1;
        foreach($input['tinh_nhan'] as $tlk)
        {
            if ($tlk>1)
            {
                $id_tinhnhan = $tlk;
            }
        }
        $id_huyennhan = $input['huyen_nhan'][$id_tinhnhan-1];
        $info_vanchuyen = array();
        $info_vanchuyen['noidi'] = $this->converttext($id_tinhgui,$id_huyengui);
        $info_vanchuyen['noiden'] = $this->converttext($id_tinhnhan,$id_huyennhan);
        $info_vanchuyen['giacuoc'] = 0;
        $khoiluong= $input['trongluong'];
        /*// tinh cuoc
            $item = DB::table('diemguihangs')
                ->where('id_tinh','=',$id_tinhgui)
                ->get();
            $diemguihang= $item[0];
            $tinhs = json_decode($diemguihang->tinhs);
            $tinh=null;
            $ketqua= array();

            foreach ($tinhs as $tmp)
            {
                if($tmp->{'id_tinh'} == $id_tinhnhan)
                {
                    $tinh = $tmp;
                    break;
                }
            }
            $item = DB::table('cuocs')
                ->where('id_diemguihang','=',$diemguihang->id)
                ->get();
            $cuoc= $item[0];
            switch ($input['dichvu'])
            {
                case 'VCN':
                {
                    $vcns = json_decode($cuoc->VCN);
                    $i = 0;
                    foreach ($vcns as $vcn) {
                        $i++;
                        if ($vcn->{'khoiluong'} > $khoiluong) {
                            break;
                        }
                    }
                    $gia = $vcns->{$i - 1}->{$tinh->{'mavung'}}
                        + ($khoiluong - $vcns->{$i - 1}->{'khoiluong'}) * ($vcns->{$i}->{$tinh->{'mavung'}});
                    if($input['hinhthucvc']=='Vp-Vp')
                    {
                        $info_vanchuyen['giacuoc'] =  $gia * 9 / 10;
                    }
                    else
                    {
                        $info_vanchuyen['giacuoc'] =  $gia;
                    }
                    break;
                }
                case 'VTK':
                {
                    $vtks = json_decode($cuoc->VTK);
                    $i = 0;
                    foreach ($vtks as $vtk) {
                        $i++;
                        if ($vtk->{'khoiluong'} > $khoiluong) {
                            break;
                        }
                    }
                    $gia = $vtks->{$i - 1}->{$tinh->{'mavung'}}
                        + ($khoiluong - $vtks->{$i - 1}->{'khoiluong'}) * ($vtks->{$i}->{$tinh->{'mavung'}});
                    if($input['hinhthucvc']=='Vp-Vp')
                    {
                        $info_vanchuyen['giacuoc'] =  $gia * 9 / 10;
                    }
                    else
                    {
                        $info_vanchuyen['giacuoc'] =  $gia;
                    }
                    break;
                }
                default:
                {
                    $cpns = json_decode($cuoc->CPN);
                    $i = 0;
                    foreach ($cpns as $cpn) {
                        $i++;
                        if ($cpn->{'khoiluong'} > $khoiluong) {
                            break;
                        }
                    }
                    $gia = $cpns->{$i - 1}->{$tinh->{'mavung'}}
                        + ($khoiluong - $cpns->{$i - 1}->{'khoiluong'}) * ($cpns->{$i}->{$tinh->{'mavung'}});
                    if($input['hinhthucvc']=='Vp-Vp')
                    {
                        $info_vanchuyen['giacuoc'] =  $gia * 9 / 10;
                    }
                    else
                    {
                        $info_vanchuyen['giacuoc'] =  $gia;

                    }
                    break;
                }
            }
            if($input['doitac']=='1') $info_vanchuyen['giacuoc'] = $info_vanchuyen['giacuoc']*9/10;*/
        $ok=true;
        $mdh =$input['madonhang'] ;
        while ($ok)
        {
            $mtl = DB::table('donhangs')
                ->where('madonhang','=',$mdh)
                ->get();
            if(count($mtl)>0)
            {
                $mdh = random_int(100000000,999999999);
            }
            else
            {
                $ok=false;
            }
        }
        $donhang = new DonHangModel();
        $donhang->madonhang= $mdh;
        $donhang->info_vanchuyen= json_encode($info_vanchuyen);
        $donhang->hinhthucvc = $input['hinhthucvc'];
        $info_nguoinhan = array();
        $info_nguoinhan['ten'] = $input['ten_nguoinhan'];
        $info_nguoinhan['sdt'] = $input['phone_nguoinhan'];
        $info_nguoinhan['diachi'] = $input['address'];
        $donhang->info_nguoinhan=json_encode( $info_nguoinhan);
        $donhang->id_nguoigui = $input['id_nguoigui'];

        $info_hanghoa = array();
        $info_hanghoa['ten'] = $input['tenhang'];
        $info_hanghoa['donvi'] = $input['donvi'];
        $info_hanghoa['trongluong'] = $input['trongluong'];
        $donhang->info_hanghoa = json_encode($info_hanghoa);
        $donhang->dichvu = $input['dichvu'];
        $donhang->thuhoibienban = $input['thuhoibienban'];
        $donhang->thuho = $input['thuho'];
        $donhang->ghichu = $input['ghichu'];
        $donhang->time_giao = $input['time_giao'];
        $donhang->status =0;
        $tracking = array();
        $tracking[0] = 1;
        $tracking[1] =array();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = time();
        $date = getdate($time);
        $tracking[1]['date']=$date['mday'].'/'.$date['mon'].'/'.$date['year'];
        $tracking[1]['time']=$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
        $tracking[1]['content']="Tiếp nhận đơn hàng";

        $donhang->chitiet =json_encode($tracking);
        $donhang->id_nv =Auth::id();
        $donhang->id_taixe =0;
        $donhang->date_tpnhan = $date['mday'].'-'.$date['mon'].'-'.$date['year'];
        /*echo ($date['mday'].'-'.$date['mon'].'-'.$date['year']);
        exit;*/
        $donhang->save();
        return redirect()->route('user.donhang.index')->with('success-message', 'Tạo đơn hàng thành công!');
    }
    public function destroy($id)
    {
        $item = DonHangModel::find($id);
        $item->delete();
        return redirect()->route('user.donhang.index')->with('success-message', 'Xóa đơn hàng thành công!');
    }
    public function editChiTiet($id,Request $request)
    {
        $item = DonHangModel::find($id);
        $item->chitiet = $request->chitiet;
        $item->save();
        return redirect()->route('user.donhang.index')->with('success-message', 'Sửa đơn hàng thành công!');
    }
    public function editStatus($id,$tt)
    {
        $item = DonHangModel::find($id);
        $item->status = $tt;
        $item->save();
        return redirect()->route('user.donhang.index')->with('success-message', 'Sửa đơn hàng thành công!');
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


        return redirect()->route('user.donhang.index')->with('success-message', 'Tracking đơn hàng thành công!');
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

        return redirect()->route('user.donhang.index')->with('success-message', 'Xóa Tracking đơn hàng thành công!');
    }
}
