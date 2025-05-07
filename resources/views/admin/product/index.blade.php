@extends('layouts.app')

@section('content')
    @php
        $page = 'Produk';
    @endphp
    <main class="main-content">
        <div class="page-header">
            <div class="page-header-content">
                <h1 class="page-title">Kelola Produk</h1>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Produk</li>
                </ul>
            </div>
            <div class="page-header-actions">
                <a href="{{ route('admin.category.index') }}" class="btn btn-outline text-link">
                    <i class="fas fa-tags"></i> Kategori Produk
                </a>
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary text-link">
                    <i class="fas fa-plus"></i> Tambah Produk
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Produk</h3>
            </div>
            <div class="card-body">
                <!-- Enhanced Filter Controls -->
                <div class="table-top-controls">
                    <div class="table-left-controls">
                        <div class="table-dropdown">
                            <select class="dropdown-select" id="perPageSelect" onchange="updatePerPage(this.value)">
                                <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10 per halaman</option>
                                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25 per halaman</option>
                                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50 per halaman</option>
                                <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100 per halaman</option>
                            </select>
                        </div>
                        <div class="table-dropdown">
                            <select class="dropdown-select" id="categoryFilter" onchange="updateCategoryFilter(this.value)">
                                <option value="">Semua Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="table-right-controls">
                        <div class="table-dropdown">
                            <select class="dropdown-select" id="statusFilter" onchange="updateStatusFilter(this.value)">
                                <option value="all">Semua Status</option>
                                <option value="1" {{ request('status') == 1 ? 'selected' : '' }}>Aktif</option>
                                <option value="0" {{ request('status') == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="search-container">
                            <i class="fas fa-search search-icon"></i>
                            <form action="{{ route('admin.product.index', ['search' => request('search')]) }}" method="GET" id="searchForm" class="search-form" onsubmit="return true;">
                                <input type="search" class="search-input" id="searchInput" name="search" placeholder="Cari produk..." value="{{ request('search') }}">
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table" id="productTable">
                        <thead>
                            <tr>
                                <th class="{{ $sort_column == 'thumbnail' ? ($sort_direction == 'asc' ? 'sort-asc' : 'sort-desc') : '' }}"
                                    data-sort="thumbnail">Gambar</th>
                                <th class="{{ $sort_column == 'code' ? ($sort_direction == 'asc' ? 'sort-asc' : 'sort-desc') : '' }}"
                                    data-sort="code">SKU</th>
                                <th class="{{ $sort_column == 'name' ? ($sort_direction == 'asc' ? 'sort-asc' : 'sort-desc') : '' }}"
                                    data-sort="name">Nama Produk</th>
                                <th class="{{ $sort_column == 'category_id' ? ($sort_direction == 'asc' ? 'sort-asc' : 'sort-desc') : '' }}"
                                    data-sort="category_id">Kategori</th>
                                <th class="{{ $sort_column == 'price' ? ($sort_direction == 'asc' ? 'sort-asc' : 'sort-desc') : '' }}"
                                    data-sort="price">Harga</th>
                                <th class="{{ $sort_column == 'stock' ? ($sort_direction == 'asc' ? 'sort-asc' : 'sort-desc') : '' }}"
                                    data-sort="stock">Stok</th>
                                <th class="{{ $sort_column == 'status' ? ($sort_direction == 'asc' ? 'sort-asc' : 'sort-desc') : '' }}"
                                    data-sort="status">Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>
                                        <div class="product-image">
                                            <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="Produk 1">
                                        </div>
                                    </td>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        @if ($product->status == 1)
                                            <span class="order-status completed">Aktif</span>
                                        @else
                                            <span class="order-status pending">Tidak Aktif</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="{{ route('admin.product.show', $product->id) }}" class="btn-icon btn-icon-info link" title="Detail">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.product.edit', $product->id) }}" class="btn-icon btn-icon-warning link" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn-icon btn-icon-danger" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Tidak ada produk</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="table-footer">
                    <div class="showing-entries">
                        Menampilkan {{ $products->firstItem() }}-{{ $products->lastItem() }} dari {{ $products->total() }}
                        produk
                    </div>
                    {{ $products->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection

