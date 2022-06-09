<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\BarangMasukController;

class BarangMasukController extends Controller
{
    public function masuk(){
        $data = BarangMasuk::paginate(5) ;
        return view('Data Barang Masuk.table', compact('data'));
    }
}
