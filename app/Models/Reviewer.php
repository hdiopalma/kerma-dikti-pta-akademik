<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    use HasFactory;
    protected $table = 'reviewer';
    protected $fillable = ['nama_reviewer','email','alamat','institusi','status'];

    public function reviewerBab1()
    {
        return $this->hasMany(ReviewerBab1::class, 'id_reviewer');
    }    

    public function reviewerBab2()
    {
        return $this->hasMany(ReviewerBab2::class, 'id_reviewer');
    }

    public function reviewerBab3()
    {
        return $this->hasMany(ReviewerBab3::class, 'id_reviewer');
    }

    public function reviewerBab4()
    {
        return $this->hasMany(ReviewerBab4::class, 'id_reviewer');
    }
}
