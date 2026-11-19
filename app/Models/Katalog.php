<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
    protected $table = 'katalog';
    protected $primaryKey = 'katalog_id';
    protected $fillable = [
        'kategori_id',
        'nama_katalog',
        'harga',
        'deskripsi',
        'gambar_katalog',
        'minimum_order',
        'estimasi_produk',
        'created_at',
        'updated_at',
    ];
}
