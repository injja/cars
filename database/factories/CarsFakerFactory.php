<?php

namespace Database\Factories;

use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(Models::class, function (faker $faker) {
    return [
        'model' => $faker->randomElement(['maly', 'duzy', "szybki", "wolny", "bialy", "czarny", "niebieski"]),
    ];
});
