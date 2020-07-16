<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estado;
use Faker\Generator as Faker;

$factory->define(Estado::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
    ];
});
