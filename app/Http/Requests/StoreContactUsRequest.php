<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\PhoneOrEmail;

class StoreContactUsRequest extends FormRequest
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
      
            'name'=>'required',
            // 'emailorphone'=>'required|email|regex:/^[1-9][0-9]+/|digits:9|starts_with:77,73,71,70',
            'emailorphone'=> ['required', new PhoneOrEmail],
            'message'=>'required',
        ];
    }

    public function messages(){
        return [
            'name.required' =>   __('validation.required') ,
            'emailorphone.required' =>   __('validation.required') ,
            'emailorphone.email' =>   __('validation.email') ,
            'emailorphone.digits'        =>__('validation.digits'),
            'emailorphone.starts_with'   =>__('validation.starts_with'),
            'message.required' =>   __('validation.required') ,
        ];
    }
}


