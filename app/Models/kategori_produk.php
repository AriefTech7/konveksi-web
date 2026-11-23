<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori_produk extends Model
{
    protected $table = 'kategori_produk';
    protected $primaryKey = 'kategori_id';
    protected $fillable = [
        'kategori_id',
        'nama_kategori',
        'deskripsi_kategori',
        'gambar_kategori',
        'created_at',
        'updated_at',
    ];
}
