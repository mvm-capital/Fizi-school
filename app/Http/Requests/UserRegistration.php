<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistration extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Ensure authorization is allowed
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'], // 'confirmed' matches 'password_confirmation'
        ];
    }

    /**
     * Get custom validation messages for the request.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'name.required' => 'Please enter your full name.',
            'email.required' => 'Please enter your email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'Please enter your password.',
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }
}
