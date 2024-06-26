<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Galeri_Foto extends Model
{
    use HasFactory;
    protected $table='home_galeri_fotos';
    protected $primaryKey='id_foto';
    protected $fillable=['id_galeri','foto','created_at','updated_at'];
}
