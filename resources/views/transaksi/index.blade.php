@extends('layouts.main')

@section('title', 'Data Transaksi')

@section('content')
<div class="container">
    <h1>Data Transaksi</h1>

    <!-- Form pencarian -->
    <form action="{{ route('transaksi') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari transaksi..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>

    <a href="{{ route('transaksi.tambah') }}" class="btn btn-primary mb-4">Tambah Transaksi</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Pembayaran</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($transaksis->isEmpty())
                <tr>
                    <td colspan="7" class="text-center">Tidak ada transaksi ditemukan.</td>
                </tr>
            @else
                @foreach($transaksis as $transaksi)
                    <tr>
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->nama_produk }}</td>
                        <td>{{ $transaksi->harga }}</td>
                        <td>{{ $transaksi->jumlah }}</td>
                        <td>{{ $transaksi->total_pembayaran }}</td>
                        <td>{{ $transaksi->tanggal }}</td>
                        <td>
                            <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('transaksi.delete', $transaksi->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
    {{ $transaksis->links('vendor.pagination.custom-pagination') }}
</div>
</div>
@endsection
