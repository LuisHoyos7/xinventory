<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Color;
use Faker\Generator as Faker;

$factory->define(Color::class, function (Faker $faker) {
    return [
        'code' => $faker->numberBetween(-10000, 10000),
        'name' => $faker->word,
    ];
});
