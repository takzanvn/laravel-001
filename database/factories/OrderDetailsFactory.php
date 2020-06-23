<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrderDetail;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    $id_orders = DB::table('orders')->pluck('id');
    $id_products = DB::table('products')->pluck('id');

    return [
        'quantity_ordered' => $faker->numberBetween(1, 1000),
        'price_each' => $faker->numberBetween(20, 100000) * 10,
        'order_id' => $faker->randomElement($id_orders),
        'product_id' =>$faker->randomElement($id_products)
    ];
});
