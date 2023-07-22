<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    public function messages(): array
    {
        return [
            'name.required' => 'Nomi kiritilmadi!',
            'price.required' => 'Narx kiritilmadi!',
            'image.required' => 'Rasm kiritilmadi!',
            'image.max:2048' => 'Rasm hajmi 2 mb dan katta!',
            'images.required' => 'Rasm kiritilmadi!',
            'images.max:2048' => 'Rasm hajmi 2 mb dan katta!',
            'colors.required' => 'Ranglar kiritilmadi!',
        ];
    }
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:3', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'content' => ['string'],
            'image.*' => ['mimes:jpeg,png,jpg,gif,svg', 'required', 'max:2048'],
            'images.*' => ['mimes:jpeg,png,jpg,gif,svg,webp,jfif', 'required', 'max:2048'],
            'colors' => ['required'],
        ];
    }
}
