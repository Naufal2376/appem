<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengaduan;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class pengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat instance Faker
        $faker = FakerFactory::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            // Generate nama file palsu
            $foto_baru = date('ymdhis') . ".png";

            // Jalur lengkap ke direktori penyimpanan publik
            $public_path = public_path('asset/foto');

            // Pastikan direktori penyimpanan publik sudah ada
            File::makeDirectory($public_path, $mode = 0777, true, true);

            // Simpan file palsu ke direktori penyimpanan publik
            $foto_path = $faker->image($public_path, 400, 300, null, false);

            // Simpan data palsu dalam model Pengaduan
            Pengaduan::create([
                'tgl_pengaduan' => $faker->date,
                'nik' => '1607270019992351',
                'isi_pengaduan' => $faker->sentence,
                'foto' => $foto_path,
                'status' => '0'
            ]);
        }
    }
}