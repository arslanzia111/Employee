<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class data extends FormRequest
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
        return[
            'fname'=>'required|min:2|max:8|string'
        ];
         
    }

    public function messages(){
        return[
            'fname.max' => 'name length should be less than 8!'
        ];


    }
}
