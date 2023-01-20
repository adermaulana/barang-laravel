<?php

namespace App\Exports;

use App\Models\Barang;
use App\Models\Supplier;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BarangExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {   
        return Barang::with('supplier')->get();
    }

    public function map($barang) : array {
        return [
            $barang->nama,
            $barang->supplier->nama,
            $barang->stok,
            $barang->jenis
        ] ;
 
 
    }

    public function headings():array
    {
        return [
            'Nama',
            'Supplier',
            'Stok',
            'Jenis'
        ];
    }
}
