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
            ['status' => '', 'created_at' => now(), 'updated_at' => now()],
            ['status' => '', 'created_at' => now(), 'updated_at' => now()],
            ['status' => '', 'created_at' => now(), 'updated_at' => now()],
            ['status' => '', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Pengisian', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Menunggu Verifikasi', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Verifikasi', 'created_at' => now(), 'updated_at' => now()], 
            ['status' => 'Diverifikasi, Diverifikasi, lanjut proses review', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Tidak Lolos Verifikasi', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Review 1', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Review 2', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Revisi', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Revisi Reviewer 1', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Revisi Reviewer 2', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Ditolak', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Ditolak Reviewer 1', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Ditolak Reviewer 2', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Disetujui', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Dalam Proses Pengarsipan', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Selesai', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert the data into the status_berkas table
        DB::table('status_berkas')->insert($data);
    }
}
