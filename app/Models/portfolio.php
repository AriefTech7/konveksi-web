<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class portfolio extends Model
{
    protected $table = 'portofolio';

    protected $primaryKey = 'portofolio_id';

    protected $fillable = [
        'kategori_id',
        'nama_portofolio',
        'deskripsi_portofolio',
        'gambar_portofolio',
        'created_at',
        'updated_at',
    ];
    public function kategori(): BelongsTo
    {
        // Parameter: (ModelTujuan, foreign_key_di_katalog, primary_key_di_kategori_produk)
        return $this->belongsTo(kategori_produk::class, 'kategori_id', 'kategori_id');
    }
}
