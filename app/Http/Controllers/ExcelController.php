<?php

namespace App\Http\Controllers;

use App\Models\ExcelFile;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Models\ItStudentAttendance;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Response;


class ExcelController extends Controller
{
    // Show the upload form
    public function index($department)
{
    $excelFiles = ExcelFile::with(['rows' => function($q) use ($department) {
        $q->where('department', $department);
    }])->get();

    return view('attendance.index', compact('excelFiles', 'department'));
}


    // Handle Excel import
    public function import(Request $request)
{
    $request->validate([
    'file' => 'required|file|mimes:xlsx,xls|max:2048',
    'department' => 'required|in:IT,CIVIL,MP',
]);


    $excelFile = ExcelFile::create([
        'file_name' => $request->file('file')->getClientOriginalName()
    ]);

    try {
        Excel::import(
            new UsersImport($excelFile->id, $request->department),  // 👈 pass department
            $request->file('file')
        );

        return back()->with('success', 'Excel imported successfully!');
    } catch (\Throwable $e) {
        return back()->with('error', $e->getMessage());
    }
}

   
    public function export($id)
    {
        $file = ExcelFile::findOrFail($id);
        return Excel::download(new UsersExport($id),$file->file_name);
    }
    public function destroy($id){
        $file = ExcelFile::findOrFail($id);
        $file->delete();
        
        return redirect()->back()->with('success','Excel file deleted');
    }
}