<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $trip = new Trip();
          $trip->name = $faker->sentence($nbWords = 2, $variableNbWords = true);
          $trip->description = $faker->paragraph($nbSentences = 5, $variableNbSentences = true);
          $trip->destination = $faker->city;
          $trip->departure = $faker->dateTimeBetween($startDate = '-14 days', $endDate = '-7 days', $timezone = null);
          $trip->return = $faker->dateTimeBetween($startDate = '-7 days', $endDate = 'now', $timezone = null);
          $trip->airline = $faker->company;
          $trip->hotel = $faker->company;
          $trip->room_type = $faker->word;
          $trip->people = $faker->randomDigitNotNull;
          $trip->save();
        }
    }
}
