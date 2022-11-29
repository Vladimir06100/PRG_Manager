<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Http\Requests\LevelUp as LevelUpRequest;
use Ramsey\Uuid\Type\Integer;

class MyPersonnageController extends Controller
{
    public function index()
    {
        $personnage = Personnage::where('user_id', session('user')->id, 'user_id' == 'id')->get();
        return view('mes_perso/index', ['personnages' => $personnage]);
    }
    //function edit my personnage
    public function edit(Personnage $personnage)
    {
        $personnage = Personnage::find($personnage->id);
        return view('mes_perso/edit', ['personnage' => $personnage]);
    }
    //function update my personnage
    public function update(LevelUpRequest $request, Personnage $personnage)
    {
        $personnage->nom = $request->nom;
        $personnage->description = $request->description;
        $personnage->specialite = $request->specialite;
        if ($request->level) {$personnage->level += (int)$request->level;}
        if ($request->magie) {$personnage->magie += (int)$request->magie;}
        if ($request->force) {$personnage->force += (int)$request->force;}
        if ($request->agilite) {$personnage->agilite += (int)$request->agilite;}
        if ($request->intelligence) {$personnage->intelligence +=(int)$request->intelligence;}
        if ($request->vie) {$personnage->vie += (int)$request->vie;}
        $personnage->save();
        return redirect()->route('my_personnages');
    }
}
