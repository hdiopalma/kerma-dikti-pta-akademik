<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
                ['level' => '1', 'created_at' => now(), 'updated_at' => now()],
                ['level' => '2', 'created_at' => now(), 'updated_at' => now()],
                ['level' => '3', 'created_at' => now(), 'updated_at' => now()],
                ['level' => '4', 'created_at' => now(), 'updated_at' => now()]
            ];

            DB::table('level_user')->insert($data);
    }
}
