<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Nomi kiritilmadi!',
            'image.required' => 'Rasm kiritilmadi!',
            'image.max' => 'Yuklanayotgan fayl hajmi 2 mb katta!',
        ];
    }

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
            'name' => 'required|min:2|max:255',
            'image' => 'required|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
