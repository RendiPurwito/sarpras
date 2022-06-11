<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlahbarang = Barang::count();
        $jumlahbarangmasuk = BarangMasuk::count();
        $jumlahbarangkeluar = BarangKeluar::count();
        $operator = User::count();
        return view('dashboard', compact('jumlahbarang', 'jumlahbarangmasuk', 'jumlahbarangkeluar', 'operator'));
    }
}
