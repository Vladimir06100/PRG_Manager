<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Personnage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'nom' => 'required|string|max:255|min:3|unique:personnages',
            'description' => 'required|string|max:255|min:3',
            'specialite' => 'required',
            'image' => 'textLong|nullable|string',
            'magie' => 'required|integer|min:0|max:100',
            'force' => 'required|integer|min:0|max:100',
            'agilite' => 'required|integer|min:0|max:100',
            'intelligence' => 'required|integer|min:0|max:100',
            'vie' => 'required|integer|min:0|max:100',
        ];
    }
}

