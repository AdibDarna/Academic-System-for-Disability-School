<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen_Siswa extends Model
{
    use HasFactory;

    protected $table = 'absen_siswas';
    protected $primaryKey ='id';
    protected $fillable =['nis','id_disabilitas','id_kelas','kehadiran','alasan','file','created_at','updated_at'];
}
