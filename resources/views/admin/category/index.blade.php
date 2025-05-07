@extends('layouts.app')

@section('content')
    @php
        $page = 'Produk';
    @endphp
    <main class="main-content">
        <div class="page-header">
            <div class="page-header-content">
                <h1 class="page-title">Kelola Kategori</h1>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item">Produk</li>
                    <li class="breadcrumb-item active">Kategori</li>
                </ul>
            </div>
            <div class="page-header-actions">
                <a href="{{ route('admin.product.index') }}" class="btn btn-outline text-link">
                    <i class="fas fa-tags"></i> Produk
                </a>
                <a href="{{ route('admin.category.create') }}" class="btn btn-primary text-link">
                    <i class="fas fa-plus"></i> Tambah Kategori
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Kategori</h3>
                <div class="card-search card-tools">
                    <div class="search-box">
                        <form action="{{ route('admin.category.index', ['search' => request('search')]) }}" method="GET">
                            <i class="fas fa-search"></i>
                            <input type="search" placeholder="Cari kategori..." value="{{ request('search') }}"
                                name="search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                                <tr>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        @if ($category->is_active == 1)
                                            <span class="order-status completed">Aktif</span>
                                        @else
                                            <span class="order-status pending">Tidak Aktif</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($category->created_at)->format('d M Y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.category.edit', $category->id) }}"
                                                class="btn btn-sm btn-icon btn-outline-warning" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            {{-- Buat button modal delete --}}
                                            <button class="btn btn-sm btn-icon btn-outline-danger" title="Hapus"
                                                data-toggle="modal" data-target="#deleteModal-{{ $category->id }}">
                                                <i class="fas fa-trash"></i>
                                            </button>

                                            {{-- Buat modal konfirmasi delete --}}
                                            <div class="modal fade" id="deleteModal-{{ $category->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah Anda yakin ingin menghapus kategori
                                                                <strong>{{ $category->name }}</strong>?</p>
                                                            <p>Data yang dihapus tidak bisa dipulihkan.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <form
                                                                action="{{ route('admin.category.destroy', $category->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Tidak ada kategori</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div class="text-muted">Menampilkan 1-5 dari 15 produk</div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
@endsection
