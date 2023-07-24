<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UniversitasSeeder::class,
            UserLevelSeeder::class,
            ReviewerSeeder::class,
            DaftarNegaraSeeder::class,
            UsersSeeder::class,
            StatusAkreditasiSeeder::class,
            JenisKerjasamaSeeder::class,
            StatusBerkasSeeder::class,
            Bab1Seeder::class,
            Bab2Seeder::class,
            Bab3Seeder::class,
            Bab4Seeder::class,
            ProposalSeeder::class,
            ReviewerBab1Seeder::class,
            ReviewerBab2Seeder::class,
            ReviewerBab3Seeder::class,
            ReviewerBab4Seeder::class,
            ProdiSeeder::class,
        ]);
    }
}
