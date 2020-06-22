<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'city' => $faker->city(),
        'phone' => $faker->e164PhoneNumber(),
        'address_line1' => $faker->streetAddress(),
        'state' => $faker->state(),
        'country' => $faker->country(),
        'postal_code' => $faker->numberBetween(100000, 999999),
        'territory' => $faker->buildingNumber()
    ];
});
