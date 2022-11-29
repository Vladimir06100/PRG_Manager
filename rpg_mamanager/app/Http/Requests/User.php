<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            //
            'pseudo' => 'required|min:3|max:20|unique:users',
            'nom' => 'required|min:3|max:20',
            'prenom' => 'required|min:3|max:20',
            'email' => 'required|email|max:255|unique:users',
            'password' => [
                'required',
                Password::min(8)
                    ->letters(1)
                    ->numbers(1)
                    ->symbols(1)
                    ->uncompromised(),
                
            ],
        ];
    }
}
