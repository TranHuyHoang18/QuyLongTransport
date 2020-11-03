<?php
namespace App\Exports;


use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DonhangExport implements FromView,WithDrawings
{

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('images/front/logo/logo1.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('B3');

        return $drawing;
    }

    public function view(): View
    {
        $donhangs = DB::table('donhangs')
            ->where('id_nv','=',1)
            ->join('khachhangs','donhangs.id_nguoigui','=','khachhangs.id')
            ->orderBy('khachhangs.Ma_khachhang','ASC')
            ->get();

        return view('exports.donhangs', ['donhangs' =>$donhangs ]);
    }
}
