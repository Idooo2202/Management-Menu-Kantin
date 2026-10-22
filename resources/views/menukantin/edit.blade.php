@extends('layout.main')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h5 class="mb-0">Edit Produk</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('menukantin.update', ['menuKantin' => $menuKantin->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="kode_menu" class="form-label">Kode Menu</label>
                <input type="text" class="form-control" name="kode_menu" id="kode_menu" value="{{ old('kode_menu', $menuKantin->kode_menu) }}" placeholder="Masukkan kode menu" required>
            </div>

            <div class="mb-3">
                <label for="nama_menu" class="form-label">Nama Menu</label>
                <input type="text" class="form-control" name="nama_menu" id="nama_menu" value="{{ old('nama_menu', $menuKantin->nama_menu) }}" placeholder="Masukkan nama menu" required>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" value="{{ old('kategori', $menuKantin->kategori) }}" placeholder="Masukkan kategori" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" name="harga" id="harga" min="0" step="100" value="{{ old('harga', $menuKantin->harga) }}" placeholder="Masukkan harga" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" name="stok" id="stok" min="0" value="{{ old('stok', $menuKantin->stok) }}" placeholder="Masukkan stok" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id="status" required>
                    <option value="tersedia" {{ old('status', $menuKantin->status) == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <option value="habis" {{ old('status', $menuKantin->status) == 'habis' ? 'selected' : '' }}>Habis</option>
                    <option value="tak tersedia" {{ old('status', $menuKantin->status) == 'tak tersedia' ? 'selected' : '' }}>Tak Tersedia</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Masukkan keterangan">{{ old('keterangan', $menuKantin->keterangan) }}</textarea>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('menukantin.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection