<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    $faker->addProvider(new \Brunty\Faker\BuzzwordJobProvider($faker));
    return [
        'company_id' => $faker->numberBetween($min = 1, $max = 10),
        'job_title' => $faker->jobTitle(),
        'job_description' => $faker->paragraph(),
    ];
});
