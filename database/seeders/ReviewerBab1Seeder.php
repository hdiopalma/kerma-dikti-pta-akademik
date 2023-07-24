<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewerBab1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the reviewer_bab1 table
        $data = [
            [
                'nama_pt' => 'Sesuai',
                'alamat_pt' => 'Kurang lengkap, mohon diperjelas',
                'ijin_operasional_pt' => 'Sesuai',
                'scan_ijin_operasional_pt' => 'Sesuai',
                'status_akreditasi_institusi' => 'Sesuai',
                'status_akreditasi_institusi_mitra' => 'Sesuai',
                'akreditasi_prodi' => 'Sesuai',
                'akreditasi_prodi_mitra' => 'Sesuai',
                'negara_mitra' => 'Sesuai',
                'scan_status_akreditasi_institusi' => 'Sesuai',
                'nama_pt_mitra' => 'Sesuai',
                'alamat_pt_mitra' => 'Sesuai',
                'ijin_operasional_pt_mitra' => 'Sesuai',
                'scan_ijin_operasional_pt_mitra' => 'Sesuai',
                'scan_status_akreditasi_institusi_mitra' => 'Sesuai',
                'peringkat_internasional_mitra' => 'Sesuai',
                'nama_prodi' => 'Sesuai',
                'nama_prodi_mitra' => 'Sesuai',
                'scan_sk_akreditasi_prodi' => 'Sesuai',
                'scan_sk_akreditasi_prodi_mitra' => 'Sesuai',
                'scan_ijin_operasional_prodi' => 'Sesuai',
                'scan_ijin_operasional_prodi_mitra' => 'Sesuai',
                'proposal_usulan_kerjsama' => 'Sesuai',
                'status_proposal' => 'Disetujui',
                'komentar_bab1' => 'Semua data sesuai dengan persyaratan dan standar yang ditetapkan.',
                'created_at' => now(),
                'updated_at' => now(),
                'id_proposal' => 1, // Assuming proposal table has an appropriate ID
                'id_reviewer' => 1, // Assuming reviewer table has an appropriate ID
            ],
            // Add more sample data as needed
        ];

        // Insert the data into the reviewer_bab1 table
        DB::table('reviewer_bab1')->insert($data);
    }
}
