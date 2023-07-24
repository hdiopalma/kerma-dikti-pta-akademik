<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the proposal table
        $data = [
            [
                'judul' => 'Studi Kolaboratif dalam Bidang Ilmu Komputer antara Universitas Indonesia dan University of California',
                'tanggal_pengajuan' => '2023-07-20',
                'status_pengisian' => 'Draft',
                'pt_mitra_negeri' => 'University of California',
                'prodi_pt_mitra_negeri' => 'Department of Computer Science',
                'prodi_pt_dalam_negeri' => 'Fakultas Ilmu Komputer',
                'grant_by' => 'California Research Foundation',
                'time_grant' => '2023-08-15 09:00:00',
                'komentar' => 'Proposal ini mengusulkan program studi kolaboratif dalam bidang ilmu komputer untuk memperkuat riset dan pertukaran ilmu pengetahuan antara kedua universitas.',
                'created_at' => now(),
                'updated_at' => now(),
                'id_bab4' => 1, // Assuming bab4 table has an appropriate ID
                'id_jenis_kerjasama' => 1, // Assuming jenis_kerjasama table has an appropriate ID
                'id_universitas' => 1, // Assuming universitas table has an appropriate ID
                'id_bab1' => 1, // Assuming bab1 table has an appropriate ID
                'id_bab2' => 1, // Assuming bab2 table has an appropriate ID
                'id_bab3' => 1, // Assuming bab3 table has an appropriate ID
                'id_reviewer1' => 1, // Assuming reviewer table has an appropriate ID
                'id_reviewer2' => 2, // Assuming reviewer table has an appropriate ID
                'id_status_berkas' => 1, // Assuming status_berkas table has an appropriate ID
            ],
            [
                'judul' => 'Peningkatan Kerjasama Riset dan Inovasi Teknologi Antara Institut Teknologi Bandung dan National University of Singapore',
                'tanggal_pengajuan' => '2023-07-22',
                'status_pengisian' => 'Final',
                'pt_mitra_negeri' => 'Institut Teknologi Bandung',
                'prodi_pt_mitra_negeri' => 'Program Studi Teknik Elektro',
                'prodi_pt_dalam_negeri' => 'Fakultas Teknik',
                'grant_by' => 'Singapore Innovation Fund',
                'time_grant' => '2023-09-05 10:30:00',
                'komentar' => 'Proposal ini bertujuan untuk meningkatkan kolaborasi dalam riset dan inovasi teknologi antara ITB dan NUS untuk menciptakan teknologi yang inovatif dan berdampak positif pada masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
                'id_bab4' => 1, // Assuming bab4 table has an appropriate ID
                'id_jenis_kerjasama' => 2, // Assuming jenis_kerjasama table has an appropriate ID
                'id_universitas' => 2, // Assuming universitas table has an appropriate ID
                'id_bab1' => 2, // Assuming bab1 table has an appropriate ID
                'id_bab2' => 2, // Assuming bab2 table has an appropriate ID
                'id_bab3' => 2, // Assuming bab3 table has an appropriate ID
                'id_reviewer1' => 2, // Assuming reviewer table has an appropriate ID
                'id_reviewer2' => 3, // Assuming reviewer table has an appropriate ID
                'id_status_berkas' => 2, // Assuming status_berkas table has an appropriate ID
            ],
        ];

        // Insert the data into the proposal table
        DB::table('proposal')->insert($data);
    }
}
