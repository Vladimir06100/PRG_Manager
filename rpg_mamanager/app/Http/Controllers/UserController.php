<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    //index
    public function index()
    {
        return view('/index');
    }
    // connexion
    public function connexion()
    {
        return view('rpg_manager/connexion');
    }
    // inscription
    public function inscription()
    {
        return view('rpg_manager/inscription');
    }

}
