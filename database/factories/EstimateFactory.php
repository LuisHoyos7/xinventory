<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estimate;
use Faker\Generator as Faker;

$factory->define(Estimate::class, function (Faker $faker) {
    return [
        'number_estimate' => $faker->numberBetween(-10000, 10000),
        'person_id' => factory(\App\Person::class),
        'estado_id' => factory(\App\Estado::class),
        'date' => $faker->date(),
    ];
});
