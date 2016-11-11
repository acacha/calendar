<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Acacha\Periods\Calendar::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->word,
    ];
});