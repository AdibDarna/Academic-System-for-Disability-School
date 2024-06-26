<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Prestasi extends Model
{
    use HasFactory;
    protected $table='home_prestasis';
    protected $primaryKey='id_prestasi';
    protected $fillable=['judul_prestasi','deskripsi','foto','created_at','updated_at'];
}
