<?php
namespace Database\Seeders;
// database/seeders/MovieCommentsTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MovieCommentsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('movie_comments')->insert([
                'user_id' => $faker->numberBetween(1, 10),
                'movie_id' => $faker->numberBetween(1, 10),
                'comment' => $faker->paragraph,
            ]);
        }
    }
}
