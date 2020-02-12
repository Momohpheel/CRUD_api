<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agents;
use Faker\Generator as Faker;

$factory->define(Agents::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'city' => $faker->city
        
    ];
});
