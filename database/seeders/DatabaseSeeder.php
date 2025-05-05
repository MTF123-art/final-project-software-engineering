<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        for ($a = 1; $a <= 3; $a++) {
            User::factory()->create([
                'name' => 'admin' . ($a+ 9),
                'email' => 'admin' . ($a+ 9) . '@gmail.com',
                'password' => Hash::make(12345678),
                'is_active' => true,
                'role' => 'admin',
            ]);
        }
        for ($a = 1; $a <= 3; $a++) {
            User::factory()->create([
                'name' => 'user' . ($a+ 9),
                'email' => 'user' . ($a+ 9). '@gmail.com',
                'password' => Hash::make(12345678),
                'is_active' => true,
                'role' => 'user',
            ]);
        }
        for ($a = 1; $a <= 3; $a++) {
            User::factory()->create([
                'name' => 'pengelola' . $a + 9,
                'email' => 'pengelola' . ($a + 9). '@gmail.com',
                'password' => Hash::make(12345678),
                'is_active' => true,
                'role' => 'pengelola',
            ]);
        }


    }
}
