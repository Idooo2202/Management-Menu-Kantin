@extends('layout.main')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h5 class="mb-0">Detail Produk</h5>
    </div>
    <div class="card-body">
        <table class="table table-borderless mb-0">
            <tr>
                <th style="width: 220px;">ID Menu</th>
                <td>: {{ $menuKantin->id }}</td>
            </tr>
            <tr>
                <th>Kode Menu</th>
                <td>: {{ $menuKantin->kode_menu }}</td>
            </tr>
            <tr>
                <th>Nama Menu</th>
                <td>: {{ $menuKantin->nama_menu }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>: {{ $menuKantin->kategori }}</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>: Rp {{ number_format($menuKantin->harga, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <th>Stok</th>
                <td>: {{ $menuKantin->stok }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>: {{ $menuKantin->status }}</td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td>: {{ $menuKantin->keterangan ?? '-' }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>: {{ $menuKantin->created_at }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>: {{ $menuKantin->updated_at }}</td>
            </tr>
        </table>

        <div class="mt-4">
            <a href="{{ route('menukantin.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('menukantin.edit', ['menuKantin' => $menuKantin->id]) }}" class="btn btn-warning">Edit Produk</a>
        </div>
    </div>
</div>
@endsection