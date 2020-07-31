<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'article_id' => factory(\App\Article::class),
        'invoice_id' => factory(\App\Invoice::class),
        'estimate_id' => factory(\App\Estimate::class),
    ];
});
