<?php

namespace App\Http\Controllers;

use App\Models\User;



class UserController extends Controller
{
    //index
    public function index()

    {
        session()->get('user');
        $user = User::all();
        return view('index')->with('user', $user);
    }
}
