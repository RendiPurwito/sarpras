<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\ChangePasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Login, Change Password, Logout
Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');

Route::get('change-password', [ChangePasswordController::class, 'index']);

Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Home
Route::get('/home', function () {
    return view('dashboard');
})->name('home');

// Barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/tambahbarang',[BarangController::class, 'create'])->name('tambahbarang');
Route::post('/insertbarang',[BarangController::class, 'store'])->name('insertbarang');
Route::get('/editbarang/{id}',[BarangController::class, 'edit'])->name('editbarang');
Route::put('/updatebarang/{id}',[BarangController::class, 'update'])->name('updatebarang');
Route::get('/deletebarang/{id}',[BarangController::class, 'destroy'])->name('deletebarang');

// Barang Masuk
Route::get('/barangmasuk', [BarangMasukController::class, 'index'])->name('barangmasuk');
Route::get('/tambahbarangmasuk',[BarangMasukController::class, 'create'])->name('tambahbarangmasuk');
Route::post('/insertbarangmasuk',[BarangMasukController::class, 'store'])->name('insertbarangmasuk');
Route::get('/editbarangmasuk/{id}',[BarangMasukController::class, 'edit'])->name('editbarangmasuk');
Route::put('/updatebarangmasuk/{id}',[BarangMasukController::class, 'update'])->name('updatebarangmasuk');
Route::get('/deletebarangmasuk/{id}',[BarangMasukController::class, 'destroy'])->name('deletebarangmasuk');

// Barang Keluar
Route::get('/barangkeluar', [BarangKeluarController::class, 'keluar'])->name('barangkeluar');
Route::get('/tambahbarangkeluar',[BarangMasukController::class, 'create'])->name('tambahbarangkeluar');
Route::post('/insertbarangkeluar',[BarangMasukController::class, 'store'])->name('insertbarangkeluar');
Route::get('/editbarangkeluar/{id}',[BarangMasukController::class, 'edit'])->name('editbarangkeluar');
Route::put('/updatebarangkeluar/{id}',[BarangMasukController::class, 'update'])->name('updatebarangkeluar');
Route::get('/deletebarangkeluar/{id}',[BarangMasukController::class, 'destroy'])->name('deletebarangkeluar');
