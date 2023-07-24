<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaftarNegaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the daftar_negara table
        $data = [
            [
                'iso' => 'ID',
                'name' => 'Indonesia',
                'nicename' => 'Indonesia',
                'iso3' => 'IDN',
                'numcode' => 360,
                'phonecode' => 62,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'iso' => 'US',
                'name' => 'United States',
                'nicename' => 'USA',
                'iso3' => 'USA',
                'numcode' => 840,
                'phonecode' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'iso' => 'CA',
                'name' => 'Canada',
                'nicename' => 'Canada',
                'iso3' => 'CAN',
                'numcode' => 124,
                'phonecode' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more country data as needed
        ];

        // Insert the data into the daftar_negara table
        DB::table('daftar_negara')->insert($data);
    }
}
