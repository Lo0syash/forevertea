<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

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
            'phone_number' => 'required|string|min:11|max:12|regex:/^\+[0-9]{1,3}[0-9]{10}$/',
            'password' => 'required|string|min:8|max:255',
        ];
    }

    public function messages ():array
    {
        return [
            'required' => 'Все поля должны быть заполнены',
            'phone_number.regex' => 'Неверный формат номера телефона',
        ];
    }
}
