<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PatientFormRequest extends Request
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
            //define validation rules here 
            'name' => 'required|min:3', 
            'contact' => 'required|max:12', 
            'age' => 'required', 
            'bloodgroup' => 'required', 
             
        ];
    }
}
