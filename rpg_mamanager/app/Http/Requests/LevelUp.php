<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LevelUp extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            //
            'nom' => 'required|string|max:255|min:3',
            'description' => 'required|string|min:3',
            'image' => 'url|nullable|string',
            'magie' => 'nullable',
            'force' => 'nullable',
            'agilite' => 'nullable',
            'intelligence' => 'nullable',
            'vie' => 'nullable',
        ];
    }
}
