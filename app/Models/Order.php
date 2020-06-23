<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public $timestamps = false;

    protected $fillable = [
        'order_date',
        'required_date',
        'shipped_date',
        'status',
        'comments',
        'customer_id'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'order_details', 'order_id', 'product_id')->withPivot('quantity_ordered', 'price_each');
    }
}
