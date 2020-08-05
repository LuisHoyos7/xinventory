<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'direction' => $faker->word,
        'mobile' => $faker->word,
        'mail' => $faker->word,
        'is_employed' => $faker->boolean,
        'is_worker' => $faker->boolean,
        'is_provider' => $faker->boolean,
        'dni' => $faker->word,
    ];
});
