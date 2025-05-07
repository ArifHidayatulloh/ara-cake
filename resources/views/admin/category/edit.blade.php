@extends('layouts.app')

@section('styles')
    <style>
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
    </style>
@endsection

@section('content')
    @php
        $page = 'Kategori';
    @endphp
    <main class="main-content">
        <div class="page-header">
            <div class="page-header-content">
                <h1 class="page-title">Ubah Kategori</h1>
                <ul class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Produk</a></li>
                    <li class="breadcrumb-item active">Ubah Kategori</li>
                </ul>
            </div>
        </div>

        <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data"
            id="productForm">
            @csrf

            <div class="form-section">
                <h2 class="section-title">Informasi Dasar</h2>
                <div class="form-row">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Kategori</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Contoh: Kue Kering" required value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Status Kategori</label>
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <label class="switch">
                                    <input type="hidden" name="status" value="0">
                                    <input type="checkbox" name="status" value="1"
                                        {{ $category->is_active == 1 ? 'checked' : '' }}>

                                    <span class="slider"></span>
                                </label>
                                <span id="statusText">Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <button type="button" class="btn btn-outline">Batal</button>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i> Simpan Kategori
                </button>
            </div>
        </form>
    </main>
@endsection

@section('scripts')
    <script>
        const checkbox = document.querySelector('input[type="checkbox"][name="status"]');
        const statusText = document.getElementById('statusText');
        if (checkbox.checked) {
            statusText.textContent = 'Aktif';
        } else {
            statusText.textContent = 'Nonaktif';
        }

        checkbox.addEventListener('change', () => {
            statusText.textContent = checkbox.checked ? 'Aktif' : 'Nonaktif';
        });
    </script>
@endsection
