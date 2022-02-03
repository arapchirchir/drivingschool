<?php

namespace App\Http\Controllers\Graebens;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Graebens\DrivingCourses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
        $data = DrivingCourses::paginate(20);
        return view('graebens.courses', [
            'courses' => $data,
        ]);
    }

    // store
    public function store(CourseRequest $request){
        $validate = $request->validated();

        if ($validate) {
            $data = [
                'course_name' => $request->course_name,
            ];

            DrivingCourses::create($data);
            return back()->with('success', 'Added Successfully');
        }else {
            return back()->with('success', 'Registration was not successful!');
        }
    }

    public function show($id){
        dd($id);
    }
}
