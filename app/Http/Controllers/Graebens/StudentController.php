<?php

namespace App\Http\Controllers\Graebens;

use App\Http\Controllers\Controller;
use App\Models\Graebens\Branches;
use App\Models\Graebens\DrivingCourses;
use App\Models\Graebens\Registration;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    // Edit Student
    public function edit($student_id){
        // dd($student_id);
        $registration = Registration::where('registrations.student_id', $student_id)
        ->join('branches', 'branches.id', '=', 'registrations.course_branch')
        ->get();

        $branches = Branches::get()->all();
        $courses = DrivingCourses::get()->all();

        return view('graebens.editstudent', [
            'registration' => $registration,
            'branch' => $branches,
            'couses' => $courses
        ]);
    }

    public function update(Request $request, $student_id){
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'user_identification' => $request->user_identification,
            'user_email' => $request->user_email,
            'course_selection' => $request->course_selection,
            'course_branch' => $request->course_branch
        ];
        Registration::where('student_id', $student_id)->update($data);
        return redirect()->back()->with('success', 'Student details updated successfuly');
    }

    //Delete
    public function destroy($student_id){
        User::where('student_id', $student_id)->delete();

        return redirect()->back()->with('success', 'Student Deleted Successfully');
    }
}
