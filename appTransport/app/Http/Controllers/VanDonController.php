<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DNS1D;
class VanDonController extends Controller
{
    public function InVanDon($madonhang)
    {

        $item = DB::table('donhangs')
            ->where('madonhang','=',$madonhang)
            ->join('khachhangs','donhangs.id_nguoigui','=','khachhangs.id')
            ->get();
        if(count($item)>0)
        {
            $data['donhang'] = $item[0];
        }
        $data['barcode'] = DNS1D::getBarcodeHTML($data['donhang']->madonhang, "EAN13",3,80, 'black') ;
        //$data['barcode'] =DNS1D::getBarcodePNGPath($data['donhang']->madonhang, 'EAN13',3,80,array(0,0,0)) ;
        return view('user.content.donhang.invandon',$data);
    }
}
