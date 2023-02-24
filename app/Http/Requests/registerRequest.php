<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'email' => 'required|email : rfc, dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Tolong masukan email anda.',
            'email.email' => 'Tolong masukan email dengan benar',
            'email.unique' => 'Email anda juga dipakai',
        ];
    }
}
