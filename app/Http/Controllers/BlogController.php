<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Heading;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function new(){
        return view('news');
    }
    public function admission(){
        return view('admission');
    }
    public function about(){
        return view('about',[
            'about'=>Heading::latest()->first()
        ]);
    }
    public function index(){
    return view('index',[
        'blogs'=>Blog::with('author')->latest()->filter(request(['searchValue','author']))->paginate(9)->withQueryString()
    ]);
    }
    public function show( Blog $slug){
       return view('show',[
          'blog'=>$slug,
          'comments'=>$slug->comments()->latest()->with('commenter')->get(),
          'randomBlogs'=>Blog::with('author')->inRandomOrder()->take(3)->get()
       ]);
    }
}
