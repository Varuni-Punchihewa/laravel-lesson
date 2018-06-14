<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
			'first_name' => 'required',
			'last_name' => 'required',
			'username' => 'required|unique:users,username',
			'password' => 'required',
		];
    }
	
	public function messages()
    {
        return [
			'first_name.required' => 'First Name required',
			'last_name.required' => 'Last Name required',
			'username.required' => 'Username required',
			'username.unique' => 'Username already created',
			'password.required' => 'Password required',
		];
    }
}
