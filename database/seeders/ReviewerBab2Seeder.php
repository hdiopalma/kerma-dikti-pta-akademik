<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewerBab2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the reviewer_bab2 table
        $data = [
            [
                'ringkasan_mou' => 'Mohon perjelas jenis kerjasama, selebihnya sesuai',
                'file_mou' => 'path/to/file_mou.pdf',
                'no_moa' => '2023/MOU/ITB-NUS',
                'deskripsi_singkat_moa' => 'Sesuai dengan tujuan kerjasama dan ruang lingkupnya.',
                'tanggal_dimulai_moa' => '2023-09-15',
                'tanggal_berakhir_moa' => '2025-09-14',
                'file_moa' => 'path/to/file_moa.pdf',
                'misi_program_kerjasama' => 'Sesuai dengan visi dan misi kedua institusi.',
                'target_program_kerjasama' => 'Sesuai dengan sumber daya yang dimiliki.',
                'alasan_pemilihan_mitra' => 'Alasan pemilihan mitra kerjasama adalah karena kesesuaian bidang keahlian dan komitmen untuk berkolaborasi dalam penelitian.',
                'prinsip_kerjasama' => 'Prinsip kerjasama yang diusulkan adalah saling menghormati, berbagi pengetahuan, dan berkomitmen untuk mencapai tujuan bersama.',
                'manfaat_kerjasama' => 'Manfaat kerjasama mencakup pertukaran pengetahuan, akses ke fasilitas penelitian, dan publikasi bersama.',
                'tantangan_pelaksanaan_kerjasama' => 'Tantangan yang mungkin muncul adalah perbedaan budaya dan waktu.',
                'kepemilikan_hak_cipta_paten' => 'Kepemilikan hak cipta dan paten akan diatur dalam MOU.',
                'mekanisme_resiprokal' => 'Mekanisme resiprokal mencakup pertukaran mahasiswa dan dosen.',
                'keberlanjutan_kerjsama' => 'Diharapkan kerjasama ini dapat berlangsung jangka panjang dengan dukungan sumber daya yang berkelanjutan.',
                'hak_dan_kewajiban' => 'Hak dan kewajiban masing-masing pihak akan dijelaskan secara rinci dalam MOU.',
                'hak_tercantum' => '1', // 1: Yes, 0: No
                'status_proposal' => 'Disetujui',
                'komentar_bab2' => 'Ringkasan MOU dan deskripsi singkat MOA perlu diperjelas, selain itu data lain sesuai dengan persyaratan dan standar.',
                'created_at' => now(),
                'updated_at' => now(),
                'id_proposal' => 1, // Assuming proposal table has an appropriate ID
                'id_reviewer' => 1, // Assuming reviewer table has an appropriate ID
            ],
            // Add more sample data as needed
        ];

        // Insert the data into the reviewer_bab2 table
        DB::table('reviewer_bab2')->insert($data);
    }
}
