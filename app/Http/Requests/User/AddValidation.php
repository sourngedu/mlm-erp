<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class AddValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
			return [
						'name' => 'required|max:50',
						'email' => 'required|email|unique:users',
						'password' => 'required|min:6|confirmed'
			];
		}
		
    public function messages()
    {
        return [
            'name.required'              => 'Please, Add User Name.',
            'email.required'             => 'Please, Add Email.',
            'email.unique'               => 'Please, Add Unique Email.',
            'password.required'          => 'Please, Add Password.'
        ];
    }		
}
