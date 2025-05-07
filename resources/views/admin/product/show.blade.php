@extends('layouts.app')

@section('styles')
    <style>
        :root {
            --product-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition-smooth: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .product-detail-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        @media (max-width: 992px) {
            .product-detail-container {
                grid-template-columns: 1fr;
            }
        }

        .product-image-section {
            position: relative;
        }

        .main-image-container {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--product-shadow);
            margin-bottom: 25px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #f0f2f5 100%);
            transition: var(--transition-smooth);
        }

        .main-image-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .main-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            transition: var(--transition-smooth);
        }

        .thumbnail-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
            gap: 15px;
        }

        .thumbnail-item {
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            transition: var(--transition-smooth);
            aspect-ratio: 1/1;
            border: 2px solid transparent;
            background: linear-gradient(135deg, #f5f7fa 0%, #f0f2f5 100%);
        }

        .thumbnail-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .thumbnail-item.active {
            border-color: var(--primary);
            transform: scale(1.05);
        }

        .thumbnail-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-info-section {
            padding: 20px 0;
        }

        .product-title {
            font-family: 'Poppins', sans-serif;
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .product-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 25px;
        }

        .product-meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--gray-600);
            font-size: 15px;
            background: rgba(0, 0, 0, 0.02);
            padding: 6px 12px;
            border-radius: 20px;
        }

        .product-meta-item i {
            color: var(--primary);
            font-size: 14px;
        }

        .product-price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            margin: 25px 0;
            position: relative;
            display: inline-block;
        }

        .product-price::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
            border-radius: 3px;
        }

        .product-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .badge i {
            margin-right: 6px;
            font-size: 12px;
        }

        .badge-success {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }

        .badge-warning {
            background-color: rgba(255, 193, 7, 0.15);
            color: #ffc107;
        }

        .badge-primary {
            background-color: rgba(13, 110, 253, 0.15);
            color: #0d6efd;
        }

        .badge-secondary {
            background-color: rgba(108, 117, 125, 0.15);
            color: #6c757d;
        }

        .product-description {
            color: var(--gray-700);
            line-height: 1.8;
            margin-bottom: 30px;
            font-size: 15px;
        }

        .specs-container {
            background: rgba(0, 0, 0, 0.02);
            border-radius: 12px;
            padding: 25px;
            margin-top: 30px;
        }

        .specs-title {
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 20px;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .specs-title i {
            color: var(--primary);
        }

        .specs-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        @media (max-width: 768px) {
            .specs-grid {
                grid-template-columns: 1fr;
            }
        }

        .specs-item {
            display: flex;
            margin-bottom: 0;
        }

        .specs-label {
            width: 120px;
            font-weight: 500;
            color: var(--gray-600);
            font-size: 14px;
        }

        .specs-value {
            flex: 1;
            color: var(--gray-800);
            font-weight: 500;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 40px;
            padding-top: 25px;
            border-top: 1px dashed var(--gray-300);
        }

        /* Floating action button for mobile */
        .floating-action-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            display: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        @media (max-width: 768px) {
            .floating-action-btn {
                display: block;
            }
            .action-buttons {
                display: none;
            }
        }

        /* Animation for image change */
        @keyframes fadeIn {
            from { opacity: 0.6; }
            to { opacity: 1; }
        }

        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
    </style>
@endsection

@section('content')
    @php
        $page = 'Produk';
    @endphp
    <main class="main-content">
        <div class="page-header">
            <div class="page-header-content">
                <h1 class="page-title">Detail Produk</h1>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">Produk</a></li>
                    <li class="breadcrumb-item active">Detail Produk</li>
                </ul>
            </div>
        </div>

        <div class="product-detail-container">
            <div class="product-image-section">
                <div class="main-image-container">
                    <img src="{{ asset('storage/' . $product->thumbnail) }}"
                         alt="{{ $product->name }}"
                         class="main-image fade-in"
                         id="mainProductImage">
                </div>

                @if($product->photos->count() > 0)
                    <div class="thumbnail-gallery">
                        <div class="thumbnail-item active"
                             onclick="changeMainImage('{{ asset('storage/' . $product->thumbnail) }}', this)">
                            <img src="{{ asset('storage/' . $product->thumbnail) }}"
                                 alt="Thumbnail {{ $product->name }}">
                        </div>

                        @foreach($product->photos as $photo)
                            <div class="thumbnail-item"
                                 onclick="changeMainImage('{{ asset('storage/' . $photo->photo_path) }}', this)">
                                <img src="{{ asset('storage/' . $photo->photo_path) }}"
                                     alt="Gambar tambahan {{ $product->name }}">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="product-info-section">
                <h1 class="product-title">{{ $product->name }}</h1>

                <div class="product-meta">
                    <div class="product-meta-item">
                        <i class="fas fa-barcode"></i>
                        <span>SKU: {{ $product->code }}</span>
                    </div>
                    <div class="product-meta-item">
                        <i class="fas fa-tag"></i>
                        <span>{{ $product->category->name }}</span>
                    </div>
                    <div class="product-meta-item">
                        <i class="fas fa-box"></i>
                        <span>Stok: {{ $product->stock }}</span>
                    </div>
                </div>

                <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>

                <div class="product-badges">
                    @if($product->is_best_seller)
                        <span class="badge badge-primary">
                            <i class="fas fa-star"></i> Best Seller
                        </span>
                    @endif
                    @if($product->is_popular)
                        <span class="badge badge-warning">
                            <i class="fas fa-fire"></i> Populer
                        </span>
                    @endif
                    @if($product->status)
                        <span class="badge badge-success">
                            <i class="fas fa-check-circle"></i> Aktif
                        </span>
                    @else
                        <span class="badge badge-secondary">
                            <i class="fas fa-times-circle"></i> Nonaktif
                        </span>
                    @endif
                </div>

                <div class="product-description">
                    {!! nl2br(e($product->description)) !!}
                </div>

                <div class="specs-container">
                    <div class="specs-title">
                        <i class="fas fa-info-circle"></i>
                        <span>Detail Produk</span>
                    </div>
                    <div class="specs-grid">
                        <div class="specs-item">
                            <div class="specs-label">Ukuran</div>
                            <div class="specs-value">{{ $product->size ?? '-' }}</div>
                        </div>
                        <div class="specs-item">
                            <div class="specs-label">Kategori</div>
                            <div class="specs-value">{{ $product->category->name }}</div>
                        </div>
                        <div class="specs-item">
                            <div class="specs-label">Dibuat</div>
                            <div class="specs-value">{{ $product->created_at->format('d M Y H:i') }}</div>
                        </div>
                        <div class="specs-item">
                            <div class="specs-label">Diupdate</div>
                            <div class="specs-value">{{ $product->updated_at->format('d M Y H:i') }}</div>
                        </div>
                    </div>
                </div>

                <div class="action-buttons">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-outline">
                        <i class="fas fa-arrow-left mr-2"></i> Kembali
                    </a>
                    <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit mr-2"></i> Edit Produk
                    </a>
                </div>
            </div>
        </div>

        <!-- Floating action button for mobile -->
        <div class="floating-action-btn">
            <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-primary btn-lg rounded-circle">
                <i class="fas fa-edit"></i>
            </a>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        function changeMainImage(imageSrc, element) {
            const mainImage = document.getElementById('mainProductImage');

            // Add fade out effect
            mainImage.style.opacity = 0;

            setTimeout(() => {
                // Change image source
                mainImage.src = imageSrc;

                // Add fade in effect
                mainImage.style.opacity = 1;
                mainImage.classList.add('fade-in');

                // Remove animation class after it completes
                setTimeout(() => {
                    mainImage.classList.remove('fade-in');
                }, 300);
            }, 150);

            // Update active thumbnail
            document.querySelectorAll('.thumbnail-item').forEach(item => {
                item.classList.remove('active');
            });
            element.classList.add('active');
        }
    </script>
@endsection
