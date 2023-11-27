<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ProductRequest extends FormRequest
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
            'product_name' => ['required', 'string', 'max:255'],
            'product_description' => ['required', 'text', 'max:1000'],
            'product_price' => ['required', 'numeric', 'max:10'],
            'product_status' => ['required', 'string', 'max:20'],
            'images.*' => ['nullable', 'image'],
            'fk_category_id' => ['required', 'numeric', 'max:4'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */

   

}
