<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;

use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['Company A', 'Company B', 'Company C', 'Company D', 'Company E', 'Company F', 'Company G', 'Company H', 'Company I', 'Company J', ])
    ];
});
