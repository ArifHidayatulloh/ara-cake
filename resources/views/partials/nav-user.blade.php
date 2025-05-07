 <!-- Navbar -->
 <nav class="navbar">
    <div class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Ara Cake Logo">
        <h1>Ara Cake</h1>
    </div>
    <div class="nav-links">
        <a href="{{ url('/user') }}"><i class="fas fa-home"></i> Beranda</a>
        <a href="{{ url('/user/product') }}"><i class="fas fa-birthday-cake"></i> Produk</a>
        <a href="#"><i class="fas fa-info-circle"></i> Tentang Kami</a>
        <a href="#"><i class="fas fa-phone-alt"></i> Kontak</a>
    </div>
    <div class="nav-icons">
        <a href="#"><i class="fas fa-search"></i></a>
        {{-- buat dropdown ketika icon user di klik --}}    
        <a href="#" class="user-icon"><i class="fas fa-user"></i></a>
        

        <a href="{{ url('/user/cart') }}">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-count">3</span>
        </a>
    </div>
</nav>
