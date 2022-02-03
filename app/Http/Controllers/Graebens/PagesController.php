<?php

namespace App\Http\Controllers\Graebens;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Models\FeesStructure;
use App\Models\Graebens\Branches;
use App\Models\Graebens\DrivingCourses;
use App\Models\Graebens\Feedback;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Homapage
    public function index(Request $request){
        $fees_structure = FeesStructure::latest()->first();

        return view('pages.homepage', [
            'fees_structure' => $fees_structure
        ]);
    }

    // courses
    public function courses(){
        return view('pages.courses');
    }

    // Online Registration
    public function registration(){
        $branches = Branches::get()->all();
        $courses = DrivingCourses::get()->all();
        return view('pages.online-registration', [
            'branches' => $branches,
            'courses' => $courses
        ]);
    }

    // Branches
    public function school_branches(){
        return view('pages.branches');
    }

    // Our Contacts
    public function contact(){
        return view('pages.contacts');
    }

    // About Us
    public function about_us(){
        return view('pages.about-us');
    }

    // Assessment
    public function driver_assessment(){
        return view('pages.driver-assessment');
    }

    // Download file
    public function feesStructureDownload($fees_structure)
    {
        $file_path = public_path('files' . '/' . $fees_structure);
        return response()->download($file_path, $fees_structure);
    }

    public function feedback(FeedbackRequest $request){
        $feedback = $request->validated();

        if ($feedback) {

            $data = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'message' => $request->message
            ];

            Feedback::create($data);

            return redirect()->back()->with('success', 'Feedback submitted successfully');
        }
    }
}
