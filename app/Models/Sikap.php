<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sikap extends Model
{
    use HasFactory;
    protected $table = "sikaps";
    protected $primaryKey = "id";
    protected $fillable = ['nis','id_kelas','spiritual','sosial','semester'];
}
