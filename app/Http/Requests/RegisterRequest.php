<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
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
        'name.required' => 'Nama diperlukan.',
        'name.string' => 'Nama harus berupa string.',
        'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
        'email.required' => 'Email diperlukan.',
        'email.string' => 'Email harus berupa string.',
        'email.email' => 'Email harus valid.',
        'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
        'password.required' => 'Kata sandi diperlukan.',
        'password.string' => 'Kata sandi harus berupa string.',
        'password.min' => 'Kata sandi harus memiliki minimal 8 karakter.',
    ];
}

}
