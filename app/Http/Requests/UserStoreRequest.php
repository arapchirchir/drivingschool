<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'user_email' => 'unique:registrations,user_email,except,student_id',
            'user_identification' => 'required|unique:registrations,user_identification',
            'course_branch' => 'required',
            'course_selection' => 'required',
        ];
    }

    // Custom Messages
    public function messages()
    {
        return [
            'first_name.required' => 'Please enter your first name!',
            'last_name.required' => 'Please enter your last name!',
            'phone_number.required' => 'Phone Number is required!',
            'gender.required' => 'Gender is required',
            'user_identification.required' => 'ID/Passport No. is required',
            'course_branch.required' => 'Branch is required',
            'course_selection.required' => 'Course is required',
        ];
    }
}
