<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeesStructureRequest extends FormRequest
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
            'fees_structure' => 'required|mimes:png,jpg,pdf'
        ];
    }

    public function messages()
    {
        return[
            'fees_structure.required' => 'Please choose a file',
            'fees_structure.mimes' => 'Please choose a file of only type PNG, JPG or PDF'
        ];
    }
}
