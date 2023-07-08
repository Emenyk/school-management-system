<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreteacherRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [

            'name' => 'equired|string|max:255',
            'email' => 'equired|string|email|max:255|unique:students',
            'password' => 'equired|string|min:8|confirmed',

        ];
    }
}
