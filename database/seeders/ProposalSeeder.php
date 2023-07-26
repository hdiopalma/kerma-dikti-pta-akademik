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
            [
                'judul' => 'Peningkatan Kerjasama Pendidikan dan Penelitian Antara Institut Teknologi Bandung dan National University of Singapore',
                'tanggal_pengajuan' => '2023-08-10',
                'status_pengisian' => 'Draft',
                'pt_mitra_negeri' => 'National University of Singapore',
                'prodi_pt_mitra_negeri' => 'Department of Computer Science',
                'prodi_pt_dalam_negeri' => 'Faculty of Mathematics and Natural Sciences',
                'grant_by' => 'Singapore Ministry of Education',
                'time_grant' => '2023-10-15 14:00:00',
                'komentar' => 'Proposal ini bertujuan untuk mengembangkan kerjasama dalam bidang pendidikan dan penelitian antara ITB dan NUS, serta meningkatkan pertukaran ilmu pengetahuan dan kultur antara kedua universitas.',
                'created_at' => now(),
                'updated_at' => now(),
                'id_bab4' => null, // Assuming bab4 table has an appropriate ID
                'id_jenis_kerjasama' => 1, // Assuming jenis_kerjasama table has an appropriate ID
                'id_universitas' => 1, // Assuming universitas table has an appropriate ID
                'id_bab1' => null, // Assuming bab1 table has an appropriate ID
                'id_bab2' => null, // Assuming bab2 table has an appropriate ID
                'id_bab3' => null, // Assuming bab3 table has an appropriate ID
                'id_reviewer1' => null, // Assuming reviewer table has an appropriate ID
                'id_reviewer2' => null, // Assuming reviewer table has an appropriate ID
                'id_status_berkas' => 4, // Assuming status_berkas table has an appropriate ID
            ],
            [
                'judul' => 'Joint Research Collaboration on Sustainable Energy Solutions between Institut Teknologi Bandung and National University of Singapore',
                'tanggal_pengajuan' => '2023-09-20',
                'status_pengisian' => 'Final',
                'pt_mitra_negeri' => 'Institut Teknologi Bandung',
                'prodi_pt_mitra_negeri' => 'Program Studi Teknik Kimia',
                'prodi_pt_dalam_negeri' => 'Fakultas Teknologi Industri',
                'grant_by' => 'National Research Foundation Singapore',
                'time_grant' => '2024-01-05 09:30:00',
                'komentar' => 'This proposal aims to establish a joint research collaboration on sustainable energy solutions between ITB and NUS, focusing on renewable energy and clean technologies for a more sustainable future.',
                'created_at' => now(),
                'updated_at' => now(),
                'id_bab4' => null, // Assuming bab4 table has an appropriate ID
                'id_jenis_kerjasama' => 3, // Assuming jenis_kerjasama table has an appropriate ID
                'id_universitas' => 2, // Assuming universitas table has an appropriate ID
                'id_bab1' => null, // Assuming bab1 table has an appropriate ID
                'id_bab2' => null, // Assuming bab2 table has an appropriate ID
                'id_bab3' => null, // Assuming bab3 table has an appropriate ID
                'id_reviewer1' => null, // Assuming reviewer table has an appropriate ID
                'id_reviewer2' => null, // Assuming reviewer table has an appropriate ID
                'id_status_berkas' => 4, // Assuming status_berkas table has an appropriate ID
            ],
            [
                'judul' => 'Kerjasama Riset lan Inovasi Teknologi Kanggé Institut Teknologi Bandung lan National University of Singapore',
                'tanggal_pengajuan' => '2023-07-22',
                'status_pengisian' => 'Final',
                'pt_mitra_negeri' => 'Institut Teknologi Bandung',
                'prodi_pt_mitra_negeri' => 'Program Studi Teknik Elektro',
                'prodi_pt_dalam_negeri' => 'Fakultas Teknik',
                'grant_by' => 'Singapore Innovation Fund',
                'time_grant' => '2023-09-05 10:30:00',
                'komentar' => 'Proposal iki nduwé tujuan kanggo nggumunaké kerjasama ing bidang riset lan inovasi teknologi antara ITB lan NUS kanggo nggawe teknologi sing inovatif lan kanggo ngetokaké masyarakat.',
                'created_at' => now(),
                'updated_at' => now(),
                'id_bab4' => null, // Assuming bab4 table has an appropriate ID
                'id_jenis_kerjasama' => 2, // Assuming jenis_kerjasama table has an appropriate ID
                'id_universitas' => 2, // Assuming universitas table has an appropriate ID
                'id_bab1' => null, // Assuming bab1 table has an appropriate ID
                'id_bab2' => null, // Assuming bab2 table has an appropriate ID
                'id_bab3' => null, // Assuming bab3 table has an appropriate ID
                'id_reviewer1' => null, // Assuming reviewer table has an appropriate ID
                'id_reviewer2' => null, // Assuming reviewer table has an appropriate ID
                'id_status_berkas' => 4, // Assuming status_berkas table has an appropriate ID
            ],
        ];

        // Insert the data into the proposal table
        DB::table('proposal')->insert($data);
    }
}
