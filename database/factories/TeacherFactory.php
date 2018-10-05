<?php

use Faker\Generator as Faker;
use App\Teacher;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'img' => '',
        'salary' => mt_rand(7000, 15000),
        'major' => $faker->randomElement(['Network Archtict', 'Systems Analyst', 'Information Systems Manager']),
    ];
});
