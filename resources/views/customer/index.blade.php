@extends('layouts.customer')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Kue Lezat untuk Momen Spesial</h2>
            <p>Temukan berbagai macam kue premium dengan rasa yang menggoda dan tampilan yang memukau</p>
            <div class="hero-buttons">
                <button class="btn btn-primary"><i class="fas fa-shopping-basket"></i> Belanja Sekarang</button>
            </div>
        </div>
    </section>
    <main class="main-content">

        <!-- Categories -->
        <section class="container">
            <div class="section-title d-flex justify-content-center">
                <h2>Kategori Produk</h2>
            </div>
            <div class="categories">
                <div class="category-card">
                    <i class="fas fa-birthday-cake"></i>
                    <h3>Kue Ulang Tahun</h3>
                </div>
                <div class="category-card">
                    <i class="fas fa-cookie"></i>
                    <h3>Kue Kering</h3>
                </div>
                <div class="category-card">
                    <i class="fas fa-cheese"></i>
                    <h3>Kue Tart</h3>
                </div>
                <div class="category-card">
                    <i class="fas fa-ice-cream"></i>
                    <h3>Dessert</h3>
                </div>
                <div class="category-card">
                    <i class="fas fa-heart"></i>
                    <h3>Kue Pernikahan</h3>
                </div>
            </div>
        </section>

        <!-- Featured Products -->
        <section class="products container">
            <div class="section-title d-flex justify-content-center">
                <h2>Produk Unggulan</h2>
            </div>
            <div class="product-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-badge">Terlaris</div>
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1089&q=80"
                            alt="Red Velvet Cake">
                    </div>
                    <div class="product-info">
                        <p class="product-category">Kue Ulang Tahun</p>
                        <h3 class="product-title">Red Velvet Cake</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 250.000</span>
                            <span class="original-price">Rp 300.000</span>
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
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1558326567-98ae2405596b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1026&q=80"
                            alt="Chocolate Cake">
                    </div>
                    <div class="product-info">
                        <p class="product-category">Kue Tart</p>
                        <h3 class="product-title">Chocolate Lava Cake</h3>
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
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1562440499-64c9a111f713?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                            alt="Cheesecake">
                    </div>
                    <div class="product-info">
                        <p class="product-category">Dessert</p>
                        <h3 class="product-title">Strawberry Cheesecake</h3>
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
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1026&q=80"
                            alt="Wedding Cake">
                    </div>
                    <div class="product-info">
                        <p class="product-category">Kue Pernikahan</p>
                        <h3 class="product-title">Elegant Wedding Cake</h3>
                        <div class="product-price">
                            <span class="current-price">Rp 1.500.000</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn-add-to-cart"><i class="fas fa-cart-plus"></i> Keranjang</button>
                            <button class="btn-favorite"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Proses Pembuatan -->
        <section class="process container">
            <div class="section-title d-flex justify-content-center">
                <h2>Proses Pembuatan Kue Kami</h2>
            </div>
            <div class="process-steps">
                <!-- Step 1 -->
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Pemilihan Bahan Berkualitas</h3>
                        <p>Kami hanya menggunakan bahan-bahan premium segar seperti telur organik, butter impor, dan
                            buah-buahan pilihan untuk menjamin rasa terbaik.</p>
                    </div>
                    <div class="step-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Pembuatan dengan Teknik Handmade</h3>
                        <p>Setiap kue dibuat secara handmade oleh pastry chef profesional dengan perhatian pada detail dan
                            cita rasa autentik.</p>
                    </div>
                    <div class="step-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Pengemasan Premium</h3>
                        <p>Kue dikemas dengan box eksklusif dan sistem pendingin untuk menjaga kesegaran selama pengiriman.
                        </p>
                    </div>
                    <div class="step-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                </div>

                
            </div>
        </section>

        <!-- Newsletter -->
        <section class="newsletter container">
            <h3>Dapatkan Promo Spesial</h3>
            <p>Berlangganan newsletter kami untuk mendapatkan diskon dan informasi produk terbaru langsung ke email Anda</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Alamat email Anda">
                <button type="submit"><i class="fas fa-paper-plane"></i></button>
            </form>
        </section>
    </main>
@endsection
