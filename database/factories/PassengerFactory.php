<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Passenger;
use Faker\Generator as Faker;

$factory->define(Passenger::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'passport'=>$faker->unixTime($max = 'now'),
        'nationality'=>$faker->country,
        'vegetarian'=>'yes',
        'date_birth'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'file_passport'=>'file_passport',
        'file_id'=>$faker->numberBetween($min = 1, $max = 20)
    ];
});
