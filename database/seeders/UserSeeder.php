<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Junet',
                'email' => 'Junet@Tes.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456678'),
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Agus Muhaidin',
                'email' => 'Agus@Tes.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345'),
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Raihan Tri Darma',
                'email' => 'Raihan@Tes.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'remember_token' => Str::random(60),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
