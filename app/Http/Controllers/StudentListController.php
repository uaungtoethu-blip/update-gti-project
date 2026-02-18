<?php

namespace App\Http\Controllers;

use App\Models\ListTable;
use App\Models\StudentList;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentListController extends Controller
{
    public function tableDestory(ListTable $table){
        $table->delete();
        return redirect()->back();
    }
    public function update(StudentList $student){
        $stay = request()->has('stay');
        $data = request()->validate([
        'name' => ['required'],
        'class' => ['required'],
        'parent' => ['required'],
        'parent_phone' => [
            'required',
            Rule::unique('student_lists', 'parent_phone')->ignore($student->id),
        ],
        'address' => ['required'],
        'student_phone' => [
            'required',
            Rule::unique('student_lists', 'student_phone')->ignore($student->id),
        ],
    ]);
        $data['stay']=$stay;
        $student->update($data);
        return redirect()->back();
    }
    public function destory(StudentList $student){
        $student->delete();
        return redirect()->back();
    }
    public function hostel(){
         return view('admin.hostel',[
           'hostel' => StudentList::where('stay', true)->get()
         ]);
    }
    public function addTable(){
        $title = request()->validate([
            'name'=>['required','max:50']
        ]);
        ListTable::create($title);
        return redirect()->back()->with('success','new table is added ');
    }
    public function store(ListTable $table){
        $stay = request('stay');
        $data = request()->validate([
            'name'=>['required'],
            'class'=>['required'],
            'parent'=>['required'],
            'parent_phone'=>['required',Rule::unique('student_lists','parent_phone')],
            'address'=>['required'],
            'student_phone'=>['required',Rule::unique('student_lists','student_phone')]
        ]);
        $data['stay']=$stay?true:false;
        $table->students()->create($data);
        return redirect()->back();
    }
}
