<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Laporan;
use App\Models\tbl_hasil_diagnosa;

class DataController extends Controller
{
    public function laporan()
    {
        $laporan = Laporan::latest()->get();
        return datatables()->of($laporan)
        ->addIndexColumn()
        ->toJson();
    }
}
