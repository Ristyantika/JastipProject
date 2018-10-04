<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $table = 'ratings';
    protected $primaryKey = 'rating_id';
    protected $fillable = [
        'user_id', 'jumlah_rating', 'keterangan',
    ];
}
