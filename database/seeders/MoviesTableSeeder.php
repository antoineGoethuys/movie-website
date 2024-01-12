<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MoviesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('movies')->insert([
                'title' => $faker->sentence,
                'description' => $faker->paragraph(),
                'year' => $faker->year(),
                'duration' => $faker->numberBetween(60, 180),
                'poster' => $faker->imageUrl(200, 300, 'cats'),
            ]);
        }
    }
}
