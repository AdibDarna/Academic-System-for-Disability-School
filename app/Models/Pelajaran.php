<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;
    protected $table = "pelajarans";
    protected $primaryKey = "id";
    protected $fillable = ['nama_pelajaran','nip','durasi','deskripsi','created_at','updated_at'];
}
