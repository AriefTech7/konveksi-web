<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class katalog_bahan extends Model
{
    protected $table = 'katalog_bahan';

    protected $primaryKey = 'bahan_id';

    protected $fillable = [
        'bahan_id',
        'nama_bahan',
        'kualitas_bahan',
        'deskripsi',
        'gambar_bahan',
        'status_ketersediaan',
    ];
}
