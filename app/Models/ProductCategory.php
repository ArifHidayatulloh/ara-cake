<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $casts = [
        'is_active' => 'boolean',
    ];
    
}
