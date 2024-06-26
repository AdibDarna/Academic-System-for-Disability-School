<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Galeri extends Model
{
    use HasFactory;
    protected $table='home_galeris';
    protected $primaryKey='id_galeri';
    protected $fillable=['id_galeri','judul','deskripsi','created_at','updated_at'];
}
