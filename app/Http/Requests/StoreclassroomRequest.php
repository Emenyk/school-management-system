<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreclassroomRequest extends FormRequest
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
            'uniqueID' => 'nullable|unique:classroom,uniqueID',
            'name' => 'required|string|max:255',
            'classTeacher' => 'required',
            'status' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,png,jpg|max:2048',
        ];
    }
}

