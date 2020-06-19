<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';

    public $timestamps = false;

    protected $fillable = [
        'quantity_ordered',
        'price_each',
        'order_id'
    ];
}
