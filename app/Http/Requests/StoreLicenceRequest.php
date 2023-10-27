<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLicenceRequest extends FormRequest
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
            'required_documents'=>'required',
            'procedures'=>'required',
            'issuing_authority'=>'required',
            'fees'=>'required',
            'penalties'=>'required',
            'notes'=>'required',
            'department'=>'required',
            'offices'=>'required',
            'status'=>'required',

        ];
    }

    public function messages(){
        return [
            'name.required' =>   __('validation.required') ,
            'description.required' =>   __('validation.required') ,
            'required_documents.required' =>   __('validation.required') ,
            'procedures.required' =>   __('validation.required') ,
            'issuing_authority.required' =>   __('validation.required') ,
            'fees.required' =>   __('validation.required') ,
            'penalties.required' =>   __('validation.required') ,
            'notes.required' =>   __('validation.required') ,
            'department.required' =>   __('validation.required') ,
            'offices.required' =>   __('validation.required') ,
            'status.required' =>   __('validation.required') ,

        ];
    }
    
}
