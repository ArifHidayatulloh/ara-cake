@extends('layouts.app')

@section('content')
    @php
        $page = 'Dashboard';
    @endphp
    <!-- Main Content -->
    <main class="main-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-header-content">
                <h1 class="page-title">Selamat Datang, Sarah!</h1>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
            <div class="page-header-actions">
                <button class="btn btn-outline">
                    <i class="fas fa-download"></i> Export Laporan
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Pesanan
                </button>
            </div>
        </div>

        <!-- Welcome Banner -->
        <div class="welcome-banner">
            <div class="welcome-content">
                <h2 class="welcome-title">Ara Cake Bakery Dashboard</h2>
                <p class="welcome-text">Pantau kinerja toko kue Anda dengan mudah. Lihat statistik penjualan, kelola pesanan, dan pantau produk terlaris.</p>
                <button class="btn btn-outline" style="background: rgba(255,255,255,0.15); color: white; border-color: rgba(255,255,255,0.3);">
                    <i class="fas fa-chart-line"></i> Lihat Analitik
                </button>
            </div>
            <div class="welcome-icon">
                <i class="fas fa-birthday-cake"></i>
            </div>
        </div>

        <!-- Stats Section -->
        <section class="stats-container">
            <div class="stat-card sales">
                <div class="stat-icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="stat-value">Rp 8,75 Jt</div>
                <div class="stat-label">
                    Total Penjualan
                    <div class="stat-growth positive">
                        <i class="fas fa-arrow-up"></i> 12.5%
                    </div>
                </div>
            </div>

            <div class="stat-card orders">
                <div class="stat-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="stat-value">248</div>
                <div class="stat-label">
                    Total Pesanan
                    <div class="stat-growth positive">
                        <i class="fas fa-arrow-up"></i> 8.7%
                    </div>
                </div>
            </div>

            <div class="stat-card customers">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-value">104</div>
                <div class="stat-label">
                    Pelanggan Aktif
                    <div class="stat-growth positive">
                        <i class="fas fa-arrow-up"></i> 5.3%
                    </div>
                </div>
            </div>

            <div class="stat-card products">
                <div class="stat-icon">
                    <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="stat-value">56</div>
                <div class="stat-label">
                    Produk
                    <div class="stat-growth positive">
                        <i class="fas fa-arrow-up"></i> 3.2%
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Orders & Top Products -->
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pesanan Terbaru</h3>
                        <a href="#" class="card-link ms-auto">Lihat Semua <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Pesanan</th>
                                        <th>Pelanggan</th>
                                        <th>Tanggal</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="order-number">#TK-2025-098</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">
                                                    <img src="/api/placeholder/32/32" alt="Ani">
                                                </div>
                                                <span class="customer-name">Ani Wijaya</span>
                                            </div>
                                        </td>
                                        <td class="order-date">05 Mei 2025</td>
                                        <td class="order-total">Rp 450.000</td>
                                        <td><span class="order-status completed">Selesai</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-number">#TK-2025-097</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">BH</div>
                                                <span class="customer-name">Budi Hartono</span>
                                            </div>
                                        </td>
                                        <td class="order-date">05 Mei 2025</td>
                                        <td class="order-total">Rp 785.000</td>
                                        <td><span class="order-status processing">Diproses</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-number">#TK-2025-096</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">
                                                    <img src="/api/placeholder/32/32" alt="Citra">
                                                </div>
                                                <span class="customer-name">Citra Lestari</span>
                                            </div>
                                        </td>
                                        <td class="order-date">04 Mei 2025</td>
                                        <td class="order-total">Rp 320.000</td>
                                        <td><span class="order-status completed">Selesai</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-number">#TK-2025-095</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">DK</div>
                                                <span class="customer-name">Doni Kusuma</span>
                                            </div>
                                        </td>
                                        <td class="order-date">04 Mei 2025</td>
                                        <td class="order-total">Rp 125.000</td>
                                        <td><span class="order-status cancelled">Dibatalkan</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-number">#TK-2025-094</td>
                                        <td>
                                            <div class="customer-info">
                                                <div class="customer-avatar">
                                                    <img src="/api/placeholder/32/32" alt="Endang">
                                                </div>
                                                <span class="customer-name">Endang Puspita</span>
                                            </div>
                                        </td>
                                        <td class="order-date">03 Mei 2025</td>
                                        <td class="order-total">Rp 520.000</td>
                                        <td><span class="order-status pending">Menunggu</span></td>
                                        <td>
                                            <div class="order-actions">
                                                <button class="btn-action"><i class="fas fa-eye"></i></button>
                                                <button class="btn-action"><i class="fas fa-print"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Produk Terlaris</h3>
                        <a href="#" class="card-link">Detail <i class="fas fa-arrow-right"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="product-list">
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="/api/placeholder/60/60" alt="Red Velvet">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Red Velvet Cake</div>
                                    <div class="product-category">Kue Ulang Tahun</div>
                                    <div class="product-price">Rp 350.000</div>
                                </div>
                                <div class="product-sales">268 terjual</div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <img src="/api/placeholder/60/60" alt="Brownies">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Fudge Brownies</div>
                                    <div class="product-category">Kue Kering</div>
                                    <div class="product-price">Rp 75.000</div>
                                </div>
                                <div class="product-sales">215 terjual</div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <img src="/api/placeholder/60/60" alt="Cheese Tart">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Cheese Tart</div>
                                    <div class="product-category">Pastry</div>
                                    <div class="product-price">Rp 120.000</div>
                                </div>
                                <div class="product-sales">194 terjual</div>
                            </div>

                            <div class="product-item">
                                <div class="product-image">
                                    <img src="/api/placeholder/60/60" alt="Macarons">
                                </div>
                                <div class="product-details">
                                    <div class="product-name">Macarons Set</div>
                                    <div class="product-category">Kue Kering</div>
                                    <div class="product-price">Rp 180.000</div>
                                </div>
                                <div class="product-sales">178 terjual</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jadwal & Acara</h3>
                    </div>
                    <div class="card-body">
                        <div class="calendar">
                            <div class="calendar-header">
                                <div class="calendar-title">Mei 2025</div>
                                <div class="calendar-actions">
                                    <button class="calendar-btn"><i class="fas fa-chevron-left"></i></button>
                                    <button class="calendar-btn"><i class="fas fa-chevron-right"></i></button>
                                </div>
                            </div>
                            <div class="calendar-grid">
                                <div class="calendar-weekday">Min</div>
                                <div class="calendar-weekday">Sen</div>
                                <div class="calendar-weekday">Sel</div>
                                <div class="calendar-weekday">Rab</div>
                                <div class="calendar-weekday">Kam</div>
                                <div class="calendar-weekday">Jum</div>
                                <div class="calendar-weekday">Sab</div>

                                <div class="calendar-day other-month">28</div>
                                <div class="calendar-day other-month">29</div>
                                <div class="calendar-day other-month">30</div>
                                <div class="calendar-day">1</div>
                                <div class="calendar-day">2</div>
                                <div class="calendar-day has-event">3</div>
                                <div class="calendar-day has-event">4</div>

                                <div class="calendar-day today">5</div>
                                <div class="calendar-day has-event">6</div>
                                <div class="calendar-day">7</div>
                                <div class="calendar-day">8</div>
                                <div class="calendar-day">9</div>
                                <div class="calendar-day has-event">10</div>
                                <div class="calendar-day">11</div>

                                <div class="calendar-day">12</div>
                                <div class="calendar-day">13</div>
                                <div class="calendar-day">14</div>
                                <div class="calendar-day has-event">15</div>
                                <div class="calendar-day">16</div>
                                <div class="calendar-day">17</div>
                                <div class="calendar-day">18</div>

                                <div class="calendar-day">19</div>
                                <div class="calendar-day has-event">20</div>
                                <div class="calendar-day">21</div>
                                <div class="calendar-day">22</div>
                                <div class="calendar-day">23</div>
                                <div class="calendar-day">24</div>
                                <div class="calendar-day">25</div>

                                <div class="calendar-day">26</div>
                                <div class="calendar-day">27</div>
                                <div class="calendar-day">28</div>
                                <div class="calendar-day">29</div>
                                <div class="calendar-day">30</div>
                                <div class="calendar-day">31</div>
                                <div class="calendar-day other-month">1</div>
                            </div>
                        </div>

                        <h4 style="margin: 20px 0 15px; font-weight: 600; color: var(--gray-700);">Acara Mendatang</h4>
                        <div class="event-list">
                            <div class="event-item">
                                <div class="event-date">
                                    <div class="event-day">6</div>
                                    <div class="event-month">mei</div>
                                </div>
                                <div class="event-details">
                                    <div class="event-title">Workshop Cake Decoration</div>
                                    <div class="event-time"><i class="far fa-clock"></i> 14:00 - 16:00</div>
                                </div>
                            </div>

                            <div class="event-item">
                                <div class="event-date">
                                    <div class="event-day">10</div>
                                    <div class="event-month">mei</div>
                                </div>
                                <div class="event-details">
                                    <div class="event-title">Pameran Kue Artisan</div>
                                    <div class="event-time"><i class="far fa-clock"></i> 10:00 - 18:00</div>
                                </div>
                            </div>

                            <div class="event-item">
                                <div class="event-date">
                                    <div class="event-day">15</div>
                                    <div class="event-month">mei</div>
                                </div>
                                <div class="event-details">
                                    <div class="event-title">Peluncuran Menu Baru</div>
                                    <div class="event-time"><i class="far fa-clock"></i> 19:00 - 21:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
