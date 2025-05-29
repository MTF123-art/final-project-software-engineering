<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DestinasiSeeder extends Seeder
{
    public function run()
    {
        $destinasi = [
            [
                'user_id' => 7,
                'nama_destinasi' => 'Keraton Sumenep',
                'highlight_photo' => 'keraton_sumenep.jpg',
                'kategori_id' => 1,
                'deskripsi' => 'Keraton Sumenep adalah peninggalan sejarah Kesultanan Sumenep yang berdiri sejak abad ke-18. Bangunannya memadukan gaya arsitektur Jawa, Eropa, dan Tionghoa, lengkap dengan museum yang menampilkan koleksi pusaka kerajaan, gamelan, dan foto-foto raja terdahulu.',
                'lokasi' => 'Jl. Dr. Soetomo No.6, Sumenep',
            ],
            [
                'user_id' => 8,
                'nama_destinasi' => 'Bukit Kalbut',
                'highlight_photo' => 'bukit_kalbut.jpg',
                'kategori_id' => 2,
                'deskripsi' => 'Bukit Kalbut menyajikan pemandangan alam Sumenep dari ketinggian, terutama saat matahari terbit. Lokasi ini cocok untuk para pencinta fotografi dan pendaki pemula. Suasananya sejuk dan asri, dengan akses jalan yang cukup mudah dari kota.',
                'lokasi' => 'Kalbut, Kecamatan Ganding, Sumenep',
            ],
            [
                'user_id' => 9,
                'nama_destinasi' => 'Pantai Lombang',
                'highlight_photo' => 'pantai_lombang.jpg',
                'kategori_id' => 3,
                'deskripsi' => 'Pantai Lombang dikenal dengan hamparan pasir putih yang luas dan keberadaan pohon cemara udang yang langka. Ombaknya tenang dan aman untuk berenang. Fasilitas umum tersedia, dan banyak pedagang makanan khas Madura di sekitar pantai.',
                'lokasi' => 'Batuputih, Sumenep',
            ],
            [
                'user_id' => 10,
                'nama_destinasi' => 'Masjid Agung Sumenep',
                'highlight_photo' => 'masjid_agung.jpg',
                'kategori_id' => 4,
                'deskripsi' => 'Masjid Agung Sumenep dibangun pada tahun 1779 oleh arsitek keturunan Tionghoa. Masjid ini menjadi simbol toleransi dan integrasi budaya, dengan gerbang megah dan halaman luas. Selain sebagai tempat ibadah, masjid juga menjadi destinasi religi.',
                'lokasi' => 'Jl. Trunojoyo No.10, Sumenep',
            ],
            [
                'user_id' => 11,
                'nama_destinasi' => 'Pasar Anom',
                'highlight_photo' => 'pasar_anom.jpg',
                'kategori_id' => 5,
                'deskripsi' => 'Pasar Anom adalah pasar tradisional terbesar di pusat kota Sumenep. Di sini pengunjung bisa menemukan beragam produk lokal, mulai dari bumbu dapur, pakaian, kerajinan tangan, hingga kuliner khas Madura. Suasana pasar sangat hidup di pagi hari.',
                'lokasi' => 'Pusat Kota Sumenep',
            ],
            [
                'user_id' => 12,
                'nama_destinasi' => 'Pulau Gili Iyang',
                'highlight_photo' => 'gili_iyang.jpg',
                'kategori_id' => 3,
                'deskripsi' => 'Gili Iyang terkenal sebagai pulau dengan kadar oksigen tertinggi kedua di dunia. Destinasi ini cocok untuk wisatawan yang ingin mencari ketenangan, menikmati udara bersih, dan berinteraksi langsung dengan masyarakat pesisir yang ramah.',
                'lokasi' => 'Gili Iyang, Dungkek, Sumenep',
            ],
            [
                'user_id' => 13,
                'nama_destinasi' => 'Museum Keraton Sumenep',
                'highlight_photo' => 'museum_keraton.jpg',
                'kategori_id' => 1,
                'deskripsi' => 'Museum ini berada di dalam kompleks Keraton Sumenep dan menyimpan ratusan koleksi bersejarah, mulai dari peralatan kerajaan, keris, batik kuno, hingga dokumen-dokumen penting Kesultanan Sumenep. Pengunjung juga bisa mengikuti tur sejarah yang informatif.',
                'lokasi' => 'Kompleks Keraton Sumenep',
            ],
            [
                'user_id' => 14,
                'nama_destinasi' => 'Air Terjun Durbugan',
                'highlight_photo' => 'durbugan.jpg',
                'kategori_id' => 2,
                'deskripsi' => 'Air Terjun Durbugan menawarkan suasana alami yang menenangkan, tersembunyi di antara hutan di Kecamatan Lenteng. Air jernih yang mengalir dari tebing batu menciptakan kolam alami yang cocok untuk bermain air atau sekadar bersantai.',
                'lokasi' => 'Kecamatan Lenteng, Sumenep',
            ],
            [
                'user_id' => 15,
                'nama_destinasi' => 'Pantai Slopeng',
                'highlight_photo' => 'pantai_slopeng.jpg',
                'kategori_id' => 3,
                'deskripsi' => 'Pantai Slopeng memiliki garis pantai panjang dan landai dengan pasir putih kecoklatan. Tempat ini ramai dikunjungi pada akhir pekan. Aktivitas yang populer di sini termasuk berkuda, bermain layang-layang, dan menikmati kelapa muda segar.',
                'lokasi' => 'Dasuk, Sumenep',
            ],
            [
                'user_id' => 16,
                'nama_destinasi' => 'Makam Sultan Abdurrahman',
                'highlight_photo' => 'makam_abdurrahman.jpg',
                'kategori_id' => 4,
                'deskripsi' => 'Makam ini merupakan tempat peristirahatan terakhir Sultan Abdurrahman, salah satu raja berpengaruh di Sumenep. Situs ini banyak dikunjungi oleh peziarah dan memiliki nilai spiritual serta historis yang tinggi di masyarakat lokal.',
                'lokasi' => 'Asta Tinggi, Kebunagung, Sumenep',
            ],
            [
                'user_id' => 17,
                'nama_destinasi' => 'Sentra Batik Sumenep',
                'highlight_photo' => 'batik_sumenep.jpg',
                'kategori_id' => 1,
                'deskripsi' => 'Sentra Batik Sumenep merupakan pusat pembuatan batik tulis khas Madura dengan motif yang mencerminkan budaya lokal. Wisatawan bisa melihat langsung proses pembuatan batik dan membeli produk batik asli dari pengrajin setempat.',
                'lokasi' => 'Pekandangan Barat, Sumenep',
            ],
            [
                'user_id' => 18,
                'nama_destinasi' => 'Pantai Badur',
                'highlight_photo' => 'pantai_badur.jpg',
                'kategori_id' => 3,
                'deskripsi' => 'Pantai Badur terletak di kawasan yang masih alami dan belum banyak dijamah wisatawan. Keindahan batu karang dan air laut yang jernih menjadikannya destinasi favorit untuk camping dan menikmati senja.',
                'lokasi' => 'Batuputih, Sumenep',
            ],
            [
                'user_id' => 19,
                'nama_destinasi' => 'Pulau Gili Labak',
                'highlight_photo' => 'gili_labak.jpg',
                'kategori_id' => 3,
                'deskripsi' => 'Gili Labak adalah pulau kecil dengan pasir putih bersih dan air laut sebening kaca. Dikenal sebagai spot snorkeling terbaik di Sumenep, pulau ini cocok untuk wisatawan yang menyukai aktivitas laut dan fotografi bawah air.',
                'lokasi' => 'Talango, Sumenep',
            ],
            [
                'user_id' => 20,
                'nama_destinasi' => 'Kolam Renang Wahana Tirta',
                'highlight_photo' => 'wahana_tirta.jpg',
                'kategori_id' => 2,
                'deskripsi' => 'Wahana Tirta adalah tempat wisata air modern yang menyediakan kolam renang dewasa dan anak-anak, lengkap dengan permainan air. Tempat ini ideal untuk liburan keluarga dengan fasilitas pendukung seperti kantin dan mushola.',
                'lokasi' => 'Batuputih, Sumenep',
            ],
            [
                'user_id' => 21,
                'nama_destinasi' => 'Pasar Bangkal',
                'highlight_photo' => 'pasar_bangkal.jpg',
                'kategori_id' => 5,
                'deskripsi' => 'Pasar Bangkal dikenal sebagai pasar mingguan yang unik karena hanya buka pada hari tertentu. Menjual hasil pertanian, ternak, dan produk lokal lainnya, pasar ini juga menjadi tempat interaksi sosial yang penting bagi warga desa.',
                'lokasi' => 'Bangkal, Sumenep',
            ],
        ];

        foreach ($destinasi as $data) {
            DB::table('destinasis')->insert([
                'user_id' => $data['user_id'],
                'highlight_photo' => $data['highlight_photo'],
                'nama_destinasi' => $data['nama_destinasi'],
                'kategori_id' => $data['kategori_id'],
                'deskripsi' => $data['deskripsi'],
                'lokasi' => $data['lokasi'],
                'slug' => Str::slug($data['nama_destinasi']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
