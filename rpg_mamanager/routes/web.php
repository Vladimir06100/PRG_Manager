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

Route::get('/inscription', [AuthController::class, 'get_signup'])->name('auth.get_signup');
Route::post('/inscription', [AuthController::class, 'signup'])->name('auth.signup');
Route::get('/connexion', [AuthController::class, 'get_signin'])->name('auth.get_signin');
Route::post('/connexion', [AuthController::class, 'signin'])->name('auth.signin');

/* page profil */
# Route::get('/rpg_manager/profil', [UserController::class, 'profil'])->name('user.profil')->where('id', '[0-9]+');


