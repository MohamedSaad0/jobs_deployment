<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use  App\Http\Controllers\AuthController;


class AuthRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email|email',
            'password' => 'required|string|confirmed'
        ];
    }

    public function message(){
        $message = array(
            'name.required' => 'Name is required',
            'email.required' => 'email is required',
            'email.unique' => 'this email is already taken',
            'password.required' => 'password is required',
            'password.confirmed' => 'password must match'
        );
    }
}
