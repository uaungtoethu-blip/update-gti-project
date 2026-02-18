<?php

namespace App\Models;

use App\Models\StudentList;
use Illuminate\Database\Eloquent\Model;

    class ListTable extends Model
{
    protected $fillable = ['title'];

    public function students()
    {
        return $this->hasMany(StudentList::class,'list_table_id');
    }
}


