@extends('layout.main')
@section('title', 'Dashboard')
@section('content')
    <div class="container pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-table fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Operator</p>
                        <h6 class="mb-0">{{$operator}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-table fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Barang</p>
                        <h6 class="mb-0">{{$jumlahbarang}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-table fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Barang Masuk</p>
                        <h6 class="mb-0">{{$jumlahbarangmasuk}}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-table fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Barang Keluar</p>
                        <h6 class="mb-0">{{$jumlahbarangkeluar}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection