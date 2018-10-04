<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $table = 'user_profiles';
    protected $primaryKey = 'profile_id';
    protected $fillable = [
        'user_id', 'full_name', 'address', 'phone_number', 'description',
    ];
}
}
