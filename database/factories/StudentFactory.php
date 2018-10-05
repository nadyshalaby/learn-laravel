<?php

use Faker\Generator as Faker;
use App\Student;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'tel' => $faker->phoneNumber,
        'age' => mt_rand(19, 22),
        'year' => mt_rand(1, 4),
        'dept_id' => mt_rand(1, 3),
        'img' => '',
    ];
});
