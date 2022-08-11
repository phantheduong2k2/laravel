<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|min:6|max:32',
            'password'=> 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
             'email.required' => 'Email bat buoc nhap',
             'email.email' => 'Email chua dung dinh dang',
             'email.min' => 'Email toi thieu 6 ki tu',
             'email.min' => 'Email vuot qua 32 ki tu',

             'password.required' => 'Password bat buoc nhap',
             'password.min' => 'Password it nhat 6 ki tu',
        ];
    }
}
