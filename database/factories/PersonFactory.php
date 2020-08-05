<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'dni' => $faker->numberBetween(10000000, 1999999999),
        'name' => $faker->name,
        'direction' => $faker->address,
        'mobile' => $faker->phoneNumber,
        'mail' => $faker->email,
        'is_customer' => $faker->boolean,
        'is_worker' => $faker->boolean,
        'is_provider' => $faker->boolean,
    ];
});
