<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFundersRequest extends FormRequest
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
            'facebook_account'=>'nullable|url',
            'linkedin_account'=>'nullable|url',
            'email'=>'nullable|email',
            'phone_number' => 'required|regex:/^[1-9][0-9]+/|digits:9|starts_with:77,73,71,70',

        ];
    }

    public function messages(){
        return [
            'name.required' =>   __('validation.required') ,
            'description.required' =>   __('validation.required') ,
            // 
            'facebook_account.nullable' =>   __('validation.nullable') ,
            'linkedin_account.nullable' =>   __('validation.nullable') ,
            'email.nullable' =>   __('validation.nullable') ,
            // 
            'facebook_account.url' =>   __('validation.url') ,
            'linkedin_account.url' =>   __('validation.url') ,
            'email.email' =>   __('validation.email') ,
        ];
    }
}
