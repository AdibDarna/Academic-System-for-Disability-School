<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = "nilais";
    protected $primaryKey = "id";
    protected $fillable = ['nis','id_pelajaran','id_kelas','nilai_pengetahuan','nilai_keterampilan','semester','note_pengetahuan','note_keterampilan',];
}
