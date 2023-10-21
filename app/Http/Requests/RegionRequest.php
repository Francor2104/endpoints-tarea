<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegionRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Las regiones necesitan un nombre.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',
            'description.required' => 'Las regiones necesitan una descripción.',
            'description.max' => 'La descripción no puede tener más de 255 caracteres.',
        ];
    }
}
