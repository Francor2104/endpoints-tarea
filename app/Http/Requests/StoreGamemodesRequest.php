<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGamemodesRequest extends FormRequest
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
                'name' => 'required|string',
                'map' => 'required|string',
                'max-players' => 'required|integer',
                'rotative' => 'required|boolean',
        ];
    }

    public function messages()
{
    return [
            'name.required' => 'All maps need a name',
            'map.required' => 'We need somewhere to fight',
            'max-players.required' => 'we need some fighters',
            'max-players.max' => 'That\'s too many fighters!',
            'rotative.required' => 'We need to know if we like playing it or not so that you can remove it regardless',
    ];
}
}
