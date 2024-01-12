<?php
namespace Database\Seeders;
// database/seeders/ProfilesTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 2) as $index) {
            DB::table('profiles')->insert([
                'user_id' => $index,
                'birthday' => $faker->date('Y-m-d H:i:s.u'),
                'avatar' => $faker->imageUrl(200, 200, 'cats'), // Example: Avatar URL with width and height
                'about_me' => $faker->paragraph,
            ]);
        }
    }
}

