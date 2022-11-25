<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User as UserRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function get_signin()
    {
        return view('auth.signin');
    }

    public function signin(Request $request, User $user)
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
            return redirect()->route('auth.signin')->withErrors(['Email incorrect'])->withInput();
        }
        if(Hash::check($password, $user->password)){
        //if (!password_verify($password, $user->password)) {
            return redirect()->route('auth.signin')->withErrors(['Mot de passe incorrect'])->withInput();
        }

        session(['user' => $user]);
        return redirect()->route('profil', $user)->with('user', $user);

    }

    public function get_signup()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'pseudo' => 'required|min:3|max:20|unique:users',
            'nom' => 'required|min:3|max:20',
            'prenom' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20'
        ]);
        $user = new User();
        $user->pseudo = $request->input('pseudo');
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->password =Hash::make($request->input('password'));
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

    public function profil(Request $request, User $user)
    {
        // PROFIL
        return view('profil')->with('user', $user);
    }
 
}
