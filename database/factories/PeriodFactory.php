<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\Acacha\Periods\Period::class, function (Faker\Generator $faker) {
    $now = \Carbon\Carbon::now();
    return [
        'name'        => $faker->word,
        'start_date'  => $now,
        'finish_date' => $now->addYear(),
    ];
});