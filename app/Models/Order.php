<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'recipient_name',
        'recipient_phone',
        'shipping_address',
        'status'
    ];
}
