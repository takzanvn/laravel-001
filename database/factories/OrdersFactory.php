<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $orderDate = date(NOW());
    $requiredDate = date("Y-m-d", intval(strtotime("+{$faker->numberBetween(3,7)} days")));
    $shippedDate = date("Y-m-d", intval(strtotime("+{$faker->numberBetween(3,7)} days")));
    $id_customer = DB::table('customers')->pluck('id');
    return [
        'order_date' => $orderDate,
        'required_date' => $requiredDate,
        'shipped_date' => $shippedDate,
        'status' => $faker->numberBetween(0,3),
        'comments' => $faker->text($maxNbChars = 255),
        'customer_id' => $faker->randomElement($id_customer)
    ];
});
