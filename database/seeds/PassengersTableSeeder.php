<?php

use App\Passenger;
use Illuminate\Database\Seeder;

class PassengersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Passenger::class,100)->create();
       
    }
}
