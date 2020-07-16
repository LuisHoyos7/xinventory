<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Iva;
use Faker\Generator as Faker;

$factory->define(Iva::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
    ];
});
