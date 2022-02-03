<?php

namespace App\Http\Controllers;

use App\Models\Graebens\Branches;
use App\Models\Graebens\DrivingCourses;
use App\Models\Graebens\Registration;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Registration::paginate(20);
        $courses = DrivingCourses::get()->all();
        $locations = Branches::get()->all();
        return view('home', [
            'students' => $students,
            'courses' => $courses,
            'locations' => $locations
        ]);
    }

    public function student_registration(){
        return view('graebens.adminregistration');
    }
}
