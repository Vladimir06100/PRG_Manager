<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* page principale */
Route::get('/', function () {
    return view('base');
});
/* page connexion */
Route::get('/rpg_manager/connexion', function () {
    return view('/rpg_manager/connexion');
});
/* page inscription */
Route::get('/rpg_manager/inscription', function () {
    return view('/rpg_manager/inscription');
});