<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItStudentAttendance extends Model
{
    protected $fillable = [
        'department',
        'student_id',
        'roll_number',
        'student_name',
        'attendance_month',
        'attendance_total',
        'attendance_percent_month',
        'attendance_percent_total',
        'student_signature',
    ];
}
