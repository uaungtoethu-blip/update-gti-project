<?php

namespace App\Http\Controllers;

use App\Models\Attendances;
use App\Models\Students;
use Illuminate\Http\Request;

class AttendancesController extends Controller
{
    public function index()
{
    $students = Students::withCount([
        'attendances as total_attendance',
        'attendances as present_attendance' => function ($q) {
            $q->where('status', true);
        }
    ])->get();

    $data = $students->map(function ($s) {
        $percent = $s->total_attendance
            ? round(($s->present_attendance / $s->total_attendance) * 100, 2)
            : 0;

        return [
            $s->id,
            $s->name,
            $s->present_attendance,
            $s->total_attendance,
            $percent . '%'
        ];
    });

    return view('attendance.index', [
        'data' => $data->toJson(),
        'today' => now()->toDateString()
    ]);
}
public function save(Request $request)
{
    Attendances::updateOrCreate(
        [
            'student_id' => $request->student_id,
            'date' => $request->date
        ],
        [
            'status' => $request->status
        ]
    );

    return response()->json(['ok' => true]);
}

}
