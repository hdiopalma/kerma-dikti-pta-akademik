<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewerBab3 extends Model
{
    use HasFactory;
    protected $table = 'reviewer_bab3';
    protected $fillable = ['id_proposal', 'id_reviewer', 'deskripsi_singkat_kesiapan_sdm_pt', 'deskripsi_singkat_kesiapan_sdm_mitra', 'jumlah_dosen_terlibat_pt', 'jumlah_dosen_terlibat_mitra','file_data_dosen_terlibat_pt', 'file_data_dosen_terlibat_mitra', 'deskripsi_singkat_pt', 'deskripsi_singkat_mitra', 'file_lampiran_sarana_prasarana_pt', 'file_lampiran_sarana_prasarana_mitra','status_proposal','komentar_bab3'];

    public function proposal(){
        return $this->belongsTo(proposal::class, 'id_proposal');
    }

    public function reviewer(){
        return $this->belongsTo(reviewer::class, 'id_reviewer');
    }
}
