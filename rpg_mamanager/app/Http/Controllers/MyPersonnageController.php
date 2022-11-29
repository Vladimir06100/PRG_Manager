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
    //function edit my personnage
    public function edit(Personnage $personnage)
    {
        $personnage = Personnage::find($personnage->id);
        return view('mes_perso/edit', ['personnage' => $personnage]);
    }
    //function update my personnage
    public function update(Request $request, Personnage $personnage)
    {
        //with fill
        $personnage->fill($request->all());
        $personnage->save();
        return redirect()->route('my_personnages');
    }
}
