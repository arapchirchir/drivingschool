<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'branch_name' => 'required',
            'branch_contact' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'branch_name.required' => 'Branch name should not be empty!!',
            'branch_contact.required' => 'Branch contact should not be empty!!'
        ];
    }
}
