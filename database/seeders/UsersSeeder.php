<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed test admin 1
        $user = User::where('email', '=','admin@admin.com')->first();
        if($user === null){
            $user = User::create([
                'nama' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('@Admin123'),
                'status' => '1', // Active
                'id_universitas' => 1, //'Universitas Gadjah Mada'
                'id_reviewer' => null,
                'id_level' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seed test universitas 1
        $user = User::where('email', '=','univ@univ.com')->first();
        if($user === null){
            $user = User::create([
                'nama' => 'Universitas 1',
                'email' => 'univ@univ.com',
                'password' => Hash::make('@Univ123'),
                'status' => '1', // Active
                'id_universitas' => 1, //'Universitas Gadjah Mada'
                'id_reviewer' => null,
                'id_level' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seed test reviewer 1
        $user = User::where('email', '=','reviewer@reviewer.com')->first();
        if($user === null){
            $user = User::create([
                'nama' => 'Reviewer 1',
                'email' => 'reviewer@reviewer.com',
                'password' => Hash::make('@Reviewer123'),
                'status' => '1', // Active
                'id_universitas' => null,
                'id_reviewer' => 1, //'Budi Santoso'
                'id_level' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seed test reviewer 2
        $user = User::where('email', '=','reviewer2@reviewer.com')->first();
        if($user === null){
            $user = User::create([
                'nama' => 'Reviewer 2',
                'email' => 'reviewer2@reviewer.com',
                'password' => Hash::make('@Reviewer123'),
                'status' => '1', // Active
                'id_universitas' => null,
                'id_reviewer' => 2, //'Budi Santoso'
                'id_level' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
