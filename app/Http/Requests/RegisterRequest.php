<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

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
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'register_email' => 'required|string|max:255|email|unique:users,email',
            'register_password' => [
                'required',
                Password::min(8)->letters()->numbers()
            ],
            'password_confirmation' => ['required', 'same:register_password'],
            'subscribed' => 'nullable|boolean',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'password_confirmation.same' => 'The password confirmation does not match.',
            'register_password.regex' => 'Password must be at least 8 characters and must contain letters and numbers',
        ];
    }
}
