<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorytRequest extends FormRequest
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
            'category_name' => ['required', 'string', 'max:255'],
            'category_description' => ['required', 'text', 'max:1000'],
            'category_priority' => ['required', 'numeric', 'max:10'],
        ];
        
    }
    public function messages(): array
    {
        return [
            'category_name.required' => 'A category name is required',
            'category_description.required' => 'A category description is required',
            'category_priority.required' => 'A category priority is required',
        ];
    }
}
