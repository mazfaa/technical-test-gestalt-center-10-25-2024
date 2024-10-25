<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            'author' => 'nullable|string|max:100',
            'price_rent' => 'required|numeric|min:0.01',
            'book_category' => 'required|in:MANGA,NOVEL,MAGAZINE',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The book title is required.',
            'price_rent.required' => 'The rental price is required.',
            'price_rent.numeric' => 'The rental price must be a number.',
            'price_rent.min' => 'The rental price must be greater than 0.',
            'book_category.in' => 'The book category is invalid.',
        ];
    }
}
