<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'surname' => 'required|string|min:2|max:255',
            'phone_number' => 'required|string|min:11|max:12|regex:/^\+[0-9]{1,3}[0-9]{10}$/|unique:users,phone_number',
            'password' => 'required|string|min:8|max:255|same:re_password',
            're_password' => 'required|string'
        ];
    }

    public function messages ():array
    {
        return [
            'required' => 'Все поля должны быть заполнены',
            'phone_number.required' => 'Номер телефона обязателен для заполнения',
            'phone_number.unique' => 'Данный номер телефона уже зарегистрирован',
            'phone_number.regex' => 'Неверный формат номера телефона',
            'same' => 'Подтвердите пароль',
            'password.min' => 'Пароль меньше 8 символов',
        ];
    }
}
