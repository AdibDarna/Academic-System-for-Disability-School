<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Fasilitas extends Model
{
    use HasFactory;
    protected $table='home_fasilitas';
    protected $primaryKey='id_fasilitas';
    protected $fillable=['judul','deskripsi','foto','created_at','updated_at'];
}
