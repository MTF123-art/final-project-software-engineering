<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    public function run()
    {
        for ($destinasiId = 1; $destinasiId <= 15; $destinasiId++) {
            for ($i = 1; $i <= 8; $i++) {
                DB::table('galeris')->insert([
                    'destinasi_id' => $destinasiId,
                    'url_gambar' => "galeri_destinasi{$destinasiId}_foto{$i}.jpg",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
