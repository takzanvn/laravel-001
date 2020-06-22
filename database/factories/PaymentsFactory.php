<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    $id_customers = DB::table('customers')->pluck('customer_id');

    return [
        'customer_id' => $faker->randomElement($id_customers),
        'check_number' => $faker->numberBetween(100000, 999999),
        'payment_date' => date(NOW()),
        'amount' => $faker->numberBetween(20, 100000)
    ];
});
