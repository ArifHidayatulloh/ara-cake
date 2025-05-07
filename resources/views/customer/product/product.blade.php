@extends('layouts.customer')

@section('content')
    <!-- Product Header -->
    <section class="product-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="#"><i class="fas fa-home"></i> Beranda</a>
                <span class="separator">/</span>
                <a href="#">Produk</a>
                <span class="separator">/</span>
                <span>Semua Kue</span>
            </div>
            <div class="product-header-content">
                <h2>Temukan Kue Sempurna untuk Setiap Momen</h2>
                <p>Pilih dari koleksi kue premium kami yang dibuat dengan bahan-bahan terbaik dan penuh cinta</p>
            </div>
        </div>
    </section>
    <main class="main-content">

        <!-- Filter Section -->
        <section class="container">
            <div class="filter-section">
                <div class="filter-header">
                    <h3 class="filter-title">Saring Produk</h3>
                    <button class="btn btn-primary"><i class="fas fa-sliders-h"></i> Terapkan Filter</button>
                </div>
                <div class="filter-options">
                    <div class="filter-group">
                        <h4><i class="fas fa-tag"></i> Kategori</h4>
                        <div class="filter-item">
                            <input type="checkbox" id="category1" class="filter-checkbox" checked>
                            <label for="category1" class="filter-label">Kue Ulang Tahun</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="category2" class="filter-checkbox">
                            <label for="category2" class="filter-label">Kue Pernikahan</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="category3" class="filter-checkbox">
                            <label for="category3" class="filter-label">Kue Tart</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="category4" class="filter-checkbox">
                            <label for="category4" class="filter-label">Kue Kering</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="category5" class="filter-checkbox">
                            <label for="category5" class="filter-label">Dessert</label>
                        </div>
                    </div>

                    <div class="filter-group">
                        <h4><i class="fas fa-money-bill-wave"></i> Harga</h4>
                        <div class="filter-item">
                            <input type="checkbox" id="price1" class="filter-checkbox">
                            <label for="price1" class="filter-label">Rp 0 - Rp 100.000</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="price2" class="filter-checkbox" checked>
                            <label for="price2" class="filter-label">Rp 100.000 - Rp 250.000</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="price3" class="filter-checkbox">
                            <label for="price3" class="filter-label">Rp 250.000 - Rp 500.000</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="price4" class="filter-checkbox">
                            <label for="price4" class="filter-label">Rp 500.000+</label>
                        </div>
                    </div>

                    <div class="filter-group">
                        <h4><i class="fas fa-ice-cream"></i> Rasa</h4>
                        <div class="filter-item">
                            <input type="checkbox" id="flavor1" class="filter-checkbox">
                            <label for="flavor1" class="filter-label">Coklat</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="flavor2" class="filter-checkbox" checked>
                            <label for="flavor2" class="filter-label">Vanilla</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="flavor3" class="filter-checkbox">
                            <label for="flavor3" class="filter-label">Strawberry</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="flavor4" class="filter-checkbox" checked>
                            <label for="flavor4" class="filter-label">Red Velvet</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="flavor5" class="filter-checkbox">
                            <label for="flavor5" class="filter-label">Keju</label>
                        </div>
                    </div>

                    <div class="filter-group">
                        <h4><i class="fas fa-ruler-combined"></i> Ukuran</h4>
                        <div class="filter-item">
                            <input type="checkbox" id="size1" class="filter-checkbox">
                            <label for="size1" class="filter-label">Small (20cm)</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="size2" class="filter-checkbox" checked>
                            <label for="size2" class="filter-label">Medium (25cm)</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="size3" class="filter-checkbox">
                            <label for="size3" class="filter-label">Large (30cm)</label>
                        </div>
                        <div class="filter-item">
                            <input type="checkbox" id="size4" class="filter-checkbox">
                            <label for="size4" class="filter-label">Extra Large (35cm+)</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Grid -->
        <section class="container">
            <div class="products">
                <div class="product-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-badge">Terlaris</div>
                        <div class="product-img-container">
                            <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1089&q=80"
                                alt="Red Velvet Cake" class="product-img">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Kue Ulang Tahun</span>
                            <h3 class="product-title">Red Velvet Cake dengan Cream Cheese Frosting</h3>
                            <div class="product-price">
                                <span class="current-price">Rp 250.000</span>
                                <span class="original-price">Rp 300.000</span>
                                <span class="discount-badge">Diskon 17%</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-add-to-cart"><i class="fas fa-cart-plus"></i> Keranjang</button>
                                <button class="btn-favorite"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-badge">Baru</div>
                        <div class="product-img-container">
                            <img src="https://images.unsplash.com/photo-1558326567-98ae2405596b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1026&q=80"
                                alt="Chocolate Lava Cake" class="product-img">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Kue Tart</span>
                            <h3 class="product-title">Chocolate Lava Cake Premium</h3>
                            <div class="product-price">
                                <span class="current-price">Rp 180.000</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-add-to-cart"><i class="fas fa-cart-plus"></i> Keranjang</button>
                                <button class="btn-favorite"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="https://images.unsplash.com/photo-1562440499-64c9a111f713?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                                alt="Strawberry Cheesecake" class="product-img">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Dessert</span>
                            <h3 class="product-title">Strawberry Cheesecake Premium</h3>
                            <div class="product-price">
                                <span class="current-price">Rp 220.000</span>
                                <span class="original-price">Rp 250.000</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-add-to-cart"><i class="fas fa-cart-plus"></i> Keranjang</button>
                                <button class="btn-favorite"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1026&q=80"
                                alt="Wedding Cake" class="product-img">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Kue Pernikahan</span>
                            <h3 class="product-title">Elegant Wedding Cake 3 Tier</h3>
                            <div class="product-price">
                                <span class="current-price">Rp 1.500.000</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-add-to-cart"><i class="fas fa-cart-plus"></i> Keranjang</button>
                                <button class="btn-favorite"><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card">
                        <div class="product-img-container">
                            <img src="https://images.unsplash.com/photo-1542826438-bd32f43d626f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1296&q=80"
                                alt="Cupcake Set" class="product-img">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Dessert</span>
                            <h3 class="product-title">Assorted Cupcakes (12 pcs)</h3>
                            <div class="product-price">
                                <span class="current-price">Rp 180.000</span>
                                <span class="original-price">Rp 200.000</span>
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
                        <div class="product-img-container">
                            <img src="https://images.unsplash.com/photo-1611293388250-580b08c4a145?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1336&q=80"
                                alt="French Macarons" class="product-img">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Kue Kering</span>
                            <h3 class="product-title">French Macarons (12 pcs)</h3>
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
                        <div class="product-img-container">
                            <img src="https://images.unsplash.com/photo-1571115177098-24ec42ed204d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80"
                                alt="Chocolate Ganache Cake" class="product-img">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Kue Tart</span>
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
                        <div class="product-img-container">
                            <img src="https://images.unsplash.com/photo-1568254183919-78a4f43a2877?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80"
                                alt="Mixed Fruit Tart" class="product-img">
                        </div>
                        <div class="product-info">
                            <span class="product-category">Dessert</span>
                            <h3 class="product-title">Mixed Fruit Tart Segar</h3>
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
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link active">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">4</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">5</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection
