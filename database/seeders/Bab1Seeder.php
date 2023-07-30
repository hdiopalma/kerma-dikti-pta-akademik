<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bab1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the bab1 table
        $data = [
            [
                'nama_pt' => 'Universitas Indonesia',
                'alamat_pt' => 'Depok, Jawa Barat',
                'ijin_operasional_pt' => '123/XYZ/2019',
                'scan_ijin_operasional_pt' => 'path/to/scan1.pdf',
                'scan_status_akreditasi_institusi' => 'path/to/scan2.pdf',
                'nama_pt_mitra' => 'University of California, Berkeley',
                'alamat_pt_mitra' => 'California, USA',
                'ijin_operasional_pt_mitra' => '456/ABC/2020',
                'scan_ijin_operasional_pt_mitra' => 'path/to/scan3.pdf',
                'scan_status_akreditasi_institusi_mitra' => 'path/to/scan4.pdf',
                'peringkat_internasional_mitra' => '10',
                'nama_prodi' => 'Teknik Informatika',
                'nama_prodi_mitra' => 'Computer Science',
                'scan_sk_akreditasi_prodi' => 'path/to/scan5.pdf',
                'scan_sk_akreditasi_prodi_mitra' => 'path/to/scan6.pdf',
                'scan_ijin_operasional_prodi' => 'path/to/scan7.pdf',
                'scan_ijin_operasional_prodi_mitra' => 'path/to/scan8.pdf',
                'proposal_usulan_kerjsama' => 'path/to/proposal.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'id_status_akreditasi_institusi' => 1,
                'id_status_akreditasi_institusi_mitra' => 2,
                'id_akreditasi_prodi' => 1,
                'id_akreditasi_prodi_mitra' => 2,
                'id_negara_mitra' => 2,
            ],
            [
                'nama_pt' => 'Institut Teknologi Bandung',
                'alamat_pt' => 'Bandung, Jawa Barat',
                'ijin_operasional_pt' => '789/DEF/2021',
                'scan_ijin_operasional_pt' => 'path/to/scan9.pdf',
                'scan_status_akreditasi_institusi' => 'path/to/scan10.pdf',
                'nama_pt_mitra' => 'National University of Singapore',
                'alamat_pt_mitra' => 'Singapore',
                'ijin_operasional_pt_mitra' => '987/GHI/2022',
                'scan_ijin_operasional_pt_mitra' => 'path/to/scan11.pdf',
                'scan_status_akreditasi_institusi_mitra' => 'path/to/scan12.pdf',
                'peringkat_internasional_mitra' => '5',
                'nama_prodi' => 'Teknik Elektro',
                'nama_prodi_mitra' => 'Electrical Engineering',
                'scan_sk_akreditasi_prodi' => 'path/to/scan13.pdf',
                'scan_sk_akreditasi_prodi_mitra' => 'path/to/scan14.pdf',
                'scan_ijin_operasional_prodi' => 'path/to/scan15.pdf',
                'scan_ijin_operasional_prodi_mitra' => 'path/to/scan16.pdf',
                'proposal_usulan_kerjsama' => 'path/to/proposal2.pdf',
                'created_at' => now(),
                'updated_at' => now(),
                'id_status_akreditasi_institusi' => 2,
                'id_status_akreditasi_institusi_mitra' => 3,
                'id_akreditasi_prodi' => 2,
                'id_akreditasi_prodi_mitra' => 3,
                'id_negara_mitra' => 2,
            ],
            [
                'nama_pt' => null,
                'alamat_pt' => null,
                'ijin_operasional_pt' => null,
                'scan_ijin_operasional_pt' => null,
                'scan_status_akreditasi_institusi' => null,
                'nama_pt_mitra' => null,
                'alamat_pt_mitra' => null,
                'ijin_operasional_pt_mitra' => null,
                'scan_ijin_operasional_pt_mitra' => null,
                'scan_status_akreditasi_institusi_mitra' => null,
                'peringkat_internasional_mitra' => null,
                'nama_prodi' => null,
                'nama_prodi_mitra' => null,
                'scan_sk_akreditasi_prodi' => null,
                'scan_sk_akreditasi_prodi_mitra' => null,
                'scan_ijin_operasional_prodi' => null,
                'scan_ijin_operasional_prodi_mitra' => null,
                'proposal_usulan_kerjsama' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'id_status_akreditasi_institusi' => null,
                'id_status_akreditasi_institusi_mitra' => null,
                'id_akreditasi_prodi' => null,
                'id_akreditasi_prodi_mitra' => null,
                'id_negara_mitra' => null,
            ],
            [
                'nama_pt' => null,
                'alamat_pt' => null,
                'ijin_operasional_pt' => null,
                'scan_ijin_operasional_pt' => null,
                'scan_status_akreditasi_institusi' => null,
                'nama_pt_mitra' => null,
                'alamat_pt_mitra' => null,
                'ijin_operasional_pt_mitra' => null,
                'scan_ijin_operasional_pt_mitra' => null,
                'scan_status_akreditasi_institusi_mitra' => null,
                'peringkat_internasional_mitra' => null,
                'nama_prodi' => null,
                'nama_prodi_mitra' => null,
                'scan_sk_akreditasi_prodi' => null,
                'scan_sk_akreditasi_prodi_mitra' => null,
                'scan_ijin_operasional_prodi' => null,
                'scan_ijin_operasional_prodi_mitra' => null,
                'proposal_usulan_kerjsama' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'id_status_akreditasi_institusi' => null,
                'id_status_akreditasi_institusi_mitra' => null,
                'id_akreditasi_prodi' => null,
                'id_akreditasi_prodi_mitra' => null,
                'id_negara_mitra' => null,
            ],
            [
                'nama_pt' => null,
                'alamat_pt' => null,
                'ijin_operasional_pt' => null,
                'scan_ijin_operasional_pt' => null,
                'scan_status_akreditasi_institusi' => null,
                'nama_pt_mitra' => null,
                'alamat_pt_mitra' => null,
                'ijin_operasional_pt_mitra' => null,
                'scan_ijin_operasional_pt_mitra' => null,
                'scan_status_akreditasi_institusi_mitra' => null,
                'peringkat_internasional_mitra' => null,
                'nama_prodi' => null,
                'nama_prodi_mitra' => null,
                'scan_sk_akreditasi_prodi' => null,
                'scan_sk_akreditasi_prodi_mitra' => null,
                'scan_ijin_operasional_prodi' => null,
                'scan_ijin_operasional_prodi_mitra' => null,
                'proposal_usulan_kerjsama' => null,
                'created_at' => now(),
                'updated_at' => now(),
                'id_status_akreditasi_institusi' => null,
                'id_status_akreditasi_institusi_mitra' => null,
                'id_akreditasi_prodi' => null,
                'id_akreditasi_prodi_mitra' => null,
                'id_negara_mitra' => null,
            ]

        ];

        // Insert the data into the bab1 table
        DB::table('bab1')->insert($data);
    }
}
