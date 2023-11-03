<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateSettingsRequest extends FormRequest
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
            'project_name'=>'required',
            'project_logo'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'about_application'=>'required',
            'application_service'=>'required',
            'funder_name'=>'required',
            'funder_logo'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'funder_description'=>'required',
            'implementing_entity_name'=>'required',
            'implementing_entity_logo'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'implementing_entity_description'=>'required',
            'email'=>'nullable|email',
            'whatsapp_number' => 'nullable|regex:/^[1-9][0-9]+/|digits:9|starts_with:77,73,71,70',
            'phone_number' => 'required|regex:/^[1-9][0-9]+/|digits:9|starts_with:77,73,71,70',

        ];
    }

    public function messages(){
        return [
            'project_name.required' =>   __('validation.required') ,
            'project_logo.required' =>   __('validation.required') ,
            'project_logo.image' =>   __('validation.image') ,
            'project_logo.mimes' =>   __('validation.mimes') ,
            'project_logo.max' =>   __('validation.max') ,
            'about_application.required' =>   __('validation.required') ,
            'application_service.required' =>   __('validation.required') ,
            'funder_name.required' =>   __('validation.required') ,
            'funder_logo.required' =>   __('validation.required') ,
            'funder_logo.image' =>   __('validation.image') ,
            'funder_logo.mimes' =>   __('validation.mimes') ,
            'funder_logo.max' =>   __('validation.max') ,
            'funder_description.required' =>   __('validation.required') ,
            'implementing_entity_name.required' =>   __('validation.required') ,
            'implementing_entity_logo.required' =>   __('validation.required') ,
            'implementing_entity_logo.image' =>   __('validation.image') ,
            'implementing_entity_logo.mimes' =>   __('validation.mimes') ,
            'implementing_entity_logo.max' =>   __('validation.max') ,
            'implementing_entity_description.required' =>   __('validation.required') ,
            'email.nullable' =>   __('validation.nullable') ,
            'email.email' =>   __('validation.email') ,
            'whatsapp_number.nullable' =>   __('validation.nullable') ,
            'whatsapp_number.digits'        =>__('validation.digits'),
            'whatsapp_number.starts_with'   =>__('validation.starts_with'),
            'phone_number.required' =>   __('validation.required') ,
            'phone_number.digits'        =>__('validation.digits'),
            'phone_number.starts_with'   =>__('validation.starts_with'),
        ];
    }
}
