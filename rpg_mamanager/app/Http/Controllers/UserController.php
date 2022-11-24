<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User as UserRequest;


class UserController extends Controller
{
    //index
    public function index()
    {
        $user = User::all();
        return view('index')->with('user', $user);
    }
    //connexion
    public function connexion(Request $request, User $user)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (password_verify($request->password, $user->password)) {
                session(['user' => $user]);
                return redirect()->route('index');
            }
        }
        return redirect()->route('user.connexion');
    }
    
    public function verification(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
        if ($user) {
            if (password_verify($password, $user->password)) {
                session(['user' => $user]);
                return redirect()->route('index');
            }
        }
    }

    // create form inscription
    public function create()
    {
        return view('/rpg_manager/inscription');
    }
    // store inscription
    // creation utilisateur
    public function store(Request $request, User $user)
    {
        $user = new User();
        $user->pseudo = $request->input('pseudo');
        $user->nom = $request->input('nom');
        $user->prenom = $request->input('prenom');
        $user->email = $request->input('email');
        $user->password =$request->input('password');
        User::create($request->all());
        return redirect()->route('index');
    }

    //deconnexion
    public function deconnexion()
    {
        session()->forget('user');
        return redirect()->route('index');
    }
   
    //affichage des utilisateurs
    public function profil(Request $request, $id)
    {
        $value = $request->session()->get('key');
        $user = User::find($id);
        return view('rpg_manager/profil', ['user' => $user]);
    }

}
