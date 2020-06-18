<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'product_scale',
        'product_vendor',
        'product_description',
        'quantity_in_stock',
        'buy_price',
        'msrp',
        'product_line_id'
    ];
}
