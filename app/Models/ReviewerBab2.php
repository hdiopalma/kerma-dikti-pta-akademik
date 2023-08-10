<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewerBab2 extends Model
{
    use HasFactory;
    protected $table = 'reviewer_bab2';
    protected $fillable = ['id_reviewer','id_proposal','ringkasan_mou','file_mou','no_moa','deskripsi_singkat_moa','tanggal_dimulai_moa','tanggal_berakhir_moa','file_moa','misi_program_kerjasama','target_program_kerjasama','alasan_pemilihan_mitra','prinsip_kerjasama','manfaat_kerjasama','tantangan_pelaksanaan_kerjasama','kepemilikan_hak_cipta_paten','mekanisme_resiprokal','keberlanjutan_kerjsama','hak_dan_kewajiban','hak_tercantum','status_proposal','komentar_bab2'];

    public function proposal(){
        return $this->belongsTo(proposal::class, 'id_proposal');
    }

    public function reviewer(){
        return $this->belongsTo(reviewer::class, 'id_reviewer');
    }
}
