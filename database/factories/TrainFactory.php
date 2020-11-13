<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Train;
use Faker\Generator as Faker;

$factory->define(Train::class, function (Faker $faker) {
    return [
        'route'=>'Ollantay/Mapi 9hrs',
        'company'=>'Peru Rail',
        'service'=>'Vistadone',
        'date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'time'=>$faker->time($format = 'H:i:s', $max = 'now'),
        'file_id'=>$faker->numberBetween($min = 1, $max = 20)
    ];
});
