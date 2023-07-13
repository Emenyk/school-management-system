<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorestudentRequest extends FormRequest
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
            'uniqueID' => 'nullable|string|max:255|unique:students',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:students|max:255',
            'password' => 'required|string|min:8|max:255|confirmed',
            'DOB' => 'required|date',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'classroom' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,png,jpg|max:2048',
        ];
    }


}
