<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName($gender = 'male'|'female'),
        'lname' => $faker->lastName($gender = 'male'|'female'),
        'email'=> $faker->email(),
        'password' => $faker->password()
    ];
});
