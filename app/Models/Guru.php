<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "gurus";
    protected $primaryKey = "nip";
    protected $fillable = ['nip','nama','email','password','tanggal_lahir','jenis_kelamin','bidang','jabatan','tahun_masuk','foto','created_at','updated_at'];
    protected $keyType = 'string';
}
