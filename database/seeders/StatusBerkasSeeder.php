<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusBerkasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the status_berkas table
        $data = [
            ['status' => 'Menunggu Verifikasi', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Ditolak', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Diterima', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Revisi', 'created_at' => now(), 'updated_at' => now()],

        ];

        // Insert the data into the status_berkas table
        DB::table('status_berkas')->insert($data);
    }
}
