<?php

use Illuminate\Database\Seeder;
Use App\Camper;

class CampersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Camper::truncate();

          $faker = \Faker\Factory::create();

          for ($i = 0; $i < 50; $i++) {
              Camper::create([
                  'name' => $faker->firstNameMale,
                  'tentNumber' => $faker->numberBetween($min = 1, $max = 6),
                  'startingBalance' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                  'currentBalance' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                  'uuid' => $faker->uuid,
              ]);
          }
    }
}
