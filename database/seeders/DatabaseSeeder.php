<?php
namespace Database\Seeders;
// database/seeders/DatabaseSeeder.php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
            MoviesTableSeeder::class,
            UserMovieRatingsTableSeeder::class,
            MovieCommentsTableSeeder::class,
        ]);
    }
}
