<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusAkreditasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the status_akreditasi_pt table
        $data = [
            ['status' => 'Terakreditasi A', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Terakreditasi B', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Terakreditasi C', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Tidak Terakreditasi', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert the data into the status_akreditasi_pt table
        DB::table('status_akreditasi_pt')->insert($data);
    }
}
