<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    //
    protected $table = 'negaras';
    protected $primaryKey = 'negara_id';
    protected $fillable = [
        'nama_negara',
    ];
}
