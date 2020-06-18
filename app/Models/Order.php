<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = [
        'order_date',
        'required_date',
        'shipped_date',
        'status',
        'comments',
        'customer_id'
    ];
}
