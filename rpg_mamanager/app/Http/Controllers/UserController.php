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
        session()->get('user');
        $user = User::all();
        return view('index')->with('user', $user);
    }

    //
   
}
