<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartmentRequest extends FormRequest
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
            'office_id'=>'required',

        ];
    }

    public function messages(){
        return [
            'name.required' =>   __('validation.required') ,
            'description.required' =>   __('validation.required') ,
            'office_id.required' =>   __('validation.required') ,
            // 'office_id.required' =>  'هذا الحقل مطلوب.' ,
        ];
    }
}
