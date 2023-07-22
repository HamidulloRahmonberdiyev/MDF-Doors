<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Login kiritilmadi!',
            'email.required' => 'Email kiritilmadi!',
            'phone.required' => 'Telefon raqam kiritilmadi!',
            'password.required' => 'Parol kiritilmadi!',
            'password_confirmation.required' => 'Parol tasdiqlanmadi!',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8', 'same:password'],
        ];
    }
}
