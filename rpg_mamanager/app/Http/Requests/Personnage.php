<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;


class Personnage extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
            'nom' => 'required|string|max:255|min:3|unique:personnages',
            'description' => 'required|string|min:3',
            'specialite' => 'required',
            'image' => 'url|nullable|string',
            'magie' => 'required|integer|min:0|max:100',
            'force' => 'required|integer|min:0|max:100',
            'agilite' => 'required|integer|min:0|max:100',
            'intelligence' => 'required|integer|min:0|max:100',
            'vie' => 'required|integer|min:0|max:100',
        ];
    }
}
