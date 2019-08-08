<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Column\Column;

use Faker\Generator as Faker;

$factory->define(Column::class, function (Faker $faker) {
    return [
        'board_id' => 1,
        'title' => $faker->lastName()
    ];
});
