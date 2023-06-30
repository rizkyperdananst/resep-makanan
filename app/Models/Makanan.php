<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $fillable = ['kategori_makanan_id', 'gambar', 'nama', 'resep'];

    public function kategori_makanans()
    {
        return $this->belongsTo(KategoriMakanan::class, 'kategori_makanan_id');
    }
}
