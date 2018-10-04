<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    //
    protected $table = 'perjalanan';
    protected $primaryKey = 'perjalanan_id';
    protected $fillable = [
        'user_id', 'negara_tujuan', 'kota_tujuan', 'tanggal_keberangkatan', 'tanggal_kembali', 'budget',
    ];
}
