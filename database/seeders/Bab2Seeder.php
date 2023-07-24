<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bab2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the bab2 table
        $data = [
            [
                'ringkasan_mou' => 'Ringkasan MOU antara Universitas Indonesia dan University of California',
                'file_mou' => 'path/to/mou.pdf',
                'no_moa' => 'MOA-1234',
                'deskripsi_singkat_moa' => 'Deskripsi singkat tentang MOA ini',
                'tanggal_dimulai_moa' => '2023-07-01',
                'tanggal_berakhir_moa' => '2025-07-01',
                'file_moa' => 'path/to/moa.pdf',
                'misi_program_kerjasama' => 'Misi program kerjasama dalam MOA',
                'target_program_kerjasama' => 'Target program kerjasama yang akan dilakukan',
                'alasan_pemilihan_mitra' => 'Alasan memilih mitra kerjasama',
                'prinsip_kerjasama' => 'Prinsip dasar kerjasama',
                'manfaat_kerjasama' => 'Manfaat dari kerjasama ini',
                'tantangan_pelaksanaan_kerjasama' => 'Tantangan yang mungkin dihadapi dalam pelaksanaan kerjasama',
                'kepemilikan_hak_cipta_paten' => 'Kepemilikan hak cipta dan paten hasil kerjasama',
                'mekanisme_resiprokal' => 'Mekanisme resiprokal yang diatur dalam MOA',
                'keberlanjutan_kerjsama' => 'Rencana keberlanjutan kerjasama di masa depan',
                'hak_dan_kewajiban' => 'Hak dan kewajiban dari masing-masing pihak',
                'hak_tercantum' => '1', // 1: Yes, 0: No
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ringkasan_mou' => 'Ringkasan MOU antara Institut Teknologi Bandung dan National University of Singapore',
                'file_mou' => 'path/to/mou_itb_nus.pdf',
                'no_moa' => 'MOA-5678',
                'deskripsi_singkat_moa' => 'Deskripsi singkat tentang MOA ini',
                'tanggal_dimulai_moa' => '2022-10-01',
                'tanggal_berakhir_moa' => '2024-10-01',
                'file_moa' => 'path/to/moa_itb_nus.pdf',
                'misi_program_kerjasama' => 'Misi program kerjasama dalam MOA antara ITB dan NUS',
                'target_program_kerjasama' => 'Target program kerjasama antara ITB dan NUS',
                'alasan_pemilihan_mitra' => 'Alasan memilih NUS sebagai mitra kerjasama',
                'prinsip_kerjasama' => 'Prinsip dasar kerjasama ITB dan NUS',
                'manfaat_kerjasama' => 'Manfaat dari kerjasama ini',
                'tantangan_pelaksanaan_kerjasama' => 'Tantangan yang dihadapi dalam pelaksanaan kerjasama',
                'kepemilikan_hak_cipta_paten' => 'Kepemilikan hak cipta dan paten hasil kerjasama',
                'mekanisme_resiprokal' => 'Mekanisme resiprokal dalam MOA ITB dan NUS',
                'keberlanjutan_kerjsama' => 'Rencana keberlanjutan kerjasama di masa depan',
                'hak_dan_kewajiban' => 'Hak dan kewajiban dari ITB dan NUS',
                'hak_tercantum' => '1', // 1: Yes, 0: No
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the data into the bab2 table
        DB::table('bab2')->insert($data);
    }
}
