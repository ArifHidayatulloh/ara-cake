@extends('layouts.customer')
@section('content')
    <main class="main-content">
         <!-- Product Detail -->
    <section class="container">
        <div class="breadcrumb">
            <a href="#">Beranda</a>
            <span class="separator">/</span>
            <a href="#">Produk</a>
            <span class="separator">/</span>
            <a href="#">Kue Ulang Tahun</a>
            <span class="separator">/</span>
            <span>Red Velvet Cake</span>
        </div>

        <div class="product-detail">
            <div class="product-gallery">
                <div class="main-image-container">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1089&q=80"
                         alt="Red Velvet Cake"
                         class="main-image"
                         id="mainImage">
                </div>
                <div class="thumbnail-container">
                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1089&q=80"
                         alt="Red Velvet Cake"
                         class="thumbnail active"
                         onclick="changeMainImage(this, 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1089&q=80')">
                    <img src="https://images.unsplash.com/photo-1586788680434-30d324b2d46f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80"
                         alt="Red Velvet Cake Slice"
                         class="thumbnail"
                         onclick="changeMainImage(this, 'https://images.unsplash.com/photo-1586788680434-30d324b2d46f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80')">
                    <img src="https://images.unsplash.com/photo-1558312651-5ac997310a71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1288&q=80"
                         alt="Red Velvet Cake Closeup"
                         class="thumbnail"
                         onclick="changeMainImage(this, 'https://images.unsplash.com/photo-1558312651-5ac997310a71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1288&q=80')">
                    <img src="https://images.unsplash.com/photo-1586788224331-9476b437a913?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80"
                         alt="Red Velvet Cake Packaging"
                         class="thumbnail"
                         onclick="changeMainImage(this, 'https://images.unsplash.com/photo-1586788224331-9476b437a913?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80')">
                </div>
            </div>

            <div class="product-info">
                <h1 class="product-title">Red Velvet Cake Premium dengan Cream Cheese Frosting</h1>
                <div class="product-meta">
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span class="product-review-count">(42 ulasan)</span>
                    </div>
                    <span class="product-sku">SKU: RDVLT-25CM</span>
                </div>

                <div class="product-price">
                    <span class="current-price">Rp 250.000</span>
                    <span class="original-price">Rp 300.000</span>
                    <span class="discount-badge">Diskon 17%</span>
                </div>

                <p class="product-description">
                    Red Velvet Cake kami dibuat dengan bahan-bahan premium menghasilkan tekstur yang lembut dan rasa yang sempurna.
                    Lapisan kue merah yang lembut dipadukan dengan frosting cream cheese yang creamy membuat kombinasi rasa yang tak terlupakan.
                </p>

                <div class="product-variants">
                    <h4 class="variant-title">Ukuran</h4>
                    <div class="variant-options">
                        <div class="variant-option">20cm (2-4 orang)</div>
                        <div class="variant-option active">25cm (6-8 orang)</div>
                        <div class="variant-option">30cm (10-12 orang)</div>
                    </div>
                </div>

                <div class="product-variants">
                    <h4 class="variant-title">Rasa</h4>
                    <div class="variant-options">
                        <div class="variant-option active">Original</div>
                        <div class="variant-option">Chocolate</div>
                        <div class="variant-option">Strawberry</div>
                    </div>
                </div>

                <div class="quantity-selector">
                    <span class="quantity-title">Jumlah:</span>
                    <div class="quantity-control">
                        <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
                        <input type="number" value="1" min="1" class="quantity-input" id="quantityInput">
                        <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                    </div>
                </div>

                <div class="product-actions">
                    <button class="btn-add-to-cart-lg">
                        <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                    </button>
                    <button class="btn-buy-now">
                        <i class="fas fa-bolt"></i> Beli Sekarang
                    </button>
                </div>

                <div class="product-meta-info">
                    <div class="meta-item">
                        <i class="fas fa-box-open"></i>
                        <span>Pengiriman dalam 1-2 hari kerja</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Garansi 100% kepuasan pelanggan</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-credit-card"></i>
                        <span>Pembayaran aman dengan berbagai metode</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="product-tabs">
            <div class="tab-header">
                <button class="tab-btn active" onclick="openTab(event, 'description')">Deskripsi</button>
                <button class="tab-btn" onclick="openTab(event, 'details')">Detail</button>
                <button class="tab-btn" onclick="openTab(event, 'reviews')">Ulasan (42)</button>
            </div>

            <div id="description" class="tab-content active">
                <h3>Tentang Red Velvet Cake</h3>
                <p>
                    Red Velvet Cake adalah kue klasik dengan warna merah yang mencolok dan rasa yang unik.
                    Kue ini memiliki tekstur yang lembut dan sedikit coklat dengan frosting cream cheese yang creamy.
                </p>
                <p>
                    Kami menggunakan bahan-bahan terbaik seperti buttermilk asli, cocoa powder berkualitas tinggi,
                    dan pewarna makanan alami untuk menghasilkan warna merah yang sempurna tanpa rasa pahit.
                </p>

                <h3>Bahan-Bahan</h3>
                <ul>
                    <li>Tepung terigu protein sedang</li>
                    <li>Buttermilk asli</li>
                    <li>Cocoa powder premium</li>
                    <li>Pewarna makanan alami</li>
                    <li>Telur segar</li>
                    <li>Butter tanpa garam</li>
                    <li>Cream cheese untuk frosting</li>
                </ul>

                <h3>Informasi Penyimpanan</h3>
                <p>
                    Simpan kue dalam kulkas jika tidak langsung dikonsumsi.
                    Kue dapat bertahan hingga 3 hari di kulkas atau 1 bulan jika dibekukan.
                </p>
            </div>

            <div id="details" class="tab-content">
                <h3>Detail Produk</h3>
                <table>
                    <tr>
                        <td>Berat</td>
                        <td>1.2 kg (25cm)</td>
                    </tr>
                    <tr>
                        <td>Dimensi</td>
                        <td>25cm diameter x 12cm tinggi</td>
                    </tr>
                    <tr>
                        <td>Porsi</td>
                        <td>6-8 orang</td>
                    </tr>
                    <tr>
                        <td>Kandungan</td>
                        <td>Mengandung gluten, susu, telur</td>
                    </tr>
                    <tr>
                        <td>Kemasan</td>
                        <td>Box premium dengan pita</td>
                    </tr>
                </table>
            </div>

            <div id="reviews" class="tab-content">
                <div class="review-container">
                    <div class="review-summary">
                        <div class="average-rating">
                            <div class="average-score">4.7</div>
                            <div class="star-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="total-reviews">Berdasarkan 42 ulasan</div>
                        </div>

                        <div class="rating-bars">
                            <div class="rating-bar">
                                <div class="rating-label">
                                    <span>5</span>
                                    <i class="fas fa-star rating-stars"></i>
                                </div>
                                <div class="bar-container">
                                    <div class="bar-progress" style="width: 75%"></div>
                                </div>
                                <span>32</span>
                            </div>
                            <div class="rating-bar">
                                <div class="rating-label">
                                    <span>4</span>
                                    <i class="fas fa-star rating-stars"></i>
                                </div>
                                <div class="bar-container">
                                    <div class="bar-progress" style="width: 15%"></div>
                                </div>
                                <span>6</span>
                            </div>
                            <div class="rating-bar">
                                <div class="rating-label">
                                    <span>3</span>
                                    <i class="fas fa-star rating-stars"></i>
                                </div>
                                <div class="bar-container">
                                    <div class="bar-progress" style="width: 5%"></div>
                                </div>
                                <span>2</span>
                            </div>
                            <div class="rating-bar">
                                <div class="rating-label">
                                    <span>2</span>
                                    <i class="fas fa-star rating-stars"></i>
                                </div>
                                <div class="bar-container">
                                    <div class="bar-progress" style="width: 2%"></div>
                                </div>
                                <span>1</span>
                            </div>
                            <div class="rating-bar">
                                <div class="rating-label">
                                    <span>1</span>
                                    <i class="fas fa-star rating-stars"></i>
                                </div>
                                <div class="bar-container">
                                    <div class="bar-progress" style="width: 1%"></div>
                                </div>
                                <span>1</span>
                            </div>
                        </div>
                    </div>

                    <div class="review-list">
                        <div class="review-card">
                            <div class="review-header">
                                <div class="reviewer-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Diana Putri">
                                </div>
                                <div class="reviewer-info">
                                    <h4>Diana Putri</h4>
                                    <div class="review-date">12 Juni 2023</div>
                                </div>
                            </div>
                            <div class="review-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="review-text">
                                "Red Velvet Cake ini benar-benar enak! Teksturnya lembut dan frosting cream cheesenya pas tidak terlalu manis.
                                Anak-anak saya sangat suka dan minta dibelikan lagi untuk ulang tahun mereka."
                            </div>
                            <div class="review-images">
                                <div class="review-image">
                                    <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1089&q=80" alt="Review Photo">
                                </div>
                                <div class="review-image">
                                    <img src="https://images.unsplash.com/photo-1586788680434-30d324b2d46f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1287&q=80" alt="Review Photo">
                                </div>
                            </div>
                        </div>

                        <div class="review-card">
                            <div class="review-header">
                                <div class="reviewer-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Budi Santoso">
                                </div>
                                <div class="reviewer-info">
                                    <h4>Budi Santoso</h4>
                                    <div class="review-date">5 Mei 2023</div>
                                </div>
                            </div>
                            <div class="review-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <div class="review-text">
                                "Warnanya cantik dan sesuai foto. Rasanya enak tapi menurut saya frostingnya agak terlalu banyak.
                                Pengiriman tepat waktu dan packing rapi."
                            </div>
                        </div>

                        <div class="review-card">
                            <div class="review-header">
                                <div class="reviewer-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Lisa Chen">
                                </div>
                                <div class="reviewer-info">
                                    <h4>Lisa Chen</h4>
                                    <div class="review-date">28 April 2023</div>
                                </div>
                            </div>
                            <div class="review-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="review-text">
                                "Pesan untuk acara kantor dan semua kolega memuji rasanya. Teksturnya sangat lembut dan frostingnya tidak terlalu manis.
                                Akan pesan lagi untuk acara berikutnya!"
                            </div>
                            <div class="review-images">
                                <div class="review-image">
                                    <img src="https://images.unsplash.com/photo-1558312651-5ac997310a71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1288&q=80" alt="Review Photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="write-review-btn">
                    <i class="fas fa-pen"></i> Tulis Ulasan
                </button>
            </div>
        </div>

        <!-- Related Products -->
        <div class="related-products">
            <div class="section-title">
                <h2>Produk Terkait</h2>
            </div>
            <div class="product-grid">
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1558326567-98ae2405596b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1026&q=80" alt="Chocolate Cake">
                    </div>
                    <div class="product-info">
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

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1562440499-64c9a111f713?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80" alt="Cheesecake">
                    </div>
                    <div class="product-info">
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

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1542826438-bd32f43d626f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1296&q=80" alt="Cupcake">
                    </div>
                    <div class="product-info">
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
            </div>
        </div>
    </section>
    </main>
@endsection
