<?php

namespace App\Http\Controllers\Graebens;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\Graebens\Registration;

class RegistrationController extends Controller
{
    //
    public function register(UserStoreRequest $request){

        $validator = $request->validated();

        if ($validator) {

            $data = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                'gender' => $request->gender,
                'user_identification' => $request->user_identification,
                'user_email' => $request->user_email,
                'course_branch' => $request->course_branch,
                'course_selection' => $request->course_selection
            ];

            Registration::create($data);

            return back()->with('success', 'Registration successful');
        }else{
            return back()->with('success', 'Registration was not successful');
        }

    }
}
