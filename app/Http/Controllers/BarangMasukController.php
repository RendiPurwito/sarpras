<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $data = BarangMasuk::select('barang_masuks.*', 'barangs.*', 'barang_masuks.id as id_barang')
		->leftJoin('barangs', 'barangs.id', 'barang_masuks.barang_id')
        ->paginate(5);
        return view('Data Barang Masuk.table', ['data' => $data]);
    }

    public function create(){
        $databarang = Barang::all();
        return view('Data Barang Masuk.add',[
            'databarang' => $databarang
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'barang_id' => 'required',
            'stok_masuk' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg',
            'tanggal_masuk' => 'required',
        ]);
    
        BarangMasuk::create($request->all());
        return redirect()->route('barang');
    }

    public function edit($id){
        $data = BarangMasuk::find($id);
        $databarang = Barang::all();
        return view('Data Barang Masuk.formedit', compact('data'));
    }

    public function update(Request $request, $id){
        $data = BarangMasuk::find($id);
        $data->update($request->all());
        return redirect()->route('barangmasuk');
    }

    public function destroy($id){
        $data = BarangMasuk::find($id);
        $data->delete();
        return redirect()->route('barangmasuk');
    }
}
