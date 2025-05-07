@extends('layouts.customer')

@section('content')
    <main class="main-content">
        <!-- Product Header -->
        <section class="container">
            <section class="product-header">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="#">Beranda</a>
                        <span class="separator">/</span>
                        <a href="#">Produk</a>
                        <span class="separator">/</span>
                        <span>Semua Kue</span>
                    </div>
                    <h2>Koleksi Kue Kami</h2>
                    <p>Temukan berbagai macam kue lezat untuk setiap kesempatan</p>
                </div>
            </section>

            <!-- Filter Section -->
            <div class="filter-section">
                <div class="filter-header">
                    <h3 class="filter-title">Filter Produk</h3>
                    <button class="btn btn-primary"><i class="fas fa-filter"></i> Terapkan Filter</button>
                </div>
                <div class="filter-options">
                    <div class="filter-group">
                        <h4>Kategori</h4>
                        <label class="filter-checkbox">
                            <input type="checkbox" checked> Kue Ulang Tahun
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Kue Pernikahan
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Kue Tart
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Kue Kering
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Dessert
                        </label>
                    </div>
                    <div class="filter-group">
                        <h4>Harga</h4>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Rp 0 - Rp 100.000
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Rp 100.000 - Rp 250.000
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Rp 250.000 - Rp 500.000
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Rp 500.000+
                        </label>
                    </div>
                    <div class="filter-group">
                        <h4>Rasa</h4>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Coklat
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Vanilla
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Strawberry
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Red Velvet
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Keju
                        </label>
                    </div>
                    <div class="filter-group">
                        <h4>Ukuran</h4>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Small (20cm)
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Medium (25cm)
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Large (30cm)
                        </label>
                        <label class="filter-checkbox">
                            <input type="checkbox"> Extra Large (35cm+)
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Grid (same as homepage but with more products) -->
        <section class="products container">
            <div class="product-grid">
                <!-- Repeat product cards from homepage and add more -->
                <!-- Product 5 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1542826438-bd32f43d626f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1296&q=80"
                            alt="Cupcake">
                    </div>
                    <div class="product-info">
                        <p class="product-category">Dessert</p>
                        <h3 class="product-title">Assorted Cupcakes</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 35.000</span>
                            <span class="original-price">Rp 40.000</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn-add-to-cart"><i class="fas fa-cart-plus"></i> Keranjang</button>
                            <button class="btn-favorite"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card">
                    <div class="product-badge">Diskon 20%</div>
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1611293388250-580b08c4a145?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1336&q=80"
                            alt="Macarons">
                    </div>
                    <div class="product-info">
                        <p class="product-category">Kue Kering</p>
                        <h3 class="product-title">French Macarons</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 120.000</span>
                            <span class="original-price">Rp 150.000</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn-add-to-cart"><i class="fas fa-cart-plus"></i> Keranjang</button>
                            <button class="btn-favorite"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1571115177098-24ec42ed204d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80"
                            alt="Chocolate Cake">
                    </div>
                    <div class="product-info">
                        <p class="product-category">Kue Tart</p>
                        <h3 class="product-title">Chocolate Ganache Cake</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 280.000</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn-add-to-cart"><i class="fas fa-cart-plus"></i> Keranjang</button>
                            <button class="btn-favorite"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card">
                    <div class="product-badge">Terbaru</div>
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1568254183919-78a4f43a2877?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80"
                            alt="Fruit Tart">
                    </div>
                    <div class="product-info">
                        <p class="product-category">Dessert</p>
                        <h3 class="product-title">Mixed Fruit Tart</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 95.000</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn-add-to-cart"><i class="fas fa-cart-plus"></i> Keranjang</button>
                            <button class="btn-favorite"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link"><i class="fas fa-chevron-left"></i></a></li>
                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </section>
    </main>
@endsection
