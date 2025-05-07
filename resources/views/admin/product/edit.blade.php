@extends('layouts.app')

@section('styles')
<style>
    .image-upload-container {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
    }

    .upload-area {
        border: 2px dashed var(--gray-300);
        border-radius: var(--card-border-radius);
        padding: 25px;
        text-align: center;
        transition: all var(--transition-speed) ease;
        cursor: pointer;
        background-color: var(--gray-100);
        position: relative;
        overflow: hidden;
    }

    .upload-area:hover {
        border-color: var(--primary);
        background-color: var(--primary-light);
    }

    .upload-area.main {
        width: 300px;
        height: 300px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .upload-area.additional {
        flex: 1;
        min-height: 150px;
    }

    .upload-icon {
        font-size: 50px;
        color: var(--gray-400);
        margin-bottom: 15px;
    }

    .upload-text {
        color: var(--gray-600);
        font-weight: 500;
        margin-bottom: 5px;
    }

    .upload-hint {
        color: var(--gray-500);
        font-size: 12px;
    }

    .preview-image {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        border-radius: 10px;
    }

    .thumbnail-preview {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .remove-image {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--danger);
        cursor: pointer;
        opacity: 0;
        transition: all var(--transition-speed) ease;
    }

    .thumbnail-preview:hover .remove-image {
        opacity: 1;
    }

    .additional-images {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 15px;
    }

    .additional-image-item {
        width: 100px;
        height: 100px;
        border-radius: 10px;
        border: 1px solid var(--gray-200);
        position: relative;
        overflow: hidden;
    }

    .additional-image-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .additional-image-remove {
        position: absolute;
        top: 5px;
        right: 5px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: rgba(255, 114, 133, 0.8);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        cursor: pointer;
    }

    .form-section {
        background-color: var(--white);
        border-radius: var(--card-border-radius);
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    }

    .section-title {
        font-family: 'Playfair Display', serif;
        font-weight: 600;
        font-size: 20px;
        color: var(--gray-800);
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--gray-100);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--gray-700);
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid var(--gray-300);
        border-radius: var(--btn-border-radius);
        background-color: var(--white);
        color: var(--gray-700);
        font-size: 14px;
        transition: all var(--transition-speed) ease;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 4px var(--primary-light);
    }

    .form-textarea {
        min-height: 120px;
        resize: vertical;
    }

    .form-select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%236C757D' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 16px 12px;
    }

    .form-row {
        display: flex;
        gap: 20px;
    }

    .form-col {
        flex: 1;
    }

    .price-input {
        position: relative;
    }

    .price-input .currency {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gray-500);
    }

    .price-input .form-control {
        padding-left: 35px;
    }

    .tags-container {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 10px;
    }

    .tag {
        background-color: var(--primary-light);
        color: var(--primary-dark);
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .tag-remove {
        cursor: pointer;
        font-size: 12px;
    }

    .action-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 15px;
        margin-top: 30px;
    }

    /* Switch Toggle */
    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 24px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: var(--gray-300);
        transition: .4s;
        border-radius: 24px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked+.slider {
        background-color: var(--primary);
    }

    input:checked+.slider:before {
        transform: translateX(26px);
    }
     /* Semua style dari create bisa dipakai kembali */
     .image-upload-container {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .upload-area {
            border: 2px dashed var(--gray-300);
            border-radius: var(--card-border-radius);
            padding: 25px;
            text-align: center;
            transition: all var(--transition-speed) ease;
            cursor: pointer;
            background-color: var(--gray-100);
            position: relative;
            overflow: hidden;
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
                <h1 class="page-title">Edit Produk</h1>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Produk</a></li>
                    <li class="breadcrumb-item active">Edit Produk</li>
                </ul>
            </div>
        </div>

        <div class="form-section">
            <h2 class="section-title">Gambar Produk</h2>
            <div class="image-upload-container">
                <div class="upload-area main" id="thumbnailUpload">
                    <div class="thumbnail-preview" id="thumbnailPreview">
                        @if($product->thumbnail)
                            <img src="{{ asset('storage/' . $product->thumbnail) }}" class="preview-image" alt="Thumbnail Preview">
                            <div class="remove-image" id="removeThumbnail">
                                <i class="fas fa-times"></i>
                            </div>
                        @else
                            <i class="fas fa-camera upload-icon"></i>
                            <p class="upload-text">Thumbnail Produk</p>
                            <p class="upload-hint">Ukuran disarankan 800x800 px</p>
                            <div class="remove-image" id="removeThumbnail">
                                <i class="fas fa-times"></i>
                            </div>
                        @endif
                    </div>
                    <input type="file" id="thumbnailInput" accept="image/*" style="display: none;">
                </div>

                <div class="upload-area additional" id="additionalUpload">
                    <i class="fas fa-images upload-icon"></i>
                    <p class="upload-text">Gambar Tambahan</p>
                    <p class="upload-hint">Seret & lepas gambar atau klik untuk memilih</p>
                    <p class="upload-hint">Maksimal 5 gambar (ukuran disarankan 800x800 px)</p>

                    <div class="additional-images" id="additionalImagesContainer">
                        @foreach($product->photos as $photo)
                            <div class="additional-image-item">
                                <img src="{{ asset('storage/' . $photo->photo_path) }}" alt="Additional Image">
                                <div class="additional-image-remove" data-id="{{ $photo->id }}">
                                    <i class="fas fa-times"></i>
                                </div>
                                <input type="hidden" name="existing_images[]" value="{{ $photo->id }}">
                            </div>
                        @endforeach
                    </div>
                    <input type="file" id="additionalImagesInput" accept="image/*" multiple style="display: none;">
                </div>
            </div>
        </div>

        <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data" id="productForm">
            @csrf            

            <div class="form-section">
                <h2 class="section-title">Informasi Dasar</h2>
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Produk</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Contoh: Kue Ulang Tahun Chocolate" 
                                value="{{ old('name', $product->name) }}" required>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="category" class="form-label">Kategori</label>
                            <select id="category" name="category_id" class="form-control pt-1 pb-1" required>
                                <option value="">Pilih Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" 
                                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">Deskripsi Produk</label>
                    <textarea id="description" name="description" class="form-control form-textarea"
                        placeholder="Deskripsi lengkap tentang produk Anda" required style="white-space: pre-wrap;">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="code" class="form-label">SKU (Kode Produk)</label>
                    <input type="text" id="code" name="code" class="form-control"
                        placeholder="Contoh: ARA-CHOCO-001" 
                        value="{{ old('code', $product->code) }}" required>
                </div>
            </div>

            <div class="form-section">
                <h2 class="section-title">Harga & Stok</h2>
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group price-input">
                            <label for="price" class="form-label">Harga Normal</label>
                            <span class="currency">Rp</span>
                            <input type="number" id="price" name="price" class="form-control" 
                                placeholder="0" min="0" value="{{ old('price', $product->price) }}" required>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="stock" class="form-label">Stok</label>
                            <input type="number" id="stock" name="stock" class="form-control" 
                                placeholder="0" min="0" value="{{ old('stock', $product->stock) }}" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <h2 class="section-title">Pengaturan Tambahan</h2>
                <div class="form-group">
                    <label for="size" class="form-label">Ukuran</label>
                    <input type="text" id="size" name="size" class="form-control"
                        placeholder="Contoh: 30x30 cm atau Diameter 20 cm" 
                        value="{{ old('size', $product->size) }}" required>
                </div>
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label class="form-label">Status Produk</label>
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <label class="switch">
                                    <input type="checkbox" name="status" value="1" 
                                        {{ $product->status ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                </label>
                                <span id="statusText">{{ $product->status ? 'Aktif' : 'Nonaktif' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label class="form-label">Produk Populer</label>
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <label class="switch">
                                    <input type="checkbox" name="is_popular" value="1" 
                                        {{ $product->is_popular ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                </label>
                                <span id="isPopularText">{{ $product->is_popular ? 'Ya' : 'Tidak' }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label class="form-label">Produk Best Seller</label>
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <label class="switch">
                                    <input type="checkbox" name="is_best_seller" value="1" 
                                        {{ $product->is_best_seller ? 'checked' : '' }}>
                                    <span class="slider"></span>
                                </label>
                                <span id="isBestSellerText">{{ $product->is_best_seller ? 'Ya' : 'Tidak' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <a href="{{ route('admin.product.index') }}" class="btn btn-outline">Batal</a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i> Update Produk
                </button>
            </div>

            <!-- Hidden inputs for images -->
            <input type="hidden" id="thumbnail_data" name="thumbnail" 
                value="{{ $product->thumbnail ? asset('storage/' . $product->thumbnail) : '' }}">
            <input type="hidden" id="additional_images_data" name="additional_images">
            <input type="hidden" id="deleted_images" name="deleted_images">
        </form>
    </main>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi variabel untuk menyimpan gambar yang dihapus
            let deletedImages = [];
            
            // Thumbnail image upload (sama seperti create)
            const thumbnailUpload = document.getElementById('thumbnailUpload');
            const thumbnailInput = document.getElementById('thumbnailInput');
            const thumbnailPreview = document.getElementById('thumbnailPreview');
            const thumbnailData = document.getElementById('thumbnail_data');

            thumbnailUpload.addEventListener('click', function() {
                thumbnailInput.click();
            });

            thumbnailInput.addEventListener('change', function(e) {
                if (e.target.files.length > 0) {
                    const file = e.target.files[0];
                    if (file.type.match('image.*')) {
                        const reader = new FileReader();

                        reader.onload = function(event) {
                            thumbnailPreview.innerHTML = `
                                <img src="${event.target.result}" class="preview-image" alt="Thumbnail Preview">
                                <div class="remove-image" id="removeThumbnail">
                                    <i class="fas fa-times"></i>
                                </div>
                            `;

                            thumbnailData.value = event.target.result;

                            document.getElementById('removeThumbnail').addEventListener('click', function(e) {
                                e.stopPropagation();
                                resetThumbnailPreview();
                            });
                        };

                        reader.readAsDataURL(file);
                    }
                }
            });

            function resetThumbnailPreview() {
                thumbnailPreview.innerHTML = `
                    <i class="fas fa-camera upload-icon"></i>
                    <p class="upload-text">Thumbnail Produk</p>
                    <p class="upload-hint">Ukuran disarankan 800x800 px</p>
                    <div class="remove-image" id="removeThumbnail">
                        <i class="fas fa-times"></i>
                    </div>
                `;
                thumbnailInput.value = '';
                thumbnailData.value = '';
            }

            // Jika ada thumbnail yang sudah ada, pasang event listener untuk remove
            if (thumbnailPreview.querySelector('img')) {
                document.getElementById('removeThumbnail').addEventListener('click', function(e) {
                    e.stopPropagation();
                    resetThumbnailPreview();
                });
            }

            // Additional images upload (dengan penanganan untuk gambar yang dihapus)
            const additionalUpload = document.getElementById('additionalUpload');
            const additionalImagesInput = document.getElementById('additionalImagesInput');
            const additionalImagesContainer = document.getElementById('additionalImagesContainer');
            const additionalImagesData = document.getElementById('additional_images_data');
            const deletedImagesInput = document.getElementById('deleted_images');
            let additionalImages = [];

            // Inisialisasi gambar tambahan yang sudah ada
            @foreach($product->photos as $photo)
                additionalImages.push({
                    id: 'existing_{{ $photo->id }}',
                    data: '{{ asset('storage/' . $photo->photo_path) }}'
                });
            @endforeach

            // Fungsi untuk update tampilan gambar tambahan
            function updateAdditionalImagesDisplay() {
                additionalImagesContainer.innerHTML = '';

                additionalImages.forEach(image => {
                    const isExisting = image.id.startsWith('existing_');
                    const imageId = isExisting ? image.id : image.id;
                    
                    const imageItem = document.createElement('div');
                    imageItem.className = 'additional-image-item';
                    imageItem.innerHTML = `
                        <img src="${image.data}" alt="Additional Image">
                        <div class="additional-image-remove" data-id="${imageId}">
                            <i class="fas fa-times"></i>
                        </div>
                        ${isExisting ? `<input type="hidden" name="existing_images[]" value="${image.id.replace('existing_', '')}">` : ''}
                    `;

                    additionalImagesContainer.appendChild(imageItem);

                    // Event listener untuk tombol hapus
                    imageItem.querySelector('.additional-image-remove').addEventListener('click', function(e) {
                        e.stopPropagation();
                        const idToRemove = this.getAttribute('data-id');
                        
                        if (idToRemove.startsWith('existing_')) {
                            // Tambahkan ke daftar gambar yang dihapus
                            const photoId = idToRemove.replace('existing_', '');
                            if (!deletedImages.includes(photoId)) {
                                deletedImages.push(photoId);
                                deletedImagesInput.value = JSON.stringify(deletedImages);
                            }
                        }
                        
                        // Hapus dari tampilan
                        additionalImages = additionalImages.filter(img => img.id !== idToRemove);
                        updateAdditionalImagesDisplay();
                        updateAdditionalImagesData();
                    });
                });
            }

            function updateAdditionalImagesData() {
                // Hanya simpan gambar baru (yang tidak memiliki prefix existing_)
                const newImages = additionalImages.filter(img => !img.id.startsWith('existing_'));
                additionalImagesData.value = JSON.stringify(newImages.map(img => img.data));
            }

            // Panggil pertama kali untuk menampilkan gambar yang sudah ada
            updateAdditionalImagesDisplay();

            // Sisanya sama seperti create
            additionalUpload.addEventListener('click', function() {
                additionalImagesInput.click();
            });

            additionalImagesInput.addEventListener('change', function(e) {
                if (e.target.files.length > 0) {
                    const files = Array.from(e.target.files);

                    if (additionalImages.length + files.length > 5) {
                        alert('Maksimal 5 gambar tambahan');
                        return;
                    }

                    files.forEach(file => {
                        if (file.type.match('image.*')) {
                            const reader = new FileReader();

                            reader.onload = function(event) {
                                const imageId = Date.now();
                                additionalImages.push({
                                    id: imageId,
                                    data: event.target.result
                                });

                                updateAdditionalImagesDisplay();
                                updateAdditionalImagesData();
                            };

                            reader.readAsDataURL(file);
                        }
                    });
                }
            });

            // Drag and drop (sama seperti create)
            additionalUpload.addEventListener('dragover', function(e) {
                e.preventDefault();
                additionalUpload.style.borderColor = 'var(--primary)';
                additionalUpload.style.backgroundColor = 'var(--primary-light)';
            });

            additionalUpload.addEventListener('dragleave', function() {
                additionalUpload.style.borderColor = 'var(--gray-300)';
                additionalUpload.style.backgroundColor = 'var(--gray-100)';
            });

            additionalUpload.addEventListener('drop', function(e) {
                e.preventDefault();
                additionalUpload.style.borderColor = 'var(--gray-300)';
                additionalUpload.style.backgroundColor = 'var(--gray-100)';

                if (e.dataTransfer.files.length > 0) {
                    const files = Array.from(e.dataTransfer.files);

                    if (additionalImages.length + files.length > 5) {
                        alert('Maksimal 5 gambar tambahan');
                        return;
                    }

                    files.forEach(file => {
                        if (file.type.match('image.*')) {
                            const reader = new FileReader();

                            reader.onload = function(event) {
                                const imageId = Date.now();
                                additionalImages.push({
                                    id: imageId,
                                    data: event.target.result
                                });

                                updateAdditionalImagesDisplay();
                                updateAdditionalImagesData();
                            };

                            reader.readAsDataURL(file);
                        }
                    });
                }
            });

            // Toggle switch handlers (sama seperti create)
            const statusToggle = document.querySelector('input[name="status"]');
            const statusText = document.getElementById('statusText');

            const isPopularToggle = document.querySelector('input[name="is_popular"]');
            const isPopularText = document.getElementById('isPopularText');

            const isBestSellerToggle = document.querySelector('input[name="is_best_seller"]');
            const isBestSellerText = document.getElementById('isBestSellerText');

            statusToggle.addEventListener('change', function() {
                statusText.textContent = this.checked ? 'Aktif' : 'Nonaktif';
            });

            isPopularToggle.addEventListener('change', function() {
                isPopularText.textContent = this.checked ? 'Ya' : 'Tidak';
            });

            isBestSellerToggle.addEventListener('change', function() {
                isBestSellerText.textContent = this.checked ? 'Ya' : 'Tidak';
            });

            // Form validation (sama seperti create)
            document.getElementById('productForm').addEventListener('submit', function(e) {
                if (!document.getElementById('thumbnail_data').value) {
                    e.preventDefault();
                    alert('Harap upload thumbnail produk');
                    return;
                }

                if (!document.getElementById('name').value.trim()) {
                    e.preventDefault();
                    alert('Harap isi nama produk');
                    return;
                }

                if (!document.getElementById('category').value) {
                    e.preventDefault();
                    alert('Harap pilih kategori produk');
                    return;
                }
            });
        });
    </script>
@endsection