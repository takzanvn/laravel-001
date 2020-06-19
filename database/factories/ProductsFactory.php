<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $brands = [
        'Apple',
        'Samsung',
        'Sony',
        'HTC',
        'LG',
        'Oppo',
        'Realme',
        'Vsmart'
    ];

    $product_vendors = [
        'FPT',
        'Mai Hoàng Computer',
        'Hà Nội Computer',
        'Hải Anh Computer',
        'Thế giới di động',
        'Cellphones',
    ];

    $id_product_lines = DB::table('product_lines')->pluck('product_line_id');

    return [
        'product_name' => $faker->randomElement($brands) . "_" . $faker->regexify("[A-Z0-9]{8}"),
        'product_scale' => $faker->randomFloat($nbMaxDecimals = 2, $min = -5, $max = 5),
        'product_vendor' => $faker->randomElement($product_vendors),
        'product_description' => $faker->text($maxNbChars = 255),
        'quantity_in_stock' => $faker->numberBetween(1, 1000) * 10,
        'buy_price' => $faker->numberBetween(20, 100000),
        'msrp' => $faker->regexify("[A-Z0-9]{12}"),
        'product_line_id' => $faker->randomElement($id_product_lines)
    ];
});
