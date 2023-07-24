<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bab4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample data for the bab4 table
        $data = [
            [
                'rencana_pelaksanaan_pembelajaran' => 'Rencana pelaksanaan pembelajaran dalam kerjasama antara Universitas Indonesia dan University of California akan melibatkan penggunaan metode pengajaran yang inovatif dan teknologi terkini.',
                'scan_desain_kurikulum_pt' => 'path/to/scan_desain_kurikulum_pt.pdf',
                'scan_desain_kurikulum_mitra' => 'path/to/scan_desain_kurikulum_mitra.pdf',
                'scan_desain_kurikulum_gabungan' => 'path/to/scan_desain_kurikulum_gabungan.pdf',
                'jumlah_ijazah_terbit' => '300',
                'nama_ttd_ijazah_pt' => 'Prof. Dr. John Doe',
                'nama_ttd_ijazah_mitra' => 'Prof. Dr. Jane Smith',
                'jabatan_ttd_ijazah_pt' => 'Rektor Universitas Indonesia',
                'jabatan_ttd_ijazah_mitra' => 'President of University of California',
                'kriteria_calon_mahasiswa' => 'Calon mahasiswa harus memiliki latar belakang akademis yang unggul dan berpotensi untuk berkontribusi dalam penelitian dan inovasi.',
                'proses_seleksi' => 'Proses seleksi calon mahasiswa akan melibatkan wawancara dan penilaian kompetensi.',
                'skema_pembiayaan' => 'Pembiayaan kerjasama akan dibagi secara proporsional antara Universitas Indonesia dan University of California.',
                'file_penjadwalan_kerjasama' => 'path/to/file_penjadwalan_kerjasama.pdf',
                'file_skpi' => 'path/to/file_skpi.pdf',
                'keberlanjutan_studi_lanjut' => 'Keberlanjutan studi lanjut akan didorong melalui beasiswa dan bantuan pendanaan.',
                'studi_lanjut_moa' => '1', // 1: Yes, 0: No
                'created_at' => now(),
                'updated_at' => now(),
                'id_jenis_kerjasama' => 1, // Assuming jenis_kerjasama table has an appropriate ID
            ],
            [
                'rencana_pelaksanaan_pembelajaran' => 'Rencana pelaksanaan pembelajaran dalam kerjasama antara Institut Teknologi Bandung dan National University of Singapore akan menitikberatkan pada kolaborasi riset dan pengembangan di bidang teknologi dan ilmu pengetahuan.',
                'scan_desain_kurikulum_pt' => 'path/to/scan_desain_kurikulum_pt_itb.pdf',
                'scan_desain_kurikulum_mitra' => 'path/to/scan_desain_kurikulum_mitra_nus.pdf',
                'scan_desain_kurikulum_gabungan' => 'path/to/scan_desain_kurikulum_gabungan.pdf',
                'jumlah_ijazah_terbit' => '250',
                'nama_ttd_ijazah_pt' => 'Prof. Dr. Ahmad Rahman',
                'nama_ttd_ijazah_mitra' => 'Prof. Dr. Lim Wei Hong',
                'jabatan_ttd_ijazah_pt' => 'Rektor Institut Teknologi Bandung',
                'jabatan_ttd_ijazah_mitra' => 'President of National University of Singapore',
                'kriteria_calon_mahasiswa' => 'Calon mahasiswa yang akan dipilih harus memiliki kemampuan akademis yang unggul dan komitmen untuk berkontribusi pada peningkatan teknologi dan inovasi.',
                'proses_seleksi' => 'Proses seleksi calon mahasiswa akan melibatkan uji tulis dan wawancara kompetensi.',
                'skema_pembiayaan' => 'Pembiayaan kerjasama akan dipartisi antara Institut Teknologi Bandung dan National University of Singapore sesuai dengan kebutuhan program.',
                'file_penjadwalan_kerjasama' => 'path/to/file_penjadwalan_kerjasama.pdf',
                'file_skpi' => 'path/to/file_skpi.pdf',
                'keberlanjutan_studi_lanjut' => 'Keberlanjutan studi lanjut akan didukung melalui program beasiswa dan dukungan riset.',
                'studi_lanjut_moa' => '1', // 1: Yes, 0: No
                'created_at' => now(),
                'updated_at' => now(),
                'id_jenis_kerjasama' => 1, // Assuming jenis_kerjasama table has an appropriate ID
            ],
        ];

        // Insert the data into the bab4 table
        DB::table('bab4')->insert($data);
    }
}
