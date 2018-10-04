<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    //
    protected $table = 'penitipans';
    protected $primaryKey = 'penitipan_id';
    protected $fillable = [
        'perjalanan_id', 'user_id', 'detail_penitipan', 'status', 'nominal_pembeli', 'nominal_pemesan',
    ];
}
