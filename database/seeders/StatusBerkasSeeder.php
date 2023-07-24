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
            ['status' => 'Dalam Proses', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Selesai', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Review', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Revisi', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Ulang', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang 2', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang 3', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang 4', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang 5', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang 6', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang 7', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang 8', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang 9', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Penilaian Akhir Ulang 10', 'created_at' => now(), 'updated_at' => now()],

        ];

        // Insert the data into the status_berkas table
        DB::table('status_berkas')->insert($data);
    }
}
