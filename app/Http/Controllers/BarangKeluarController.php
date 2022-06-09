<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function keluar()
    {
        $data = BarangKeluar::paginate(5);
        return view('Data Barang Keluar.table', compact('data'));
    }
}
