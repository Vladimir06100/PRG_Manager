<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGroup extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'name' => 'string|min:3|max:255',
            'description' => 'string|min:3',
            'image' => 'url|nullable|string',
            'personnage_id1' => 'nullable',
            'personnage_id2' => 'nullable',
            'personnage_id3' => 'nullable',
            'personnage_id4' => 'nullable',
            'personnage_id5' => 'nullable',

        ];
    }
}
