<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('customer.index');
});

Route::get('/user/product', function () {
    return view('customer.product.product');
});

Route::get('/user/product/detail', function () {
    return view('customer.product.detail');
});

Route::get('/user/cart', function () {
    return view('customer.cart.index');
});

Route::get('/user/order-confirmation', function () {
    return view('customer.order.order-confirmation');
});

Route::get('/payment', function () {
    return view('customer.order.payment');
});




Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
    Route::get('/admin/category', 'category_index')->name('admin.category.index');
    Route::get('/admin/category/create', 'category_create')->name('admin.category.create');
    Route::post('/admin/category', 'category_store')->name('admin.category.store');
    Route::get('/admin/category/{id}/edit', 'category_edit')->name('admin.category.edit');
    Route::post('/admin/category/{id}', 'category_update')->name('admin.category.update');
    Route::delete('/admin/category/{id}', 'category_delete')->name('admin.category.destroy');

    Route::get('/admin/product', 'product_index')->name('admin.product.index');
    Route::get('/admin/product/create', 'product_create')->name('admin.product.create');
    Route::get('/admin/product/{id}', 'product_show')->name('admin.product.show');
    Route::post('/admin/product', 'product_store')->name('admin.product.store');
    Route::get('/admin/product/{id}/edit', 'product_edit')->name('admin.product.edit');
    Route::post('/admin/product/{id}', 'product_update')->name('admin.product.update');
    Route::delete('/admin/product/{id}', 'product_delete')->name('admin.product.destroy');
});


