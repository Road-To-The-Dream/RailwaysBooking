<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Train::class, function (Faker $faker) {
    $name = random_int(10, 500) . 'K';
    $created_at = $faker->dateTimeBetween('now', 'now');

    $data = [
        'name' => $name,
        'created_at' => $created_at
    ];

    return $data;
});
