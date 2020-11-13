<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
    return [
        'destination'=>$faker->city,
        'hotel'=>$faker->company,
        'accommodation'=>'Simple',
        'check_in'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'check_out'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'file_id'=>$faker->numberBetween($min = 1, $max = 20)
    ];
});
