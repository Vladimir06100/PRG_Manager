<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User as UserRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Get inscription
    public function get_signin()
    {
        return view('auth.signin');
    }

    public function signin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect()->route('auth.signin')->withErrors(['Email incorrect'])->withInput();
        }
        // fonction pas car accès a la base de donnée avec n'importe quel mot de passe
        //if(Hash::check($password, $request->password)){
       if (!password_verify($password, $user->password)) {
            return redirect()->route('auth.signin')->withErrors(['Mot de passe incorrect'])->withInput();
        }
        session(['user' => $user]);
        return redirect()->route('profil')->with('success', 'Vous êtes connecté');
    }

    public function get_signup()
    {
        return view('auth.signup');
    }

    public function signup(UserRequest $request, User $user)
    {
        // POST INSCRIPTION
        $user = new User();
        $user->pseudo = $request->input('pseudo');
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        session(['user' => $user]);
        return redirect()->route('profil', $user )->with('success', 'Votre compte a bien été créé');
    }

    public function logout()
    {
        // DECONNEXION
        session()->forget('user');
        return redirect()->route('index')->with('success', 'Vous êtes déconnecté');
    }

    public function profil()
    {
        // PROFIL
        return view('profil')->with('user', session('user'));
    }
 
}
