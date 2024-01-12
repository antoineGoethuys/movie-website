<?php
namespace Database\Seeders;
// database/seeders/UsersTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => true,
        ]);
        DB::table('users')->insert([
            'username' => 'user',
            'email' => 'user@ehb.be',
            'password' => Hash::make('Password!321'),
            'is_admin' => false,
        ]);

        // Add more users as needed
    }
}

