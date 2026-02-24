<?php

use App\Http\Controllers\AdminController;
use App\Models\Blog;
use App\Models\Heading;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AttendancesController;
use App\Http\Controllers\HeadingController;
use App\Http\Controllers\StudentListController;
use App\Http\Controllers\TeacherController;


Route::get('/',[BlogController::class,'index']);
Route::get('/blog/{slug:slug}',[BlogController::class,'show']); 
Route::get('/about',[BlogController::class,'about']);
Route::get('/admission',[BlogController::class,'admission']);
Route::get('/news',[BlogController::class,'new']);

Route::middleware('guest')->group(function(){

Route::get('/auth/register',[UserController::class,'register']);
Route::post('/auth/register',[UserController::class,'store']);
Route::get('/login',[UserController::class,'loginForm']);
Route::post('/auth/login',[UserController::class,'login']);

});

Route::get('/rollcall/{department}', 
    [ExcelController::class, 'index']
)->name('rollcall.index');

Route::post('/student-attendance/import',[ExcelController::class,'import'])->name('studentAttendance.import');
Route::get('/student-attendance/{id}/export',[ExcelController::class,'export'])->name('studentAttendance.export');
Route::delete('/excel/{id}/delete',[ExcelController::class,'destroy'])->name('excel.destroy');


Route::middleware('auth')->group(function(){

Route::patch('/user/{user:username}/edit',[UserController::class,'update']);
Route::post('/blog/{blog:slug}/comment',[CommentController::class,'store']);
Route::post('/auth/logout',[UserController::class,'logout']);
Route::get('/admin/admin-index',[UserController::class,'admIndex']);
});

// adminroute >>>>

Route::middleware('can:admin')->group(function(){

Route::get('/admin/dashbord',[AdminController::class,'index'])->name('admin.index');
Route::get('/admin/student_list',[AdminController::class,'studentList'])->name('admin.studentList');
Route::get('/admin/user_roll',[AdminController::class,'userRoll'])->name('admin.userRoll');
Route::get('/admin/teacher_edit_pannel',[TeacherController::class,'index'])->name('teacher.index');
Route::Post('/admin/teacher_store',[TeacherController::class,'store'])->name('teacher.store');
Route::get('/admin/user_search',[TeacherController::class,'search'])->name('admin.userSearch');
Route::get('/teacher/{id:id}/edit',[TeacherController::class,'edit']);
Route::patch('/teacher/{teacher}/update',[TeacherController::class,'update']);
Route::delete('/teacher/{teacher}/delete',[TeacherController::class,'destory']);
Route::delete('/user/{user}/delete',[UserController::class,'destroy']);
Route::patch('/user/{user}/isadmin',[AdminController::class,'isAdmin']);
Route::get('/admin/post/create',[AdminController::class,'create']);
Route::post('/admin/post/store',[AdminController::class,'store']);
Route::delete('/admin/{blog:slug}/delete',[AdminController::class,'destory']);
Route::get('/admin/heading/update',[HeadingController::class,'index']);
Route::post('/admin/heading/updated',[HeadingController::class,'headingStore']);
Route::get('/admin/{blog:slug}/edit',[HeadingController::class,'edit']);
Route::patch('/admin/{blog:slug}/update',[HeadingController::class,'update']);
Route::post('/admin/add/studentlist',[StudentListController::class,'addTable'])->name('studentlist.addTable');
Route::post('/admin/{table:id}/student',[StudentListController::class,'store'])->name('studentlist.addStudent');
Route::get('/admin/hostel/list',[StudentListController::class,'hostel']);
Route::delete('/student/{student}/delete',[StudentListController::class,'destory']);
Route::patch('/student/{student:id}/update',[StudentListController::class,'update']);
Route::delete('/table/{table}/delete',[StudentListController::class,'tableDestory']);
});