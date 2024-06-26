<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Extrakulikuler extends Model
{
    use HasFactory;
    
    protected $table='home_extrakulikulers';
    protected $primaryKey='id_extrakulikuler';
    protected $fillable=['nama_extrakulikuler','pembimbing','nomor_hp','hari','waktu','foto','created_at','updated_at'];
}
