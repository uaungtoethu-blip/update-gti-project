<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Clockwork\Web\Web;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeacherController extends Controller
{

public function destory(Teacher $teacher){
    $teacher->delete();
    return view('teacher.teacher_index');
}
public function update(Request $request, Teacher $teacher)
{
    $data = $request->validate([
        'name'    => ['required', 'string', 'max:255'],
        'email'   => [
            'required',
            'email',
            Rule::unique('teachers', 'email')->ignore($teacher->id),
            ],
            'phone'   => [
                'required',
                'max:20',
                Rule::unique('teachers', 'phone')->ignore($teacher->id),
                ],
                'position'=>['required'],
                'address' => ['required'],
                'user_id' => ['required'],
                'major'   => ['required'],
                ]);
                

    // reset all majors
    $data['it_teacher'] = false;
    $data['cv_teacher'] = false;
    $data['mp_teacher'] = false;
    $data['ep_teacher'] = false;
    $data['ec_teacher'] = false;
    $data['fm_teacher'] = false;

    // set selected major
    if (in_array($data['major'], [
        'it_teacher',
        'cv_teacher',
        'mp_teacher',
        'ep_teacher',
        'ec_teacher',
        'fm_teacher',
    ])) {
        $data[$data['major']] = true;
    }

    unset($data['major']); // optional, if not a DB column

    $teacher->update($data);
    return view('teacher.teacher_index') // or whatever your list route is
        ->with('success', 'Successfully edited!');
}

    
    public function edit(Teacher $id){
        return view('teacher.edit-teacher',[
         'editTeacher'=>$id
        ]);
    }
   
   public function index()
{
    return view('teacher.teacher_index', [
        'teacher'=>null,
    ]); 
}
    public function store(Request $request){
          $data = $request->validate([
        'name'    => ['required', 'string', 'max:255'],
        'email'   => ['required', 'email', Rule::unique('teachers', 'email')],
        'phone'   => ['required', 'max:20', Rule::unique('teachers', 'phone')],
        'address' => ['required'],
        'position'=>['required'],
        'user_id'=>['required'],
    ]);
    $data['it_teacher'] = false;
    $data['cv_teacher'] = false;
    $data['mp_teacher'] = false;
    $data['ep_teacher'] = false;
    $data['ec_teacher'] = false;
    $data['fm_teacher'] = false;

   $majorField = $request->major; // eg: 'it_teacher', 'cv_teacher', etc.
    if (in_array($majorField, ['it_teacher','cv_teacher','mp_teacher','ep_teacher','ec_teacher','fm_teacher'])) {
        $data[$majorField] = true;
    }
        Teacher::create($data);

        return redirect()->back()->with('success','Successfully added!!');
       
    }

    public function search()
{
    $searchKey = request()->validate([
        'user_id' => ['required', Rule::exists('users', 'id')]
    ]);

    // We fetch the user and put it into a variable named 'teachers' 
    // but we use ->get() so it's a collection (a list of 1).
    // This allows the <x-teacher.teacher-list> to loop through it without error.
    $foundUser = User::where('id', $searchKey['user_id'])->get();

    return view('teacher.teacher_index', [
 // Satisfies line 4
        'teacher'  => $foundUser->first() // Satisfies line 6 (the "add" form)
    ]);
}
}
