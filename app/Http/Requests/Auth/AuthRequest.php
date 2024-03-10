<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check() == false;
    }

    public function rules(): array
    {
        return [
            'login' => [
                'required',
                'string',
                'email',
                'exists:users,email'
            ],
            'password' => [
                'required',
                'string',
                'min:8'
            ]
        ];
    }
}
