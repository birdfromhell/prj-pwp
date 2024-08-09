<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Aplikasi penjualan barang berbasis web dengan Framework Laravel']);
});

Route::get('home', function(){
    return view('home');
});

//Data Jenis Barang
//Data Jenis Barang
Route::get('jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::get('jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::post('jenis', [JenisController::class, 'store'])->name('jenis.store'); 
Route::delete('jenis/{id_jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');
Route::get('jenis/show', [JenisController::class, 'show'])->name('jenis.show');
Route::get('jenis/{id_jenis}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
Route::put('jenis/{id_jenis}', [JenisController::class, 'update'])->name('jenis.update');

//Data Suplier  
Route::get('suplier', [SuplierController::class, 'index'])->name('suplier.index');
Route::get('suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
Route::post('suplier', [SuplierController::class, 'store'])->name('suplier.store'); 
Route::delete('suplier/{id_suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');
Route::get('suplier/show', [SuplierController::class, 'show'])->name('suplier.show');

//Data Barang 
Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('barang', [BarangController::class, 'store'])->name('barang.store'); 
Route::delete('barang/{id_barang}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('barang/show', [BarangController::class, 'show'])->name('barang.show');
