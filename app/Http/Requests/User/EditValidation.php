<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class EditValidation extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'              => 'required|max:50',
            'email'             => 'required | unique:users,email,'.$this->request->get('id'),
        ];
    }

    public function messages()
    {
        return [
            'name.required'              => 'Please, Add User Name.',
            'email.required'             => 'Please, Add Email.',
            'email.unique'               => 'Please, Add Unique Email.',
        ];
    }
}
