<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
Route::get('/', [UserController::class, 'index'])->name('index');

/* page inscription recuperation de formulaire */
Route::get('/inscription', [AuthController::class, 'get_signup'])->name('auth.get_signup');
/* page inscription traitement formulaire */
Route::post('/inscription', [AuthController::class, 'signup'])->name('auth.signup');
/* page connexion recuperation de formulaire */
Route::get('/connexion', [AuthController::class, 'get_signin'])->name('auth.get_signin');
/* page connexion traitement(envoie) formulaire */
Route::post('/connexion', [AuthController::class, 'signin'])->name('auth.signin');
/* page profil */
Route::get('/profil/{user}', [AuthController::class, 'profil'])->name('profil')->where('id', '[0-9]+');
/* page deconnexion */
Route::get('/deconnexion', [AuthController::class, 'logout'])->name('auth.logout');



