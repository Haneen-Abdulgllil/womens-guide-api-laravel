<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubWorkFieldsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name'=>'required',
            'description'=>'required',
            'work_field'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.required' =>   __('validation.required') ,
            'description.required' =>   __('validation.required') ,
            'work_field.required' =>   __('validation.required') ,
        ];
    }
}
