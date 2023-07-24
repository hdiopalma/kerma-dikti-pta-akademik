<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewerBab4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the reviewer_bab4 table
        $data = [
            [
                'rencana_pelaksanaan_pembelajaran' => 'Sudah terstruktur dengan baik dan mencakup komponen yang relevan.',
                'scan_desain_kurikulum_pt' => 'File terbaca dengan jelas, kurikulum juga sudah sesuai dengan kebutuhan kerjasama.',
                'scan_desain_kurikulum_mitra' => 'Desain kurikulum dari mitra sudah diperiksa dan relevan dengan kebutuhan kerjasama.',
                'scan_desain_kurikulum_gabungan' => 'Kurikulum gabungan dari kedua pihak terlihat menggabungkan materi dengan baik.',
                'jenis_kerjasama' => 'Jenis kerjasama yang diusulkan sudah sesuai dan dapat mendukung kegiatan kerjasama.',
                'jumlah_ijazah_terbit' => 'Jumlah ijazah terbit dari kedua pihak sudah dicatat dengan rinci.',
                'nama_ttd_ijazah_pt' => 'Penandatanganan ijazah dari pihak PT sudah jelas dan sah.',
                'nama_ttd_ijazah_mitra' => 'Penandatanganan ijazah dari mitra kerjasama juga sudah jelas dan sah.',
                'jabatan_ttd_ijazah_pt' => 'Jabatan yang menandatangani ijazah sudah sesuai dengan peraturan yang berlaku.',
                'jabatan_ttd_ijazah_mitra' => 'Jabatan yang menandatangani ijazah dari mitra kerjasama sudah jelas dan sah.',
                'kriteria_calon_mahasiswa' => 'Kriteria calon mahasiswa sudah sesuai dengan persyaratan yang ditentukan.',
                'proses_seleksi' => 'Proses seleksi calon mahasiswa sudah jelas dan terstruktur.',
                'skema_pembiayaan' => 'Skema pembiayaan sudah sesuai dengan perjanjian kerjasama.',
                'file_penjadwalan_kerjasama' => 'File penjadwalan kerjasama sudah terlampir dengan baik.',
                'file_skpi' => 'File SKPI dari kedua pihak sudah terbaca dengan jelas.',
                'keberlanjutan_studi_lanjut' => 'Rencana keberlanjutan studi lanjut sudah disiapkan dengan baik dan mendukung kelanjutan kerjasama.',
                'studi_lanjut_moa' => '1', // 1: Yes, 0: No
                'status_proposal' => 'Disetujui dengan beberapa catatan dan perbaikan terkait keberlanjutan studi lanjut.',
                'komentar_bab4' => 'Semua data yang dibutuhkan sudah disajikan dengan baik. Beberapa poin memerlukan perbaikan, terutama terkait proses seleksi calon mahasiswa dan keberlanjutan studi lanjut.',
                'created_at' => now(),
                'updated_at' => now(),
                'id_proposal' => 1, // Assuming proposal table has an appropriate ID
                'id_reviewer' => 1, // Assuming reviewer table has an appropriate ID
            ],
            // Add more sample data as needed
        ];

        // Insert the data into the reviewer_bab4 table
        DB::table('reviewer_bab4')->insert($data);
    }
}
