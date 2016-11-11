<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Acacha\Periods\Event::class, function (Faker\Generator $faker) {
    return [
        'name'        => $faker->word,
    ];
});