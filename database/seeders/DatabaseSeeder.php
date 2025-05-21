<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make(12345678),
                'is_active' => true,
                'role' => 'admin',
            ]);
            for($i = 1; $i <=5; $i ++){
                User::factory()->create([
                    'name' => 'user'.$i,
                    'email' => 'user'.$i.'@gmail.com',
                    'password' => Hash::make(12345678),
                    'is_active' => true,
                    'role' => 'user',
                ]);
            }
            for($i = 1; $i <=5; $i ++){
                User::factory()->create([
                    'name' => 'pengelola'.$i,
                    'email' => 'pengelola'.$i.'@gmail.com',
                    'password' => Hash::make(12345678),
                    'is_active' => true,
                    'role' => 'pengelola',
                ]);
            }

            for($a = 1; $a <= 5; $a++){
                Kategori::create([
                    'nama_kategori' => 'kategori'.$a,
                    'slug' => Str::slug('kategori '.$a),
                ]);
            }
    }
}
