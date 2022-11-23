<?php

use Illuminate\Support\Facades\Route;
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
/* page connexion */
Route::get('/rpg_manager/connexion', [UserController::class, 'connexion'])->name('user.connexion');
/* page inscription */
Route::get('/rpg_manager/inscription', [UserController::class, 'inscription'])->name('user.inscription');