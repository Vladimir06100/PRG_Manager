<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;


class RandController extends Controller
{
    // Random number generator for button press with value  of 1-14 for value magie and 1-14 for value force and 1-14 for value agilité and 1-14 for value intelligence
    public function rand()
  
    {
        $magie = rand(1, 14);
        $force = rand(1, 14);
        $agilite = rand(1, 14);
        $intelligence = rand(1, 14);
        //Return the random numbers to the view with JSON
        return response()->json([
            'magie' => $magie,
            'force' => $force,
            'agilite' => $agilite,
            'intelligence' => $intelligence,
        ]);


       // return Response::json(array('magie'=>$magie,'force'=> $force,'agilite'=> $agilite,'intelligence'=> $intelligence));
 }   
}