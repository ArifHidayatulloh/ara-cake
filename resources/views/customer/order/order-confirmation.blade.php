@extends('layouts.customer')

@section('content')
    <main class="main-content">
        <!-- Order Confirmation -->
        <section class="container">
            <div class="breadcrumb">
                <a href="#">Beranda</a>
                <span class="separator">/</span>
                <a href="#">Pesanan Saya</a>
                <span class="separator">/</span>
                <span>Detail Pesanan</span>
            </div>
            
            <div class="order-confirmation">
                <div class="confirmation-icon">
                    <i class="fas fa-check"></i>
                </div>
                <h1 class="confirmation-title">Pesanan Anda Diterima!</h1>
                <p class="confirmation-subtitle">Terima kasih telah berbelanja di Ara Cake. Pesanan Anda sedang
                    diproses.</p>
                <p>Nomor pesanan: <span class="order-number">#SD-20230615-001</span></p>
            </div>           

            <div class="order-detail-container">
                <div class="order-details">
                    <div class="order-detail-section mb-2">
                        <h3 class="order-detail-title">
                            <i class="fas fa-info-circle"></i> Detail Pesanan
                        </h3>
                        <div class="order-info">
                            <div class="order-info-label">Nomor Pesanan</div>
                            <div class="order-info-value">#SD-20230615-001</div>
                        </div>
                        <div class="order-info">
                            <div class="order-info-label">Tanggal</div>
                            <div class="order-info-value">15 Juni 2023, 14:30 WIB</div>
                        </div>
                        <div class="order-info">
                            <div class="order-info-label">Status</div>
                            <div class="order-info-value">
                                <span style="color: var(--warning); font-weight: 600;">Menunggu Pembayaran</span>
                            </div>
                        </div>
                        <div class="order-info">
                            <div class="order-info-label">Metode Pembayaran</div>
                            <div class="order-info-value">Transfer Bank BCA</div>
                        </div>
                    </div>

                    <div class="order-detail-section">
                        <h3 class="order-detail-title">
                            <i class="fas fa-map-marker-alt"></i> Alamat Pengiriman
                        </h3>
                        <div class="order-info">
                            <div class="order-info-label">Nama</div>
                            <div class="order-info-value">Andi Wijaya</div>
                        </div>
                        <div class="order-info">
                            <div class="order-info-label">Telepon</div>
                            <div class="order-info-value">081234567890</div>
                        </div>
                        <div class="order-info">
                            <div class="order-info-label">Alamat</div>
                            <div class="order-info-value">
                                Jl. Melati No. 123, RT 05/RW 02<br>
                                Kel. Menteng, Kec. Jakarta Pusat<br>
                                DKI Jakarta 10310
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-summary">
                    <div class="order-detail-section mb-2">
                        <h3 class="order-detail-title">
                            <i class="fas fa-receipt"></i> Ringkasan Pesanan
                        </h3>

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
                    </div>

                    <div class="payment-instruction">
                        <h3 class="order-detail-title">
                            <i class="fas fa-credit-card"></i> Instruksi Pembayaran
                        </h3>

                        <div class="payment-steps">
                            <div class="payment-step">
                                <div class="payment-step-number">1</div>
                                <div class="payment-step-content">
                                    Transfer tepat sejumlah <strong>Rp 625.000</strong> ke rekening berikut:
                                </div>
                            </div>

                            <div class="payment-account">
                                <div class="account-info">
                                    <div class="account-info-label">Bank</div>
                                    <div class="account-info-value">BCA</div>
                                </div>
                                <div class="account-info">
                                    <div class="account-info-label">Nomor Rekening</div>
                                    <div class="account-info-value">1234567890</div>
                                </div>
                                <div class="account-info">
                                    <div class="account-info-label">Atas Nama</div>
                                    <div class="account-info-value">Ara Cake Bakery</div>
                                </div>
                            </div>

                            <div class="payment-step">
                                <div class="payment-step-number">2</div>
                                <div class="payment-step-content">
                                    Setelah transfer, konfirmasi pembayaran Anda dengan mengunggah bukti transfer melalui
                                    tombol di bawah atau WhatsApp kami di 081234567890.
                                </div>
                            </div>

                            <div class="payment-step">
                                <div class="payment-step-number">3</div>
                                <div class="payment-step-content">
                                    Pesanan akan diproses setelah pembayaran diverifikasi. Anda akan menerima notifikasi via
                                    email/SMS.
                                </div>
                            </div>
                        </div>

                        <div class="order-actions">
                            <button class="btn-order-action btn-primary">
                                <i class="fas fa-upload"></i> Unggah Bukti Transfer
                            </button>
                            <button class="btn-order-action btn-outline">
                                <i class="fas fa-shopping-bag"></i> Lihat Pesanan Lain
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
