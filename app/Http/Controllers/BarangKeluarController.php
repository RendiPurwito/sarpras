<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function keluar()
    {
        $data = BarangKeluar::select('barang_keluars.*', 'barangs.*', 'barang_keluars.id as id_barang')
		->leftJoin('barangs', 'barangs.id', 'barang_keluars.barang_id')
        ->paginate(5);
        return view('Data Barang Keluar.table', ['data' => $data]);
    }

    public function create(){
        $databarang = Barang::all();
        return view('Data Barang Keluar.add',[
            'databarang' => $databarang
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'nama_peminjam' => 'required',
            'barang_id' => 'required',
            'jumlah_barang' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'tanggal_keluar' => 'required',
            'operator' => 'required',
        ]);
    
        BarangKeluar::create($request->all());
        return redirect()->route('barangkeluar');
    }
}
