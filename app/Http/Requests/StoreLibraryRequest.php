<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibraryRequest extends FormRequest
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
            'asset' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'year' => 'nullable|integer|min:1900|max:2023',
            'classroom' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'file' => 'nullable|file',
            
        ];

    }

}
