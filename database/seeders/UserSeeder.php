<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin
        DB::table('users')->insert([
            'name' => 'Admin Utama',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'image' => 'admin.jpg',
        ]);

        // 5 User Biasa
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->insert([
                'name' => "User {$i}",
                'email' => "user{$i}@gmail.com",
                'password' => Hash::make('12345678'),
                'role' => 'user',
                'image' => "user{$i}.jpg",
            ]);
        }

        // 15 Pengelola (untuk masing-masing destinasi)
        for ($i = 1; $i <= 15; $i++) {
            DB::table('users')->insert([
                'name' => "Pengelola {$i}",
                'email' => "pengelola{$i}@gmail.com",
                'password' => Hash::make('12345678'),
                'role' => 'pengelola',
                'image' => "pengelola{$i}.jpg",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
