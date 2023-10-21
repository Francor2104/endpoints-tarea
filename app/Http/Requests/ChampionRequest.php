<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChampionRequest extends FormRequest
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
                'role' => 'required|max:255',
                'difficulty' => 'required|integer|min:1|max:10',
                'release_date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
                'name.required' => 'All maps need a name',
                'map.required' => 'We need somewhere to fight',
                'max_players.required' => 'we need some fighters',
                'max_players.max' => 'That\'s too many fighters!',
                'rotative.required' => 'We need to know if we like playing it or not so that you can remove it regardless',
        ];
    }
}
