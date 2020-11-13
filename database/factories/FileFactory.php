<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\File;
use Faker\Generator as Faker;

$factory->define(File::class, function (Faker $faker) {
    return [
        'code'=>'DT'.$faker->ean8,
        'tour_name'=>$faker->sentence,
        'passenger_name'=>$faker->name,
        'email'=>$faker->email,
        'date_tour'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'date_briefing'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'price'=>$faker->numberBetween($min = 1000, $max = 9000),
        'number_packs'=>$faker->numberBetween($min = 1, $max = 10),
        'advancement'=>$faker->numberBetween($min = 500, $max = 800),
        'missing'=>$faker->numberBetween($min = 500, $max = 700),
        'message'=>$faker->text($maxNbChars = 900)
    ];
});

