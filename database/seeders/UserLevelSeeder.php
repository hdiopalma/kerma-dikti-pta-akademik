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
                ['level' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
                ['level' => 'User', 'created_at' => now(), 'updated_at' => now()],
                ['level' => 'Reviewer', 'created_at' => now(), 'updated_at' => now()],
                ['level' => '4', 'created_at' => now(), 'updated_at' => now()],
                ['level' => '5', 'created_at' => now(), 'updated_at' => now()],
            ];

            DB::table('level_user')->insert($data);
    }
}
