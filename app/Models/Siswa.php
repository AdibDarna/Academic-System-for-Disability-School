<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table="siswas";
    protected $primaryKey="nis";
    protected $fillable=['nis','nama','tanggal_lahir','tahun_masuk','jenis_kelamin','id_disabilitas','id_kelas','catatan','foto','created_at','updated_at'];
}
