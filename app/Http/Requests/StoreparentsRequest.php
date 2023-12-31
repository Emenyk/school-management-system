<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreparentsRequest extends FormRequest
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

            'name' => 'required|max:255',
            'email' => 'required|email|unique:parents|max:255',
            'password' => 'required|string|min:8|confirmed',
            'telephone' => 'required|max:255',
            'gender' => 'required|max:255',
            'address' => 'required|max:255',
            'image' => 'nullable|image|mimes:png,jpg,png,jpg|max:2048',

        ];
    }
}
