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
            'personnage_id' => 'nullable|unique|exists:personnages,id',
            'personnage_id1' => 'nullable|unique|exists:personnages,id',
            'personnage_id2' => 'nullable|unique|exists:personnages,id',
            'personnage_id3' => 'nullable|unique|exists:personnages,id',
            'personnage_id4' => 'nullable|unique|exists:personnages,id',
            'personnage_id5' => 'nullable|unique|exists:personnages,id',

        ];
    }
}
