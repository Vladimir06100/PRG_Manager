<?php

namespace App\Http\Controllers;

class RandController extends Controller
{
    public function rand()
    {
        $magie = rand(1, 14);
        $force = rand(1, 14);
        $agilite = rand(1, 14);
        $intelligence = rand(1, 14);
        $vie = rand(2, 50);
        return response()->json([
            'magie' => $magie,
            'force' => $force,
            'agilite' => $agilite,
            'intelligence' => $intelligence,
            'vie' => $vie,
        ]);
    }   
    // random Level up
    public function randLevelUp()
    {
        $level = 1;
        $magie = rand(0, 2);
        $force = rand(0, 2);
        $agilite = rand(0, 2);
        $intelligence = rand(0, 2);
        $vie = 5;
        return response()->json([
            'level' => $level,
            'magie' => $magie,
            'force' => $force,
            'agilite' => $agilite,
            'intelligence' => $intelligence,
            'vie' => $vie,
        ]);
    }
}