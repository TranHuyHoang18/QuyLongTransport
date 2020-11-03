<?php

namespace App\Http\Controllers;
use App\Exports\DonhangExport;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
//    public function export()
//    {
//        return Excel::download(new UsersExport, 'users.xlsx');
//    }
    public function export()
    {
        $date=time();
        $tm = new DonhangExport();
        $tm->view();
        return Excel::download(new DonhangExport(), 'invoices.xlsx');
    }

}
