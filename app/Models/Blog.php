<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;
    protected $casts = ['blogImage'=>'array'];

    public function scopeFilter($query,$filter){
         $query->when($filter['searchValue']??false,function ($query,$value){
               $query->where(function($query) use($value){
                       $query->where('title','LIKE','%'.$value.'%')
                       ->orWhere('body','LIKE','%'.$value.'%');
               });
         });
         $query->when($filter['author']??false,function($query,$value){
            $query->whereHas('author',function($query) use($value){
                    $query->where('name',$value)
                    ->orWhere('username',$value);
            });
         });
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
}
