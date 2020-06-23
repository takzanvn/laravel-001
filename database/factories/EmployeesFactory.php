<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    $id_office = DB::table('offices')->pluck('id');

    return [
        'last_name' => $faker->lastName(),
        'first_name' => $faker->firstName(),
        'extension' => $faker->suffix(),
        'email' => $faker->email(),
        'reports_to' => 1,
        'job_title' => $faker->jobTitle(),
        'office_id' => $faker->randomElement($id_office)
    ];
});
