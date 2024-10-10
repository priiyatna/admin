<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home'); // Halaman dashboard
    }

    public function produk()
    {
        return view('produk'); // Halaman produk
    }

    public function transaksi(Request $request)
{
    $query = Transaksi::query();

    // Cek apakah ada input pencarian
    if ($request->has('search') && !empty($request->search)) {
        $search = $request->search;
        // Pencarian berdasarkan nama produk
        $query->where('nama_produk', 'LIKE', "%$search%");
    }

    // Paginasi dengan 10 transaksi per halaman
    $transaksis = $query->paginate(10);

    return view('transaksi.index', compact('transaksis'));
}


    public function tambah()
    {
        return view('transaksi.tambah'); // Halaman tambah transaksi
    }

    public function submit(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|integer',
            'tanggal' => 'required|date'
        ]);

        // Hitung total pembayaran
        $total_pembayaran = $request->harga * $request->jumlah;

        Transaksi::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total_pembayaran' => $total_pembayaran,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('transaksi')->with('success', 'Transaksi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi')); // Halaman edit transaksi
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'jumlah' => 'required|integer',
            'tanggal' => 'required|date'
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'total_pembayaran' => $request->harga * $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('transaksi')->with('success', 'Transaksi berhasil diupdate!');
    }

    public function delete($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi')->with('success', 'Transaksi berhasil dihapus!');
    }

    public function laporanPenjualan()
    {
        return view('laporan_penjualan'); // Halaman laporan penjualan
    }

    public function laporanStokBarang()
    {
        return view('laporan_stokbarang'); // Halaman laporan stok barang
    }
}



