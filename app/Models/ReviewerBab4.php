<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewerBab4 extends Model
{
    use HasFactory;
    protected $table = 'reviewer_bab4';
    protected $fillable = ['id_proposal', 'id_reviewer', 'rencana_pelaksanaan_pembelajaran', 'scan_desain_kurikulum_pt', 'scan_desain_kurikulum_mitra', 'scan_desain_kurikulum_gabungan','jenis_kerjasama','jumlah_ijazah_terbit', 'nama_ttd_ijazah_pt', 'nama_ttd_ijazah_mitra', 'jabatan_ttd_ijazah_pt', 'jabatan_ttd_ijazah_mitra','kriteria_calon_mahasiswa', 'proses_seleksi', 'skema_pembiayaan', 'file_penjadwalan_kerjasama', 'file_skpi', 'keberlanjutan_studi_lanjut', 'studi_lanjut_moa','status_proposal','komentar_bab4'];

    public function proposal(){
        return $this->belongsTo(Proposal::class, 'id_proposal');
    }

    public function reviewer(){
        return $this->belongsTo(Reviewer::class, 'id_reviewer');
    }
}
