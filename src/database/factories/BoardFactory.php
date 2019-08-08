<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Board\Board;

use Faker\Generator as Faker;

$factory->define(Board::class, function (Faker $faker) {
    return [
        'title' => $faker->colorName . ' ' . $faker->firstName,
    ];
});
