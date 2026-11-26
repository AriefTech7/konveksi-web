<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'nama_customer',
        'nomor_whatsapp',
        'alamat',
        'kota',
        'created_at',
        'updated_at',
    ];
}
