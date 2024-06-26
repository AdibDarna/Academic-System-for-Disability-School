<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_Informasi extends Model
{
    use HasFactory;
    protected $table='home_informasis';
    protected $primaryKey='id';
    protected $fillable=['id','informasi','created_at','updated_at'];
}
