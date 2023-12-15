<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOfficeRequest extends FormRequest
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
            'address'=>'required',
            'google_map'=>'nullabe|url',
            'required_actions'=>'required',
            'notes'=>'nullabe',
            'website_url'=>'required|url',
            'logo'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'facebook_account'=>'nullabe|url',
            'linkedin_account'=>'nullabe|url',
            'email'=>'nullabe|email',
            'phone_number' => 'required|regex:/^[1-9][0-9]+/|digits:9|starts_with:77,73,71,70',
        ];
    }

    public function messages()
    {
        return [
            //
            'name.required' =>   __('validation.required') ,
            'description.required' =>   __('validation.required') ,
            'address.required' =>   __('validation.required') ,
            'google_map.nullabe' =>   __('validation.nullabe') ,
            'google_map.url' =>   __('validation.url') ,
            'required_actions.required' =>   __('validation.required') ,
            'notes.nullabe' =>   __('validation.nullabe') ,
            'website_url.required' =>   __('validation.required') ,
            'website_url.url' =>   __('validation.url') ,
            'logo.required' =>   __('validation.required') ,
            'logo.image' =>   __('validation.image') ,
            'logo.mimes' =>   __('validation.mimes') ,
            'logo.max' =>   __('validation.max') ,
            'facebook_account.nullable' =>   __('validation.nullable') ,
            'linkedin_account.nullable' =>   __('validation.nullable') ,
            'email.nullable' =>   __('validation.nullable') ,
            'facebook_account.url' =>   __('validation.url') ,
            'linkedin_account.url' =>   __('validation.url') ,
            'email.email' =>   __('validation.email') ,
            'phone_number.required'=>__('validation.required'),
            'phone_number.regex'         => __('validation.regex'),
            'phone_number.digits'        =>__('validation.digits'),
            'phone_number.starts_with'   =>__('validation.starts_with'),
        ];
    }
}
