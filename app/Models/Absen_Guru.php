<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen_Guru extends Model
{
    use HasFactory;

    protected $table = 'absen_gurus';
    protected $primaryKey ='id';
    protected $fillable =['id_guru','kehadiran','alasam','file','created_at','updated_at'];
}
