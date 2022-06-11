@extends('layout.main')

@section('title', 'Tambah Data Barang')

@section('content')
<div class="card m-5">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah Barang Keluar</h6>
            <form class="form" action="/insertbarangkeluar" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Peminjam</label>
                    <input type="text" class="form-control" name="nama_peminjam">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                    <select class="form-select" name="barang_id">
                        @foreach($databarang as $data2)
                        <option value="{{$data2->id}}">{{$data2->nama_barang}}</option>
                        @endforeach
                    </select>
                    @error('barang_id')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jumlah Barang Keluar</label>
                    <input type="number" class="form-control" name="jumlah_baran">
                    @error('jumlah_baran')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Masuk</label>
                    <input type="date" class="form-control" name="tanggal_keluar">
                    @error('tanggal_keluar')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Foto Barang</label>
                    <input type="file" class="form-control" name="foto">
                    @error('foto')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Operator</label>
                    <input type="select" class="form-control" name="operator_id">
                    
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
