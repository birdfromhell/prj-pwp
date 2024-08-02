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
Route::get('jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::post('jenis', [JenisController::class, 'store'])->name('jenis.store'); 
Route::delete('jenis/{id_jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');
Route::get('jenis/show', [JenisController::class, 'show'])->name('jenis.show');
