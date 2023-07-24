<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sample data for universitas table
        $data = [
            [
                'kode_universitas' => 'U001',
                'id_universitas' => 'IDU001',
                'nama_universitas' => 'Universitas Gadjah Mada',
                'telepon' => '0274-1234567',
                'nama_pembina' => 'Prof. Dr. John Doe',
                'bentuk_pendidikan' => 'Universitas',
                'website' => 'https://www.ugm.ac.id',
                'alamat' => 'Jl. Teknika Utara, Sekip Utara, Yogyakarta',
                'kota_kabupaten' => 'Yogyakarta',
                'propinsi' => 'DI Yogyakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_universitas' => 'U002',
                'id_universitas' => 'IDU002',
                'nama_universitas' => 'Institut Teknologi Bandung',
                'telepon' => '022-7654321',
                'nama_pembina' => 'Prof. Dr. Jane Smith',
                'bentuk_pendidikan' => 'Universitas',
                'website' => 'https://www.itb.ac.id',
                'alamat' => 'Jl. Ganesha No. 10, Bandung',
                'kota_kabupaten' => 'Bandung',
                'propinsi' => 'Jawa Barat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_universitas' => 'U003',
                'id_universitas' => 'IDU003',
                'nama_universitas' => 'Universitas Airlangga',
                'telepon' => '031-9876543',
                'nama_pembina' => 'Prof. Dr. Michael Johnson',
                'bentuk_pendidikan' => 'Universitas',
                'website' => 'https://www.unair.ac.id',
                'alamat' => 'Kampus C Mulyorejo, Surabaya',
                'kota_kabupaten' => 'Surabaya',
                'propinsi' => 'Jawa Timur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the data into the universitas table
        DB::table('universitas')->insert($data);
    }
}
