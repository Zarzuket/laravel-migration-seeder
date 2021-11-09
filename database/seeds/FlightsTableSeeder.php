<?php

use Illuminate\Database\Seeder;
use App\Flight;
use Faker\Generator as Faker;

class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i = 0; $i<100; $i++){

            $newFlight = new Flight();
            $newFlight->from = $faker->country();
            $newFlight->to = $faker->country();
            $newFlight->stopover = $faker->boolean();
            $newFlight->days = $faker->numberBetween(0, 405);
            $newFlight->price = $faker->randomFloat(2, 1000, 99999);
            $newFlight->location = $faker->state();
            $newFlight->notes =$faker->text(75);
            $newFlight->save();
        }
    }
}
