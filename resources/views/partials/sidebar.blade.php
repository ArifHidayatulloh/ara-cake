<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <a href="#" class="logo">
            <div class="logo-icon">
                <i class="fas fa-birthday-cake"></i>
            </div>
            <div class="logo-text">
                <span class="logo-title">Ara Cake</span>
                <span class="logo-subtitle">Bakery Dashboard</span>
            </div>
        </a>
    </div>

    <hr class="sidebar-divider">

    <span class="menu-label">Menu Utama</span>
    <ul class="sidebar-menu">
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}" title="Dashboard"><i
                    class="fas fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="#" class="{{ request()->is('pesanan*') ? 'active' : '' }}" title="Pesanan"><i
                    class="fas fa-shopping-cart"></i> <span>Pesanan</span></a></li>
        <li>
            <a href="{{ route('admin.product.index') }}" class="{{ request()->is('admin/product*') ? 'active' : '' }}"
                title="Produk">
                <i class="fas fa-birthday-cake"></i> <span>Produk</span>
            </a>
        </li>

        <li><a href="#" class="{{ request()->is('pelanggan*') ? 'active' : '' }}" title="Pelanggan"><i
                    class="fas fa-users"></i> <span>Pelanggan</span></a></li>
    </ul>

    <span class="menu-label">Lainnya</span>
    <ul class="sidebar-menu">
        <li><a href="#"><i class="fas fa-chart-pie"></i> <span>Laporan</span></a></li>
        <li><a href="#"><i class="fas fa-calendar-alt"></i> <span>Reservasi</span></a></li>
        <li><a href="#"><i class="fas fa-bell"></i> <span>Notifikasi</span></a></li>
        <li><a href="#"><i class="fas fa-cog"></i> <span>Pengaturan</span></a></li>
    </ul>

    <div class="sidebar-footer">
        <div class="user-card">
            <div class="user-avatar">
                <img src="/api/placeholder/45/45" alt="Admin">
            </div>
            <div class="user-info">
                <div class="user-name">Sarah Johnson</div>
                <div class="user-role">Admin</div>
            </div>
            <div class="user-menu">
                <i class="fas fa-ellipsis-v"></i>
            </div>
        </div>
    </div>
</aside>
