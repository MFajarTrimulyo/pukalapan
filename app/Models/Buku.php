<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kd_buku',
        'foto',
        'judul_buku',
        'kategoriId',
        'author',
        'stock',
        'sinopsis',
    ];

    public function kategori_bukus(){
        return $this->belongsTo(KategoriBuku::class, 'kategoriId');
    }
}
