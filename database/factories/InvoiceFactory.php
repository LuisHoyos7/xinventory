<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Invoice;
use Faker\Generator as Faker;

$factory->define(Invoice::class, function (Faker $faker) {
    return [
        'number_invoice' => $faker->numberBetween(-10000, 10000),
        'person_id' => factory(\App\Person::class),
        'payment_type_id' => factory(\App\PaymentType::class),
        'estado_id' => factory(\App\Estado::class),
        'date' => $faker->date(),
    ];
});
