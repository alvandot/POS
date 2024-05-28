<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string',
        ];
    }

    /**
     * Custom error messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Email diperlukan.',
            'email.email' => 'Email harus valid.',
            'password.required' => 'Kata sandi diperlukan.',
            'password.string' => 'Kata sandi harus berupa string.',
        ];
    }


    public function login(): void
    {
        if (!Auth::attempt($this->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => ['Login Gagal'],
                'password' => ['Login Gagal'],
            ]);
        }

        $this->session()->regenerate();
    }
}

