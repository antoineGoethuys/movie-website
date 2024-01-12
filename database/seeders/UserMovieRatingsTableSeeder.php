<?php
namespace Database\Seeders;
// database/seeders/UserMovieRatingsTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserMovieRatingsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('user_movie_ratings')->insert([
                'user_id' => $faker->numberBetween(1, 10),
                'movie_id' => $faker->numberBetween(1, 10),
                'rating' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
