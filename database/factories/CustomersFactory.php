<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    $lastname = $faker->lastName();
    $firstname = $faker->firstName();
    $username = Str::slug($firstname . " " . $lastname);
    $id_sales_rep_employee = DB::table('employees')->pluck('employee_id');

    return [
        'username' => $username,
        'first_name' => $firstname,
        'last_name' => $lastname,
        'phone' => $faker->e164PhoneNumber(),
        'address_line1' => $faker->streetAddress(),
        'city' => $faker->city(),
        'state' => $faker->state(),
        'postal_code' => intval($faker->postcode()),
        'country' => $faker->country(),
        'sales_rep_employee_id' => $faker->randomElement($id_sales_rep_employee),
        'credit_limit' => $faker->numberBetween(0, 1000000)
    ];
});
