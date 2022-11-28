<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;


class MyPersonnageController extends Controller
{
    public function index()
    {
        $personnage = Personnage::where('user_id', session('user')->id, 'user_id'=='id')->get();
        return view('mes_perso/index', ['personnages' => $personnage]);
    }
    //page vos personnages with my id
 
}
