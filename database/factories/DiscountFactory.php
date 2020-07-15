<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Discount;
use Faker\Generator as Faker;

$factory->define(Discount::class, function (Faker $faker) {
    return [
        'article_id' => factory(\App\Article::class),
        'amount' => $faker->numberBetween(-10000, 10000),
    ];
});
