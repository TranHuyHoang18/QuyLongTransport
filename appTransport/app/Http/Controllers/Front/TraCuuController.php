<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\models\AddressModel;
use App\Models\SeoPageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TraCuuController extends Controller
{
    public $data= array();
    public function index()
    {
        $this->data['seo'] = SeoPageModel::find(2);
        $this->data['tinhs'] = DB::table('address')
            ->orderBy('id','ASC')
            ->get();
        $this->data['diemguihangs']=DB::table('diemguihangs')
            ->get();
        return view('frontend.content.tracuu.index',$this->data);
    }
    public function giacuoc()
    {
        $this->data['seo'] = SeoPageModel::find(4);
        $this->data['tinhs'] = DB::table('address')
            ->orderBy('id','ASC')
            ->get();
        $this->data['diemguihangs']=DB::table('diemguihangs')
            ->get();
        return view('frontend.content.tracuu.index',$this->data);
    }
    public function vandon()
    {
        $this->data['seo'] = SeoPageModel::find(3);
        $this->data['donhang']=null;
        $this->data['content']="";
        return view('frontend.content.tracuu.vandon',$this->data);
    }
    public function diemguihang()
    {
        $this->data['seo'] = SeoPageModel::find(5);
        $this->data['address'] = DB::table('address')->get();
        $this->data['buucucs'] = DB::table('buucucs')->get();
        return view('frontend.content.tracuu.diemguihang',$this->data);
    }
    public function converttext($id_tinh,$id_huyen)
    {
        $tinh = AddressModel::find($id_tinh);
        $huyens = json_decode($tinh->huyen);
        $huyen = $huyens[$id_huyen];

        $text = $huyen . ' - ' .$tinh->tinh;
        return $text;
    }
    public function tracuu(Request $request)
    {
        $this->data['seo'] = SeoPageModel::find(2);
        $request->validate([
            'tinh_gui' => 'required',
            'huyen_gui' => 'required',
            'tinh_nhan' => 'required',
            'huyen_nhan' => 'required',
            'kg' => 'required',
        ]);
        $input = $request->all();
        if ($input['tinh_gui']== 0) return redirect()->route('home')->with('tinhgui', 'Vui lòng chọn tỉnh gửi');
        if ($input['huyen_gui'][$input['tinh_gui']]== 0)  $input['huyen_gui'][$input['tinh_gui']] =1;
        if ($input['tinh_nhan']== 0) return redirect()->route('home')->with('tinhnhan', 'Vui lòng chọn tỉnh gửi đến');
        if ($input['huyen_nhan']== 0) return redirect()->route('home')->with('huyennhan', 'Vui lòng chọn huyện gửi đến');

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

        $khoiluong = $input['kg'];
        $this->data['content'] = array();
        $this->data['content']['gui']=$this->converttext($id_tinhgui,$id_huyengui);
        $this->data['content']['nhan']=$this->converttext($id_tinhnhan,$id_huyennhan);
        $this->data['content']['khoiluong']=$khoiluong;
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
        // tính tiền
            // chuyeern phat nhanh CPN
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
            $ketqua[1] = array();
            $ketqua[1]['loaidichvu'] = "CPN";
            $ketqua[1]['timevc'] = $tinh->{'CPN'};
            $ketqua[1]['hinhthucvc'] = "Vp-Vp";
            $ketqua[1]['gia'] = $gia * 9 / 10;
            $ketqua[2] = array();
            $ketqua[2]['loaidichvu'] = "CPN";
            $ketqua[2]['timevc'] = $tinh->{'CPN'};;
            $ketqua[2]['hinhthucvc'] = "Door to Door";
            $ketqua[2]['gia'] = $gia;
            // Van chuyen nhanh VCN
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

            $ketqua[3] = array();
            $ketqua[3]['loaidichvu'] = "VCN";
            $ketqua[3]['timevc'] = $tinh->{'VCN'};
            $ketqua[3]['hinhthucvc'] = "Vp-Vp";
            $ketqua[3]['gia'] = $gia * 9 / 10;
            $ketqua[4] = array();
            $ketqua[4]['loaidichvu'] = "CPN";
            $ketqua[4]['timevc'] = $tinh->{'VCN'};;
            $ketqua[4]['hinhthucvc'] = "Door to Door";
            $ketqua[4]['gia'] = $gia;
            // Van chuyen Tiet Kiem VTK
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
            $ketqua[5] = array();
            $ketqua[5]['loaidichvu'] = "VTK";
            $ketqua[5]['timevc'] = $tinh->{'VTK'};
            $ketqua[5]['hinhthucvc'] = "Vp-Vp";
            $ketqua[5]['gia'] = $gia * 9 / 10;
            $ketqua[6] = array();
            $ketqua[6]['loaidichvu'] = "VTK";
            $ketqua[6]['timevc'] = $tinh->{'VTK'};;
            $ketqua[6]['hinhthucvc'] = "Door to Door";
            $ketqua[6]['gia'] = $gia;
            /* echo"<pre>";
            print_r($ketqua);
            echo"</pre>";*/


        // tra ket qua ra ngoai
        $this->data['ketquas'] = $ketqua;
        $this->data['tinhs'] = DB::table('address')
            ->orderBy('id','ASC')
            ->get();
        $this->data['diemguihangs']=DB::table('diemguihangs')
            ->get();

        return view('frontend.content.tracuu.detail',$this->data);
    }
    public function tracuuVD(Request $request)
    {
        $this->data['seo'] = SeoPageModel::find(3);
        $mavandon = $request->mavandon;
        $donhang= DB::table('donhangs')
            ->where('madonhang','=',$mavandon)
            ->get();
        $this->data['content']="Không tồn tại vận đơn";
        $this->data['donhang']=null;
        if (count($donhang)>0)
        {
            $this->data['content']="Chi tiết vận đơn : ".$donhang[0]->madonhang;
            $this->data['donhang']=$donhang[0];
        }
        return view('frontend.content.tracuu.vandon',$this->data);

    }
}
