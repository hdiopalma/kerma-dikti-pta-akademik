<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the prodi table
        $data = [
            [
                'kode_prodi' => 'IFK',
                'nama_prodi' => 'Fakultas Ilmu Komputer',
                'created_at' => now(),
                'updated_at' => now(),
                'id_universitas' => 1,
            ],
            [
                'kode_prodi' => 'FT',
                'nama_prodi' => 'Fakultas Teknik',
                'created_at' => now(),
                'updated_at' => now(),
                'id_universitas' => 2,
            ],
            [
                'kode_prodi' => 'BI',
                'nama_prodi' => 'Fakultas Bahasa dan Sastra',
                'created_at' => now(),
                'updated_at' => now(),
                'id_universitas' => 1,
            ],
            [
                'kode_prodi' => 'FE',
                'nama_prodi' => 'Fakultas Ekonomi',
                'created_at' => now(),
                'updated_at' => now(),
                'id_universitas' => 3,
            ],
        ];

        // Insert the data into the prodi table
        DB::table('prodi')->insert($data);
    }
}
