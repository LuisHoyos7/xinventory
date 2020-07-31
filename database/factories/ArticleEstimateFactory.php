<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticleEstimate;
use Faker\Generator as Faker;

$factory->define(ArticleEstimate::class, function (Faker $faker) {
    return [
        'article_id' => factory(\App\Article::class),
        'estimate_id' => factory(\App\Estimate::class),
        'iva_id' => factory(\App\Iva::class),
        'amount_article' => $faker->numberBetween(-10000, 10000),
        'price_article' => $faker->randomFloat(0, 0, 9999999999.),
        'discount' => $faker->randomFloat(0, 0, 9999999999.),
        'interest' => $faker->randomFloat(0, 0, 9999999999.),
    ];
});
