<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->randomFloat(0, 0, 9999999999.),
        'stock' => $faker->numberBetween(-10000, 10000),
        'category_id' => factory(\App\Category::class),
        'color_id' => factory(\App\Color::class),
        'article_type_id' => factory(\App\ArticleType::class),
        'measure_unit_id' => factory(\App\MeasureUnit::class),
    ];
});
