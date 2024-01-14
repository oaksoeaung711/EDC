<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomePhotoUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'images[]' => 'image|mimes:png,jpg,jpeg|max:10240'
        ];
    }
}
