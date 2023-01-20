<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Supplier;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BarangExport;

class ExportController extends Controller
{
    public function export(){
        return Excel::download(new BarangExport,'barang.xlsx');
    }
}
