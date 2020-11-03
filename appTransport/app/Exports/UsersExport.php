<?php

namespace App\Exports;

use App\Models\DonHangModel;
use App\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class UsersExport implements FromCollection,WithHeadings,WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    /*public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('This is my logo');
        $drawing->setPath(public_path('images/front/logo/logo1.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('B3');

        return $drawing;
    }*/
    public function collection()
    {

         $donhangs = DB::table('donhangs')
            ->where('id_nv','=',1)
             ->join('khachhangs','donhangs.id_nguoigui','=','khachhangs.id')
             ->orderBy('khachhangs.Ma_khachhang','ASC')
            ->get();


         return $donhangs;

    }
    /**
     * Returns headers for report
     * @return array
     */
    public function headings(): array {
        return [
            'STT',
            'Mã Khách hàng',
            'Mã đơn hàng',
            'Ngày tiếp nhận',
            "Dịch vụ",
            "Tên Hàng",
            'Gửi Từ',
            'Gửi đến',
            'Trọng lượng',
            "Đơn  vị",
            "Giá cước",

        ];

    }
    public $i=0;
    public function map($donhang): array {
        $this->i++;

        $chitiet = json_decode($donhang->chitiet);
        $info_hanghoa = json_decode($donhang->info_hanghoa);
        $info_vanchuyen= json_decode($donhang->info_vanchuyen);
        return [
            $this->i,
            $donhang->Ma_khachhang,
            $donhang->madonhang,
            $chitiet[1]->{'date'},
            $donhang->dichvu,
            $info_hanghoa->{'ten'},
            $info_vanchuyen->{'noidi'},
            $info_vanchuyen->{'noiden'},
            $info_hanghoa->{'trongluong'},
            $info_hanghoa->{'donvi'},
            $info_vanchuyen->{'giacuoc'},
        ];
    }
}
