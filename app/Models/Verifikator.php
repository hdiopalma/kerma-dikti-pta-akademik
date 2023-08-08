<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifikator extends Model
{
    use HasFactory;
    protected $table = 'verifikator';
    protected $fillable = ['nama_verifikator','email','alamat','institusi','status'];

    public function user(){
        return $this->hasOne(User::class, 'id_verifikator');
    }

    public function proposal(){
        return $this->hasMany(Proposal::class, 'id_verifikator');
    }

}
