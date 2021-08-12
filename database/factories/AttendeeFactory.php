<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Models\Attendee;

$factory->define(Attendee::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "email" => $faker->$faker->unique()->safeEmail,
        "city" => $faker->city,
        "phone" =>$faker->phoneNumber,
    ];
});
