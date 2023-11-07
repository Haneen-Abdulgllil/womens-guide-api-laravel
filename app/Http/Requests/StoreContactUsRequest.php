<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            // 'emailorphone' => [
            //     'required',
            //     function ($attribute, $value, $fail) {
            //         if (!filter_var($value, FILTER_VALIDATE_EMAIL) && !preg_match('/^\+?[0-9]{1,4}?[-. ]?\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', $value)) {
            //             // $fail('Please enter a valid email or phone number.');
            //             $fail('الرجاء ادخال بريد الكتروني او رقم هاتف صحيح!.');
            //         }
            //     },
                
            // ],
            'name'=>'required',
            'emailorphone'=>'required|email|regex:/^[1-9][0-9]+/|digits:9|starts_with:77,73,71,70',
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


