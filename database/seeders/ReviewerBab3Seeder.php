<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewerBab3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the reviewer_bab3 table
        $data = [
            [
                'deskripsi_singkat_kesiapan_sdm_pt' => 'Deskripsi sudah baik, terutama terkait kemampuan dosen yang relevan dengan bidang kerjasama.',
                'deskripsi_singkat_kesiapan_sdm_mitra' => 'Deskripsi perlu diperjelas untuk melengkapi persiapan sumber daya manusia mitra.',
                'jumlah_dosen_terlibat_pt' => 'Jumlah dosen yang terlibat sudah memadai.',
                'jumlah_dosen_terlibat_mitra' => 'Perlu ditambah jumlah dosen yang terlibat dari mitra untuk memperkuat kolaborasi.',
                'file_data_dosen_terlibat_pt' => 'Sesuai dengan data yang diminta.',
                'file_data_dosen_terlibat_mitra' => 'Diperlukan tambahan data dosen dari mitra.',
                'deskripsi_singkat_pt' => 'Deskripsi program studi sudah cukup jelas dan mendukung kerjasama.',
                'deskripsi_singkat_mitra' => 'Deskripsi program studi mitra perlu diperjelas untuk memastikan kesesuaian bidang kerjasama.',
                'file_lampiran_sarana_prasarana_pt' => 'File terlampir lengkap dan sesuai.',
                'file_lampiran_sarana_prasarana_mitra' => 'Lampiran sarana prasarana dari mitra perlu ditambahkan.',
                'status_proposal' => 'Disetujui dengan catatan perlu melakukan beberapa perbaikan dan penambahan data.',
                'komentar_bab3' => 'Semua data yang diperlukan sudah disertakan dengan baik. Tetapi, ada beberapa bagian yang perlu diperjelas dan ditambahkan untuk memperkuat kerjasama.',
                'created_at' => now(),
                'updated_at' => now(),
                'id_proposal' => 1, // Assuming proposal table has an appropriate ID
                'id_reviewer' => 1, // Assuming reviewer table has an appropriate ID
            ],
            // Add more sample data as needed
        ];

        // Insert the data into the reviewer_bab3 table
        DB::table('reviewer_bab3')->insert($data);
    }
}
