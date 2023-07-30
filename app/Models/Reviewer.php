<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    use HasFactory;
    protected $table = 'reviewer';
    protected $fillable = ['nama_reviewer','email','alamat','institusi','status'];
}
