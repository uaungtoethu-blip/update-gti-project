<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExcelFile extends Model
{
    public function rows(){
        return $this->hasMany(ItStudentAttendance::class    );
    }
}
