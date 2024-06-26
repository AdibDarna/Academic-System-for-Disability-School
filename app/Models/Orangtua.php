<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Orangtua extends Authenticatable
{
    use HasFactory;
    protected $table = 'orangtuas';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_orangtua', 'email', 'password', 'notelp', 'nis',];
    protected $guarded = [];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
