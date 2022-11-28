<?php

namespace App\Http\Controllers;

use App\Models\Personnage;
use Illuminate\Http\Request;
use App\Http\Requests\Personnage as PersonnageRequest;

class PersonnageController extends Controller
{
    public function index()
    {
        return view('index')->with('personnages', Personnage::all());
    }
    
    public function create()
    {
        return view('personnages.create');
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PersonnageRequest $personnage)

    {
        $personnage = new Personnage();
        $personnage->nom = $request->nom;
        $personnage->description = $request->description;
        $personnage->specialite = $request->specialite;
        $personnage->image = $request->image;
        $personnage->magie = $request->magie;
        $personnage->force = $request->force;
        $personnage->agilite = $request->agilite;
        $personnage->intelligence = $request->intelligence;
        $personnage->vie = $request->vie;
        $personnage['user_id'] =  session('user')->id;
        $personnage->save();
        return redirect()->route('personnages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personnage $personnage)
  
    {
        $personnage = Personnage::find($personnage->id);
        return view('personnages.show')->with('personnage', $personnage);
        
    }
   // 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
