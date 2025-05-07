<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    protected $table = 'product_photos';

    protected $fillable = [
        'product_id',
        'photo_path',
    ];
}
