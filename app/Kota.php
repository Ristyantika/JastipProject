<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    //
    protected $table = 'kotas';
    protected $primaryKey = 'kota_id';
    protected $fillable = [
        'negara_id', 'nama_kota',
    ];
}
