<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ProductLine;
use Faker\Generator as Faker;

$factory->define(ProductLine::class, function (Faker $faker) {
    return [
        'text_description' => $faker->text($maxNbChars = 255),
        'html_description' => $faker->text($maxNbChars = 255),
        'image' => $faker->imageUrl()
    ];
});
