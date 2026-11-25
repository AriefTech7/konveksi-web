<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function kategori(): BelongsTo
    {
        // Parameter: (ModelTujuan, foreign_key_di_katalog, primary_key_di_kategori_produk)
        return $this->belongsTo(kategori_produk::class, 'kategori_id', 'kategori_id');
    }
}
