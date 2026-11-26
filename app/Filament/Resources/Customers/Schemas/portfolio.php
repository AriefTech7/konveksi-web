<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class portfolio extends Model
{
    protected $table = 'portofolio';

    protected $primaryKey = 'portfolio_id';

    protected $fillable = [
        'kategori_id',
        'nama_portfolio',
        'deskripsi_portfolio',
        'gambar_portfolio',
        'created_at',
        'updated_at',
    ];
    public function kategori(): BelongsTo
    {
        return $this->belongTo(kategori_produk::class,'kategori_id','kategori_id');
    }
}
