<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phone';
    protected $primaryKey = 'idhp';
    protected $fillable = [
        'namahp',
        'merek',    
        'harga',
        'processor',
        'gambar'
    ];
}
