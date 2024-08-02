<?php

use App\Http\Controllers\JenisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Aplikasi penjualan barang berbasis web dengan Framework Laravel']);
});

Route::get('home', function(){
    return view('home');
});

//Data Jenis Barang
Route::get('jenis', [JenisController::class, 'index'])->name('jenis.index');

//menghapus data jenis
Route::delete('jenis/{id_jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');