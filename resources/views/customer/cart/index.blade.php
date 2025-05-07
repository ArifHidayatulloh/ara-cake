@extends('layouts.customer')

@section('content')
    <main class="main-content">
        <section class="container">
            <div class="breadcrumb">
                <a href="#">Beranda</a>
                <span class="separator">/</span>
                <span>Keranjang Belanja</span>
            </div>

            <div class="cart-container">
                <div class="cart-items">
                    <div class="cart-header">
                        <h2 class="cart-title">Keranjang Belanja</h2>
                        <span class="cart-count">3 item</span>
                    </div>

                    <!-- Cart Item 1 -->
                    <div class="cart-item">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1089&q=80"
                            alt="Red Velvet Cake" class="cart-item-img">
                        <div class="cart-item-details">
                            <div>
                                <h3 class="cart-item-title">Red Velvet Cake</h3>
                                <p class="cart-item-variant">Ukuran: 25cm • Rasa: Original</p>
                                <p class="cart-item-price">Rp 250.000</p>
                            </div>
                        </div>
                        <div class="cart-item-actions">
                            <button class="cart-item-remove">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                            <div class="cart-item-quantity">
                                <button class="cart-quantity-btn">-</button>
                                <input type="number" value="1" min="1" class="cart-quantity-input">
                                <button class="cart-quantity-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="cart-item">
                        <img src="https://images.unsplash.com/photo-1558326567-98ae2405596b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1026&q=80"
                            alt="Chocolate Lava Cake" class="cart-item-img">
                        <div class="cart-item-details">
                            <div>
                                <h3 class="cart-item-title">Chocolate Lava Cake</h3>
                                <p class="cart-item-variant">Ukuran: 20cm</p>
                                <p class="cart-item-price">Rp 180.000</p>
                            </div>
                        </div>
                        <div class="cart-item-actions">
                            <button class="cart-item-remove">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                            <div class="cart-item-quantity">
                                <button class="cart-quantity-btn">-</button>
                                <input type="number" value="1" min="1" class="cart-quantity-input">
                                <button class="cart-quantity-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 3 -->
                    <div class="cart-item">
                        <img src="https://images.unsplash.com/photo-1562440499-64c9a111f713?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                            alt="Strawberry Cheesecake" class="cart-item-img">
                        <div class="cart-item-details">
                            <div>
                                <h3 class="cart-item-title">Strawberry Cheesecake</h3>
                                <p class="cart-item-variant">Ukuran: 22cm</p>
                                <p class="cart-item-price">Rp 220.000</p>
                            </div>
                        </div>
                        <div class="cart-item-actions">
                            <button class="cart-item-remove">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                            <div class="cart-item-quantity">
                                <button class="cart-quantity-btn">-</button>
                                <input type="number" value="1" min="1" class="cart-quantity-input">
                                <button class="cart-quantity-btn">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="continue-shopping">
                        <button class="btn-continue">
                            <i class="fas fa-arrow-left"></i> Lanjutkan Belanja
                        </button>
                    </div>
                </div>

                <div class="cart-summary">
                    <h3 class="summary-title">Ringkasan Belanja</h3>

                    <div class="summary-row">
                        <span class="summary-label">Subtotal</span>
                        <span class="summary-value">Rp 650.000</span>
                    </div>

                    <div class="summary-row">
                        <span class="summary-label">Diskon</span>
                        <span class="summary-value">-Rp 50.000</span>
                    </div>

                    <div class="summary-row">
                        <span class="summary-label">Biaya Pengiriman</span>
                        <span class="summary-value">Rp 25.000</span>
                    </div>

                    <div class="summary-row summary-total">
                        <span class="summary-label">Total</span>
                        <span class="summary-value">Rp 625.000</span>
                    </div>

                    <div class="summary-actions">
                        <button class="btn-checkout">
                            <i class="fas fa-credit-card"></i> Lanjut ke Pembayaran
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
