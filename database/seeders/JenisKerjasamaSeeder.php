<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKerjasamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the jenis_kerjasama table
        $data = [
            ['jenis_kerjasama' => 'Penelitian Bersama', 'created_at' => now(), 'updated_at' => now()],
            ['jenis_kerjasama' => 'Pengembangan Kurikulum', 'created_at' => now(), 'updated_at' => now()],
            ['jenis_kerjasama' => 'Pertukaran Mahasiswa', 'created_at' => now(), 'updated_at' => now()],
            ['jenis_kerjasama' => 'Pertukaran Dosen', 'created_at' => now(), 'updated_at' => now()],
            ['jenis_kerjasama' => 'Magang Mahasiswa', 'created_at' => now(), 'updated_at' => now()],
            ['jenis_kerjasama' => 'Pelatihan dan Workshop', 'created_at' => now(), 'updated_at' => now()],
            ['jenis_kerjasama' => 'Penyuluhan dan Seminar', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert the data into the jenis_kerjasama table
        DB::table('jenis_kerjasama')->insert($data);
    }
}
