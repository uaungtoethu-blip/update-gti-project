<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
       protected $fillable = [
        'user_id',
        'it_teacher',
        'cv_teacher',
        'mp_teacher',
        'ep_teacher',
        'ec_teacher',
        'fm_teacher',
        'name',
        'phone',
        'email',
        'major',
        'address',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    } 
}
