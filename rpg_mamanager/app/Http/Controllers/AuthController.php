<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User as UserRequest;
use Illuminate\Support\Facades\Auth;
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
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/me');
        }
        return back()->withErrors([
            'email' => 'Email ou mot de passe incorrect',
        ]);
        /** Version validation manuelle
        *  $email = $request->input('email');
        *  $password = $request->input('password');
        *  $user = User::where('email', $email)->first();
        *  if ($user) {
        *      if (!Hash::check($password, $user->password)) {
        *          session(['user' => $user]);
        *          return redirect()->route('home');
        *      }
        *  }
        *  return back()->withErrors([
        *      'email' => 'Email ou mot de passe incorrect',
        *  ]);
        */
    }

    public function get_signup()
    {
        return view('auth.signup');
    }
    
    public function signup(UserRequest $request, User $user)
    {
        $user = new User();
        $user->pseudo = $request->input('pseudo');
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        Auth::login($user);
        return redirect()->route('profil', $user)->with('success', 'Votre compte a bien été créé');
    }

    public function logout()
    {
        // DECONNEXION
        Auth::logout();
        return redirect()->route('index')->with('success', 'Vous êtes déconnecté');
    }

    public function profil()
    {
        // PROFIL
        return view('profil')->with('user', Auth::user());
    }
}
