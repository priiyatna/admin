<?php

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/admin', [PageController::class, 'admin'])->name('admin');
Route::get('/transaksi', [PageController::class, 'transaksi'])->name('transaksi');

Route::prefix('transaksi')->name('transaksi.')->group(function () {
    Route::get('/tambah', [PageController::class, 'tambah'])->name('tambah');
    Route::post('/submit', [PageController::class, 'submit'])->name('submit');
    Route::get('/edit/{id}', [PageController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [PageController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PageController::class, 'delete'])->name('delete');
});

Route::get('/laporan/penjualan', [PageController::class, 'laporanPenjualan'])->name('laporan_penjualan');
Route::get('/laporan/stokbarang', [PageController::class, 'laporanStokBarang'])->name('laporan_stokbarang');






