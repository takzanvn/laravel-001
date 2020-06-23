<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public $timestamps = false;
    
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

    public function productLine() {
        return $this->belongsTo(ProductLine::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'order_details', 'product_id', 'order_id')->withPivot('quantity_ordered', 'price_each');
    }
}
