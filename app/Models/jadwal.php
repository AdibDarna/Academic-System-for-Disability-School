<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table = "jadwals";
    protected $primayKey = "id";
    protected $fillable = ['id_pelajaran','id_kelas','semester'];
}
