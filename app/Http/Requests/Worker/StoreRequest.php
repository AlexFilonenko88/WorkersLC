<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле обязательно для заполнения',
            'name.string' => 'Поле должно быть строкой',
            'surname.required' => 'Поле обязательно для заполнения',
            'surname.string' => 'Поле должно быть строкой',
            'email.required' => 'Поле обязательно для заполнения',
            'email.email' => 'Поле должно быть формата электронной почты',
            'age.integer' => 'Поле должно быть числом',
            'description.string' => 'Поле должно быть строкой',
            'is_married.string' => 'Поле должно быть строкой',
        ];
    }
}
