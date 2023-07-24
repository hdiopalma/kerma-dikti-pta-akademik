<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the reviewer table
        $data = [
            [
                'nama_reviewer' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'alamat' => 'Jl. Merdeka No. 123, Jakarta',
                'institusi' => 'Universitas Indonesia',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_reviewer' => 'Anita Dewi',
                'email' => 'anita@example.com',
                'alamat' => 'Jl. Ahmad Yani No. 45, Surabaya',
                'institusi' => 'Institut Teknologi Surabaya',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_reviewer' => 'Rahmat Hidayat',
                'email' => 'rahmat@example.com',
                'alamat' => 'Jl. Sudirman No. 10, Bandung',
                'institusi' => 'Institut Teknologi Bandung',
                'status' => 'Inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the data into the reviewer table
        DB::table('reviewer')->insert($data);
    }
}
