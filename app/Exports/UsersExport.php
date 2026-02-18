<?php

namespace App\Exports;

use App\Models\ItStudentAttendance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

      protected $fileId;
      public function __construct($fileId){
        $this->fileId = $fileId;
      }

    public function collection()
    {
        return ItStudentAttendance::where('excel_file_id',$this->fileId)->
        select('student_id','roll_number','student_name','attendance_month','attendance_total','attendance_percent_month','attendance_percent_total','student_signature')->get();
    }
    public function headings(): array
    {
       return ['ID','Student_id','Roll_number','Student_name','Attendance_month','Attendance_total','Attendance_percent_month','Attendance_percent_total','Student_signature'];
    }
}
