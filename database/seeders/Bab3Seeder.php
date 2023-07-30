<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bab3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the bab3 table
        $data = [
            [
                'deskripsi_singkat_kesiapan_sdm_pt' => 'Universitas Indonesia memiliki tenaga pengajar yang berkualitas dan berpengalaman di berbagai bidang ilmu.',
                'deskripsi_singkat_kesiapan_sdm_mitra' => 'University of California memiliki tenaga pengajar dengan latar belakang pendidikan yang bervariasi dan keahlian di bidang teknologi informasi.',
                'jumlah_dosen_terlibat_pt' => '150',
                'jumlah_dosen_terlibat_mitra' => '120',
                'file_data_dosen_terlibat_pt' => 'path/to/file_data_dosen_pt.pdf',
                'file_data_dosen_terlibat_mitra' => 'path/to/file_data_dosen_mitra.pdf',
                'deskripsi_singkat_pt' => 'Universitas Indonesia (UI) adalah salah satu perguruan tinggi terkemuka di Indonesia dengan beragam program studi yang berkualitas.',
                'deskripsi_singkat_mitra' => 'University of California (UC) adalah lembaga pendidikan tinggi terkemuka di Amerika Serikat dengan reputasi internasional yang kuat.',
                'file_lampiran_sarana_prasarana_pt' => 'path/to/file_sarana_prasarana_pt.pdf',
                'file_lampiran_sarana_prasarana_mitra' => 'path/to/file_sarana_prasarana_mitra.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi_singkat_kesiapan_sdm_pt' => 'Institut Teknologi Bandung memiliki tenaga pengajar yang ahli dan berpengalaman di berbagai bidang teknologi dan sains.',
                'deskripsi_singkat_kesiapan_sdm_mitra' => 'National University of Singapore memiliki tenaga pengajar yang berkompeten dan memiliki rekam jejak akademis yang cemerlang.',
                'jumlah_dosen_terlibat_pt' => '200',
                'jumlah_dosen_terlibat_mitra' => '180',
                'file_data_dosen_terlibat_pt' => 'path/to/file_data_dosen_pt_itb.pdf',
                'file_data_dosen_terlibat_mitra' => 'path/to/file_data_dosen_mitra_nus.pdf',
                'deskripsi_singkat_pt' => 'Institut Teknologi Bandung (ITB) adalah perguruan tinggi terkemuka di Indonesia yang fokus pada pendidikan dan penelitian di bidang teknologi dan sains.',
                'deskripsi_singkat_mitra' => 'National University of Singapore (NUS) adalah universitas riset yang terkenal di Asia dan diakui secara global.',
                'file_lampiran_sarana_prasarana_pt' => 'path/to/file_sarana_prasarana_pt_itb.pdf',
                'file_lampiran_sarana_prasarana_mitra' => 'path/to/file_sarana_prasarana_mitra_nus.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi_singkat_kesiapan_sdm_pt' => null,
                'deskripsi_singkat_kesiapan_sdm_mitra' => null,
                'jumlah_dosen_terlibat_pt' => null,
                'jumlah_dosen_terlibat_mitra' => null,
                'file_data_dosen_terlibat_pt' => null,
                'file_data_dosen_terlibat_mitra' => null,
                'deskripsi_singkat_pt' => null,
                'deskripsi_singkat_mitra' => null,
                'file_lampiran_sarana_prasarana_pt' => null,
                'file_lampiran_sarana_prasarana_mitra' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi_singkat_kesiapan_sdm_pt' => null,
                'deskripsi_singkat_kesiapan_sdm_mitra' => null,
                'jumlah_dosen_terlibat_pt' => null,
                'jumlah_dosen_terlibat_mitra' => null,
                'file_data_dosen_terlibat_pt' => null,
                'file_data_dosen_terlibat_mitra' => null,
                'deskripsi_singkat_pt' => null,
                'deskripsi_singkat_mitra' => null,
                'file_lampiran_sarana_prasarana_pt' => null,
                'file_lampiran_sarana_prasarana_mitra' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi_singkat_kesiapan_sdm_pt' => null,
                'deskripsi_singkat_kesiapan_sdm_mitra' => null,
                'jumlah_dosen_terlibat_pt' => null,
                'jumlah_dosen_terlibat_mitra' => null,
                'file_data_dosen_terlibat_pt' => null,
                'file_data_dosen_terlibat_mitra' => null,
                'deskripsi_singkat_pt' => null,
                'deskripsi_singkat_mitra' => null,
                'file_lampiran_sarana_prasarana_pt' => null,
                'file_lampiran_sarana_prasarana_mitra' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        // Insert the data into the bab3 table
        DB::table('bab3')->insert($data);
    }
}
