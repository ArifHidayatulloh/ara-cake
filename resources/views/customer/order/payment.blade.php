@extends('layouts.customer')

@section('content')
    <main class="main-content">
<!-- Payment Section -->
<section class="container">
    <div class="breadcrumb">
        <a href="#">Beranda</a>
        <span class="separator">/</span>
        <a href="#">Pesanan Saya</a>
        <span class="separator">/</span>
        <a href="#">#SD-20230615-001</a>
        <span class="separator">/</span>
        <span>Pembayaran</span>
    </div>
    
    <div class="payment-container">
        <div class="payment-form">
            <div class="payment-section">
                <div class="payment-header">
                    <h3 class="payment-title">
                        <i class="fas fa-credit-card"></i> Pembayaran
                    </h3>
                    <span class="payment-status status-pending">Menunggu Pembayaran</span>
                </div>
                
                <div class="payment-info">
                    <div class="payment-info-label">Nomor Pesanan</div>
                    <div class="payment-info-value">#SD-20230615-001</div>
                </div>
                <div class="payment-info">
                    <div class="payment-info-label">Total Pembayaran</div>
                    <div class="payment-info-value">Rp 625.000</div>
                </div>
                
                <div class="payment-due">
                    <div class="due-label">Batas Waktu Pembayaran:</div>
                    <div class="due-timer">23:45:12</div>
                </div>
                
                <h4>Pilih Metode Pembayaran</h4>
                <div class="payment-methods">
                    <label class="payment-method active">
                        <input type="radio" name="payment" checked>
                        <img src="https://via.placeholder.com/50x30?text=BCA" alt="BCA">
                        <span class="payment-method-name">Transfer BCA</span>
                    </label>
                    <label class="payment-method">
                        <input type="radio" name="payment">
                        <img src="https://via.placeholder.com/50x30?text=Mandiri" alt="Mandiri">
                        <span class="payment-method-name">Transfer Mandiri</span>
                    </label>
                    <label class="payment-method">
                        <input type="radio" name="payment">
                        <img src="https://via.placeholder.com/50x30?text=BNI" alt="BNI">
                        <span class="payment-method-name">Transfer BNI</span>
                    </label>
                    <label class="payment-method">
                        <input type="radio" name="payment">
                        <img src="https://via.placeholder.com/50x30?text=BRI" alt="BRI">
                        <span class="payment-method-name">Transfer BRI</span>
                    </label>
                    <label class="payment-method">
                        <input type="radio" name="payment">
                        <img src="https://via.placeholder.com/50x30?text=Gopay" alt="Gopay">
                        <span class="payment-method-name">Gopay</span>
                    </label>
                    <label class="payment-method">
                        <input type="radio" name="payment">
                        <img src="https://via.placeholder.com/50x30?text=OVO" alt="OVO">
                        <span class="payment-method-name">OVO</span>
                    </label>
                </div>
                
                <div class="payment-instruction">
                    <h4 class="instruction-title">Instruksi Pembayaran via Transfer BCA</h4>
                    <div class="instruction-steps">
                        <div class="instruction-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
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
                                <div class="account-info-value">1234567890 <button class="copy-btn"><i class="far fa-copy"></i> Salin</button></div>
                            </div>
                            <div class="account-info">
                                <div class="account-info-label">Atas Nama</div>
                                <div class="account-info-value">Sweet Delight Bakery</div>
                            </div>
                            <div class="account-info">
                                <div class="account-info-label">Jumlah Transfer</div>
                                <div class="account-info-value">Rp 625.000 <button class="copy-btn"><i class="far fa-copy"></i> Salin</button></div>
                            </div>
                        </div>
                        
                        <div class="instruction-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                Setelah transfer, unggah bukti transfer pada form di bawah ini.
                            </div>
                        </div>
                        
                        <div class="instruction-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                Pesanan akan diproses setelah pembayaran diverifikasi (maksimal 1x24 jam).
                            </div>
                        </div>
                    </div>
                </div>
                
                <h4>Unggah Bukti Transfer</h4>
                <div class="payment-upload">
                    <div class="upload-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="upload-text">
                        Klik untuk mengunggah bukti transfer
                    </div>
                    <div class="upload-hint">
                        Format: JPG, PNG (maks. 2MB)
                    </div>
                </div>
                
                <button class="btn-submit-payment">
                    <i class="fas fa-paper-plane"></i> Kirim Bukti Pembayaran
                </button>
            </div>
        </div>
        
        <div class="order-summary">
            <div class="payment-section">
                <h3 class="payment-title">
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
            
            <div class="customer-support">
                <h4 class="support-title">Butuh Bantuan?</h4>
                <div class="support-contact">
                    <div class="support-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>(021) 1234-5678</span>
                    </div>
                    <div class="support-item">
                        <i class="fas fa-envelope"></i>
                        <span>support@sweetdelight.com</span>
                    </div>
                    <div class="support-item">
                        <i class="fas fa-clock"></i>
                        <span>Senin-Minggu, 08.00-20.00 WIB</span>
                    </div>
                </div>
                <button class="whatsapp-btn">
                    <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
                </button>
            </div>
        </div>
    </div>
</section>

    </main>
@endsection