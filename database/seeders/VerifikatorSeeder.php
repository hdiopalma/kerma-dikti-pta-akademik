<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VerifikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama_verifikator' => 'Ciel',
                'email' => 'dd@example.com',
                'alamat' => 'Jl. Merdeka No. 123, Jakarta',
                'institusi' => 'Universitas Indonesia',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_verifikator' => 'Saigonohanabira',
                'email' => 'ss@example.com',
                'alamat' => 'Jl. Ahmad Yani No. 45, Surabaya',
                'institusi' => 'Institut Teknologi Surabaya',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_verifikator' => 'Golden record',
                'email' => 'aa@example.com',
                'alamat' => 'Jl. Sudirman No. 10, Bandung',
                'institusi' => 'Institut Teknologi Bandung',
                'status' => 'Inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('verifikator')->insert($data);
    }
}
