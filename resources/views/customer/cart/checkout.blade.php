@extends('layouts.customer')

@section('content')
    <main class="main-content">
        <section class="container">
            <div class="breadcrumb">
                <a href="#">Beranda</a>
                <span class="separator">/</span>
                <a href="#">Keranjang</a>
                <span class="separator">/</span>
                <span>Checkout</span>
            </div>

            <div class="checkout-container">
                <div class="checkout-form">
                    <!-- Customer Information -->
                    <div class="checkout-section">
                        <h3 class="section-title">
                            <i class="fas fa-user"></i> Informasi Pelanggan
                        </h3>
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" id="name" class="form-control" value="Andi Wijaya">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" value="andi.wijaya@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" id="phone" class="form-control" value="081234567890">
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="checkout-section">
                        <h3 class="section-title">
                            <i class="fas fa-map-marker-alt"></i> Alamat Pengiriman
                        </h3>                        
                        <div class="form-group">
                            <label for="address" class="form-label">Alamat Lengkap</label>
                            <textarea id="address" class="form-control" rows="3">Jl. Melati No. 123, RT 05/RW 02, Kel. Menteng, Kec. Jakarta Pusat, DKI Jakarta 10310</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="province" class="form-label">Provinsi</label>
                                <select id="province" class="form-control pt-1 pb-1">
                                    <option>DKI Jakarta</option>
                                    <option>Jawa Barat</option>
                                    <option>Jawa Tengah</option>
                                    <option>Jawa Timur</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city" class="form-label">Kota/Kabupaten</label>
                                <select id="city" class="form-control pt-1 pb-1">
                                    <option>Jakarta Pusat</option>
                                    <option>Jakarta Selatan</option>
                                    <option>Jakarta Barat</option>
                                    <option>Jakarta Utara</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="district" class="form-label">Kecamatan</label>
                                <select id="district" class="form-control pt-1 pb-1" >
                                    <option>Menteng</option>
                                    <option>Gambir</option>
                                    <option>Senen</option>
                                    <option>Cikini</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="postal" class="form-label">Kode Pos</label>
                                <input type="text" id="postal" class="form-control" value="10310">
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Method -->
                    <div class="checkout-section">
                        <h3 class="section-title">
                            <i class="fas fa-truck"></i> Metode Pengiriman
                        </h3>
                        <div class="shipping-methods">
                            <label class="shipping-method active">
                                <input type="radio" name="shipping" checked>
                                <div class="shipping-method-info">
                                    <div class="shipping-method-name">Reguler</div>
                                    <div class="shipping-method-desc">Estimasi 1-2 hari kerja</div>
                                </div>
                                <div class="shipping-method-price">Rp 25.000</div>
                            </label>
                            <label class="shipping-method">
                                <input type="radio" name="shipping">
                                <div class="shipping-method-info">
                                    <div class="shipping-method-name">Express</div>
                                    <div class="shipping-method-desc">Estimasi hari yang sama (jika dipesan sebelum jam
                                        12.00)</div>
                                </div>
                                <div class="shipping-method-price">Rp 50.000</div>
                            </label>
                            <label class="shipping-method">
                                <input type="radio" name="shipping">
                                <div class="shipping-method-info">
                                    <div class="shipping-method-name">Ambil di Toko</div>
                                    <div class="shipping-method-desc">Ambil sendiri di toko kami</div>
                                </div>
                                <div class="shipping-method-price">Gratis</div>
                            </label>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="checkout-section">
                        <h3 class="section-title">
                            <i class="fas fa-credit-card"></i> Metode Pembayaran
                        </h3>
                        <div class="payment-methods">
                            <label class="payment-method active">
                                <input type="radio" name="payment" checked>
                                <img src="{{ asset('assets/images/bca.png') }}" alt="BCA">
                                <span class="payment-method-name">Transfer BCA</span>
                            </label>
                            <label class="payment-method">
                                <input type="radio" name="payment">
                                <img src="{{ asset('assets/images/mandiri.png') }}" alt="Mandiri">
                                <span class="payment-method-name">Transfer Mandiri</span>
                            </label>
                            <label class="payment-method">
                                <input type="radio" name="payment">
                                <img src="{{asset('assets/images/bni.png')}}" alt="BNI">
                                <span class="payment-method-name">Transfer BNI</span>
                            </label>
                            <label class="payment-method">
                                <input type="radio" name="payment">
                                <img src="{{ asset('assets/images/bri.png') }}" alt="BRI" class="mt-1">
                                <span class="payment-method-name">Transfer BRI</span>
                            </label>
                            <label class="payment-method">
                                <input type="radio" name="payment">
                                <img src="{{ asset('assets/images/gopay.png') }}" alt="Gopay">
                                <span class="payment-method-name">Gopay</span>
                            </label>
                            <label class="payment-method">
                                <input type="radio" name="payment">
                                <img src="{{ asset('assets/images/ovo.png') }}" alt="OVO" class="mt-1">
                                <span class="payment-method-name">OVO</span>
                            </label>
                        </div>
                    </div>

                    <!-- Order Notes -->
                    <div class="checkout-section">
                        <h3 class="section-title">
                            <i class="fas fa-edit"></i> Catatan Pesanan
                        </h3>
                        <div class="form-group">
                            <label for="notes" class="form-label">Catatan untuk penjual (opsional)</label>
                            <textarea id="notes" class="form-control" rows="3"
                                placeholder="Contoh: Tolong tambahkan lilin ulang tahun dan tulisan 'Selamat Ulang Tahun Rina'"></textarea>
                        </div>
                    </div>
                </div>

                <div class="order-summary">
                    <div class="checkout-section">
                        <h3 class="section-title">
                            <i class="fas fa-receipt"></i> Ringkasan Pesanan
                        </h3>

                        <form class="coupon-form">
                            <input type="text" class="coupon-input" placeholder="Kode Kupon">
                            <button type="submit" class="coupon-btn">Pakai</button>
                        </form>

                        <div class="order-items">
                            <div class="order-item">
                                <span class="order-item-name">Red Velvet Cake × 1</span>
                                <span class="order-item-price">Rp 250.000</span>
                            </div>
                            <div class="order-item">
                                <span class="order-item-name">Chocolate Lava Cake × 1</span>
                                <span class="order-item-price">Rp 180.000</span>
                            </div>
                            <div class="order-item">
                                <span class="order-item-name">Strawberry Cheesecake × 1</span>
                                <span class="order-item-price">Rp 220.000</span>
                            </div>
                        </div>

                        <div class="order-totals">
                            <div class="order-total-row">
                                <span class="order-total-label">Subtotal</span>
                                <span class="order-total-value">Rp 650.000</span>
                            </div>
                            <div class="order-total-row">
                                <span class="order-total-label">Diskon</span>
                                <span class="order-total-value">-Rp 50.000</span>
                            </div>
                            <div class="order-total-row">
                                <span class="order-total-label">Pengiriman</span>
                                <span class="order-total-value">Rp 25.000</span>
                            </div>
                        </div>

                        <div class="order-total-row order-grand-total">
                            <span class="order-total-label">Total</span>
                            <span class="order-total-value">Rp 625.000</span>
                        </div>

                        <button class="btn-place-order">
                            <i class="fas fa-shopping-bag"></i> Buat Pesanan
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        // Handle pemilihan metode pengiriman
        const shippingMethods = document.querySelectorAll('.shipping-method input[type="radio"]');
        shippingMethods.forEach((radio) => {
            radio.addEventListener('change', function () {
                document.querySelectorAll('.shipping-method').forEach((label) => {
                    label.classList.remove('active');
                });
                this.closest('.shipping-method').classList.add('active');
            });
        });

        // Handle pemilihan metode pembayaran
        const paymentMethods = document.querySelectorAll('.payment-method input[type="radio"]');
        paymentMethods.forEach((radio) => {
            radio.addEventListener('change', function () {
                document.querySelectorAll('.payment-method').forEach((label) => {
                    label.classList.remove('active');
                });
                this.closest('.payment-method').classList.add('active');
            });
        });
    });
    </script>
@endsection
