<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $kategori = ['Sejarah & Budaya', 'Alam & Wisata Alam', 'Pulau & Pantai', 'Religi', 'Pasar & Kuliner'];

        foreach ($kategori as $nama) {
            DB::table('kategoris')->insert([
                'nama_kategori' => $nama,
                'slug' => Str::slug($nama),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
