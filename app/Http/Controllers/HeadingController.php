<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Heading;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HeadingController extends Controller
{
    public function update(Blog $blog)
{
    $postData = request()->validate([
        'title' => ['required', \Illuminate\Validation\Rule::unique('blogs','title')->ignore($blog->id)],
        'body'  => ['required'],
        'blogImage.*' => ['nullable','file'], // optional
    ]);

    // old media from DB
    $old = is_array($blog->blogImage)
        ? $blog->blogImage
        : json_decode($blog->blogImage, true);

    $old = array_values(array_filter($old ?? []));

    $paths = $old; // default: keep old

    // if user uploaded new files, store them
    if (request()->hasFile('blogImage')) {
        $paths = []; // replace old (or change this if you want to append)
        foreach (request()->file('blogImage') as $file) {
            $paths[] = $file->store('image', 'public'); // stored in storage/app/public/image
        }
    }
    
    $intro = preg_split("/\r\n|\n|\r/", trim($postData['body']));
    $postData['intro'] = $intro[0] ?? '';
    
    $postData['user_id'] = auth()->id();
    $postData['blogImage'] = json_encode($paths);
    $blog->update($postData);

    return redirect('/')->with('success', 'Success Edited');
}

    public function edit(Blog $blog){
        return view('admin.post-edit',[
            'blog'=>$blog
        ]);
    }
    public function headingStore(){
        $data = request()->validate([
         'heading'=>['required','max:200'],
         'headingParagraph'=>['required']
        ]);
        Heading::create($data);
        return redirect('/');
    }
    public function index(){
        return view('admin.heading');
    }
}
