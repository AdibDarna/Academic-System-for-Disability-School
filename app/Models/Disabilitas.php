<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disabilitas extends Model
{
    use HasFactory;
    
    protected $table = "disabilitas";
    protected $primaryKey = "id_disabilitas";
    protected $fillable = ['id_disabilitas','nama_disabilitas','created_at','updated_at'];
}
