<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
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

Route::get('/barang', [BarangController::class, 'index'])->name('barang');


// barang masuk
Route::get('/barangmasuk', [BarangMasukController::class, 'masuk'])->name('barangmasuk');