<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function get_signin()
    {
        return view('auth.signin');
    }

    public function auth(Request $request) 
    {
        // POST CONNEXION
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->route('auth.signin')->with('error', 'Email ou mot de passe incorrect');
        }
        if (!password_verify($password, $user->password)) {
            return redirect()->route('auth.signin')->with('error', 'Email ou mot de passe incorrect');
        }
         
        session(['user' => $user]);

        return redirect()->route('index')->with('success', 'Vous êtes connecté');

    }

    public function get_signup()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'pseudo' => 'required|min:3|max:20',
            'nom' => 'required|min:3|max:20',
            'prenom' => 'required|min:3|max:20',
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ]);

    }

    public function logout()
    {
        // DECONNEXION
    }

    public function profil()
    {
        // PROFIL
    }
}
