<?php

namespace App\Models;

use App\Models\ListTable;
use Illuminate\Database\Eloquent\Model;

class StudentList extends Model
{
    protected $fillable = ['name','class','parent','parent_phone','address',
    'student_phone'];
    public function listTable(){
        return $this->hasMany(ListTable::class);
    }
}
