<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Color;
use App\Article;
use App\Category;
use App\ArticleType;
use App\MeasureUnit;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween(10000, 5999999),
        'stock' => $faker->numberBetween(-10000, 10000),
        'category_id' => Category::all()->random()->id,
        'color_id' => Color::all()->random()->id,
        'article_type_id' => ArticleType::all()->random()->id,
        'measure_unit_id' => MeasureUnit::all()->random()->id,
    ];
});
