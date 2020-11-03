<?php

namespace App\Http\Controllers\KeToan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeToanController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth:ketoan');
    }
    public function index()
    {
        $khachhangs = DB::table('khachhangs')
            ->where('loaikhach','=',0)
            ->get();
        $data['khachhangs']=$khachhangs;
        $topdoitacvc = array();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = time();
        $date = getdate($time);
        $tong = array();
        $donhangs=array();
        $charts=  array();
        for($i=1;$i<=$date['mon'];$i++)
        {
            $tong[$i]=0;
            $topdoitacvc[$i]=array();
            $charts[$i] ="[['Task', 'Hours per Day'],";
            $donhangs[$i] = DB::table('donhangs')
                ->whereMonth('created_at','=',$i)
                ->get();
            foreach($khachhangs as $khachhang)
            {
                $topdoitacvc[$i][$khachhang->id] = 0;
            };
            foreach ($donhangs[$i] as $tmp) {
                $tkl = json_decode($tmp->info_vanchuyen);
                $topdoitacvc[$i][$tmp->id_nguoigui] += $tkl->{'giacuoc'};
                $tong[$i] += $tkl->{'giacuoc'};
            }
            $j=0;
            foreach ($khachhangs as $khachhang)
            {
                if ($topdoitacvc[$i][$khachhang->id] >0)
                {
                    $charts[$i] =$charts[$i]."['". $khachhang->Ma_khachhang ."',".$topdoitacvc[$i][$khachhang->id] .'],';
                }
            }
            $data['doitacpts'] = $topdoitacvc;
            $charts[$i] = $charts[$i].']';

        }
        $data['charts'] = $charts;
        $data['doitacpts'] = $topdoitacvc;
        $data['tong'] = $tong;
        $thongkevc = array();

        for($i=1;$i<=$date['mon'];$i++)
        {
            $thongkevc[$i] = array();
            $thongkevc[$i]['tongsodonhang'] =count(DB::table('donhangs')
                ->whereMonth('created_at','=',$i)
                ->get());
            $thongkevc[$i]['tongcuocvc']= $tong[$i];
            $thongkevc[$i]['dathanhtoan'] = $tong[$i] *40/100;
        }
        $data['thongkevc'] = $thongkevc;
        $data['donhangs']=DB::table('donhangs')
            ->orderBy('created_at','ASC')
            ->orderBy('id_nv','ASC')
            ->paginate(5);
        $thongke= array();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time = time();
        $date = getdate($time);

        $ds_tinhs = DB::table('address')->get();
        $charts=  array();
        for($month=1;$month<=$date['mon'];$month++)
        {
            //echo $month."<br>";
            $charts[$month] ="[['Task', 'Hours per Day'],";
            $donhangs_month = DB::table('donhangs')->whereMonth('created_at','=',$month)->get();
            $dem_tinh_di = array();
            $name_tinh_di = array();
            $dem_tinh_den = array();
            $name_tinh_den = array();
            for($i=1;$i<=63;$i++)
            {
                $dem_tinh_di[$i]=0;
                $dem_tinh_den[$i]=0;
            }
            //echo $month."<br>";
            foreach ($ds_tinhs as $city)
            {
                $name_tinh_di[$city->id]= $city->tinh;
                $name_tinh_den[$city->id]= $city->tinh;
            }
            foreach ($donhangs_month as $dh)
            {
                $info_vc = json_decode($dh->info_vanchuyen);
                $noi_di =  $info_vc->{'noidi'};
                $noi_den = $info_vc->{'noiden'};
                $tmp = strpos($noi_di,'-');
                $length = strlen($noi_di);
                $tp_di = substr($noi_di,0,$tmp-1);
                $tinh_di = substr($noi_di,$tmp+2,$length-$tmp);
                $tmp = strpos($noi_den,'-');
                $length = strlen($noi_den);
                $tp_den = substr($noi_den,0,$tmp-1);
                $tinh_den = substr($noi_den,$tmp+2,$length-$tmp);
                $id_tinh_di = 0;
                $id_tinh_den = 0;
                foreach ($ds_tinhs as $city) {
                    if ($city->tinh == $tinh_di) $id_tinh_di = $city->id;
                    if ($city->tinh == $tinh_den) $id_tinh_den = $city->id;
                }
               /* echo $noi_di."<br>";
                echo $id_tinh_di ."<br>";
                echo $noi_den."<br>";
                echo $id_tinh_den ."<br>";*/
                /*echo"<pre>";
                print_r($info_vc);
                echo"</pre>";*/
                if($id_tinh_di>0) $dem_tinh_di[$id_tinh_di]++;
                if($id_tinh_den>0) $dem_tinh_den[$id_tinh_den]++;
            }
            // sort
            for($i=1;$i<=63;$i++)
                for($j=$i+1;$j<=63;$j++)
                {
                    if($dem_tinh_di[$i] < $dem_tinh_di[$j])
                    {
                        $tkp = $dem_tinh_di[$i];
                        $dem_tinh_di[$i] = $dem_tinh_di[$j];
                        $dem_tinh_di[$j] = $tkp;
                        $tkp = $name_tinh_di[$i];
                        $name_tinh_di[$i] = $name_tinh_di[$j];
                        $name_tinh_di[$j] = $tkp;
                    }
                    if($dem_tinh_den[$i] < $dem_tinh_den[$j])
                    {
                        $tkp = $dem_tinh_den[$i];
                        $dem_tinh_den[$i] = $dem_tinh_den[$j];
                        $dem_tinh_den[$j] = $tkp;
                        $tkp = $name_tinh_den[$i];
                        $name_tinh_den[$i] = $name_tinh_den[$j];
                        $name_tinh_den[$j] = $tkp;
                    }
                }

            $n_donhang = count($donhangs_month);
            $chitiet = array();
            $chitiet[0]=0;
            for ($i=1;$i<=63;$i++)
            {
                if ($dem_tinh_di[$i]>0)
                {
                    $chitiet[0]++;
                    if($chitiet[0]==5)
                    {
                        $ans = array();
                        $ans['name_tinh_di'] = 'khác';
                        $ans['dem_tinh_di'] = $dem_tinh_di[$i];
                        $ans['name_tinh_den'] = 'khác';
                        $ans['dem_tinh_den'] = $dem_tinh_den[$i];
                        for ($j=$i+1;$j<=63;$j++)
                        {
                            $ans['dem_tinh_di'] += $dem_tinh_di[$j];
                            $ans['dem_tinh_den'] += $dem_tinh_den[$j];
                        }
                        $ans['tongdon'] = count($donhangs_month);
                        $chitiet[$chitiet[0]]= json_encode($ans);
                        $charts[$month] =$charts[$month]."['".  $ans['name_tinh_di']  ."',".  $ans['dem_tinh_di'] .'],';
                        break;
                    }
                    $ans = array();
                    $ans['name_tinh_di'] = $name_tinh_di[$i];
                    $ans['dem_tinh_di'] = $dem_tinh_di[$i];
                    $ans['name_tinh_den'] = $name_tinh_den[$i];
                    $ans['dem_tinh_den'] = $dem_tinh_den[$i];
                    $ans['tongdon'] = count($donhangs_month);
                    $chitiet[$chitiet[0]]= json_encode($ans);
                    $charts[$month] =$charts[$month]."['".  $ans['name_tinh_di']  ."',".  $ans['dem_tinh_di'] .'],';
                }
            }
            $charts[$month] = $charts[$month].']';
            $thongke[$month] = json_encode($chitiet);
        }
        $data['charts'] = $charts;
        $data['thongke'] = $thongke;


        $ngay= [0,31,28,31,30,31,30,31,31,30,31,30,31];
        $thongken_dh= array();

        return view('ketoan.homepage.index',$data);
    }
}
