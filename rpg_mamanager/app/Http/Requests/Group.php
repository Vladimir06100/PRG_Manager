<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Group extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'name' => 'required|string|min:3|max:255|unique:groups',
            'description' => 'required|string|min:3',
            'image' => 'url|nullable|string|unique:groups',
            'personnage_id' => 'nullable|uuid|exists:personnages,id',
            'personnage_id1' => 'nullable',
            'personnage_id2' => 'nullable',
            'personnage_id3' => 'nullable',
            'personnage_id4' => 'nullable',
            'personnage_id5' => 'nullable',

        ];
    }
}
