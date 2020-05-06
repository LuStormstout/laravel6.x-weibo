<?php

/** @var Factory $factory */

use App\Models\Status;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Status::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'content' => $faker->text(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
