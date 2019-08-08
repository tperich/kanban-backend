<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Task\Task;

use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'column_id' => $faker->numberBetween(1, 3),
        'title' => $faker->colorName(),
        'description' => $faker->sentence(10)
    ];
});
