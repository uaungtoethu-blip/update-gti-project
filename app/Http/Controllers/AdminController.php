<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ExcelFile;
use App\Models\StudentList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function destory(Blog $blog){
        $blog->delete();
        return redirect()->back();
    }
    public function store(){
        $path=[];
        $postData = request()->validate([
            'title'=>['required',Rule::unique('blogs','title')],
            'body'=>['required']
        ]);
        foreach(request('blogImage') as $file){
            $path[]=$file->store('image');
        }
        $intro = preg_split("/\r\n|\n|\r/", trim($postData['body']));
        $postData['intro']=$intro[0];
        $slug = preg_split("/\r\n|\n\r/",trim($postData['body']));
        $postData['slug']=$slug[0];
        $postData['user_id']=auth()->id();
        $postData['blogImage']=json_encode($path);
        Blog::create($postData);
        return redirect('/')->with('success','New post is created ');
    }
    public function create(){
        return view('admin.post-create');
    }
    public function isAdmin(User $user){
         $user->is_admin = !$user->is_admin;

    // Save the change to the database
    $user->save();

    return back()->with('success', 'User role updated!');
    }
    public function index(){
        return view('admin.index');
    }
    public function studentList(){
        return view('admin.student_list',[
                   'students'=>StudentList::all()
        ]);
    }

    public function userRoll(){
        return view('admin.user_roll',[
                       'users'=>User::all()
        ]);
    }
}
