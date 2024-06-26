<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Feedback extends Model
{
    use HasFactory;
    protected $table='home_feedback';
    protected $primaryKey='id_feedback';
    protected $fillable=['nama','email','nomor_hp','isi_pesan','created_at','updated_at'];
}
