<?php

namespace App\Imports;

use App\Models\ItStudentAttendance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UsersImport implements ToModel, WithHeadingRow
{
    private $excelFileId;
    private $department;

    public function __construct($excelFileId, $department)
    {
        $this->excelFileId = $excelFileId;
        $this->department = $department;
    }

    public function model(array $row)
    {
        return new ItStudentAttendance([
            'department' => $this->department, // 👈 dynamic
            'excel_file_id' => $this->excelFileId,
            'student_id' => $row['student_id'],
            'roll_number' => $row['roll_number'],
            'student_name' => $row['student_name'],
            'attendance_month' => $row['attendance_month'],
            'attendance_total' => $row['attendance_total'],
            'attendance_percent_month' => $row['attendance_percent_month'],
            'attendance_percent_total' => $row['attendance_percent_total'],
            'student_signature' => $row['student_signature'],
        ]);
    }
}
