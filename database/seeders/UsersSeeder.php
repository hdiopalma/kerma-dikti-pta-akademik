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
                'id_verifikator' => null,
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
                'id_verifikator' => null,
                'id_level' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seed test universitas 2
        $user = User::where('email', '=','univ2@univ.com')->first();
        if($user === null){
            $user = User::create([
                'nama' => 'Universitas 2',
                'email' => 'univ2@univ.com',
                'password' => Hash::make('@Univ123'),
                'status' => '1', // Active
                'id_universitas' => 1, //'Universitas Gadjah Mada'
                'id_reviewer' => null,
                'id_verifikator' => null,
                'id_level' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Admin universitas 1
        $user = User::where('email', '=','admin@univ.com')->first();
        if($user === null){
            $user = User::create([
                'nama' => 'Admin Universitas 1',
                'email' => 'admin@univ.com',
                'password' => Hash::make('@Admin123'),
                'status' => '1', // Active
                'id_universitas' => null,
                'id_reviewer' => null,
                'id_verifikator' => null,
                'id_level' => 5,
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
                'id_reviewer' => 1, 
                'id_verifikator' => null,
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
                'id_reviewer' => 2, 
                'id_verifikator' => null,
                'id_level' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seed test Verifikator 1
        $user = User::where('email', '=','verifikator@verifikator.com')->first();
        if($user === null){
            $user = User::create([
                'nama' => 'Verifikator 1',
                'email' => 'verifikator@verifikator.com',
                'password' => Hash::make('@Verifikator123'),
                'status' => '1', // Active
                'id_universitas' => null,
                'id_reviewer' => null,
                'id_verifikator' => 1,
                'id_level' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Seed test Verifikator 2
        $user = User::where('email', '=','verifikator2@verifikator.com')->first();
        if($user === null){
            $user = User::create([
                'nama' => 'Verifikator 1',
                'email' => 'verifikator2@verifikator.com',
                'password' => Hash::make('@Verifikator123'),
                'status' => '1', // Active
                'id_universitas' => null,
                'id_reviewer' => null,
                'id_verifikator' => 2,
                'id_level' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
