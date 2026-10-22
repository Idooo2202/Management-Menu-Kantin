@extends('layout.main')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Daftar Menu</h4>
        <a href="{{ route('menukantin.create') }}" class="btn btn-success">
            + Tambah Menu
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive" style="overflow-x: auto;">
                <table class="table table-striped table-hover table-bordered align-middle mb-0" style="min-width: 1000px;">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Kode Menu</th>
                            <th>Nama Menu</th>
                            <th>Kategori</th>
                            <th>Harga Menu</th>
                            <th>Stok Menu</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($menukantin as $menu)
                        <tr>
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->kode_menu }}</td>
                            <td>{{ $menu->nama_menu }}</td>
                            <td>{{ $menu->kategori }}</td>
                            <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                            <td>{{ $menu->stok }}</td>
                            <td class="text-center" style="white-space: nowrap;">
                                <a href="{{ route('menukantin.edit', ['menuKantin' => $menu->id]) }}" class="btn btn-sm btn-warning">Edit Menu</a>

                                <form action="{{ route('menukantin.destroy', ['menuKantin' => $menu->id]) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus Menu</button>
                                </form>

                                <a href="{{ route('menukantin.show', ['menuKantin' => $menu->id]) }}" class="btn btn-sm btn-primary">
                                    Detail Menu
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">
                                Data produk belum tersedia.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        
            @if($menukantin->hasPages())
                <div class="p-3">
                    {{ $menukantin->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection