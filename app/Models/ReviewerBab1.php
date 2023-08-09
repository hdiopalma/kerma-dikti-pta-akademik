<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewerBab1 extends Model
{
    use HasFactory;
    protected $table = 'reviewer_bab1';
    protected $fillable = ['id_reviewer','id_proposal','nama_pt','alamat_pt','ijin_operasional_pt','scan_ijin_operasional_pt','id_status_akreditasi_institusi','scan_status_akreditasi_institusi','nama_pt_mitra','alamat_pt_mitra','ijin_operasional_pt_mitra','scan_ijin_operasional_pt_mitra','id_status_akreditasi_institusi_mitra','scan_status_akreditasi_institusi_mitra','id_negara_mitra','peringkat_internasional_mitra','nama_prodi','nama_prodi_mitra','id_akreditasi_prodi','id_akreditasi_prodi_mitra','scan_sk_akreditasi_prodi','scan_sk_akreditasi_prodi_mitra','scan_ijin_operasional_prodi','scan_ijin_operasional_prodi_mitra','proposal_usulan_kerjsama','status_proposal'];

    public function proposal(){
        return $this->belongsTo(proposal::class, 'id_proposal');
    }

    public function reviewer(){
        return $this->belongsTo(reviewer::class, 'id_reviewer');
    }
}
