<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'code',
        'category_id',
        'name',
        'description',
        'price',
        'size',
        'stock',
        'status',
        'thumbnail',
        'is_popular',
        'is_best_seller',
    ];

    public function category(){
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function photos(){
        return $this->hasMany(ProductPhoto::class, 'product_id');
    }
}
