<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'token'=>'required|string',
            'password'=>'required|string|confirmed',
        ];
    }

    public function messages(){
        return [
            'token.required' =>   __('validation.required') ,
            'token.string' =>   __('validation.string') ,
            'password.required' =>   __('validation.required') ,
            'password.string' =>   __('validation.string') ,
            'password.confirmed' =>   __('validation.confirmed') ,
        ];
    }
}
