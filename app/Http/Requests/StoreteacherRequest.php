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

            // 'name' => 'equired|string|max:255',
            // 'email' => 'equired|string|email|max:255|unique:students',
            // 'password' => 'equired|string|min:8|confirmed',



        ];
        return [
            'uniqueID' => 'nullable|string|max:255|unique:teachers',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:teachers|max:255',
            'password' => 'required|string|min:8|confirmed',
            'DOB' => 'required|date',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'subject_id' => 'required|integer',
            'image' => 'nullable|image|mimes:png,jpg,png,jpg|max:2048',
        ];
    }
}
