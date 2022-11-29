<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonnageController;
use App\Http\Controllers\RandController;
use App\Http\Controllers\MyPersonnageController;

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
Route::get('/', [PersonnageController::class, 'index'])->name('index');

Route::get('/inscription', [AuthController::class, 'get_signup'])->name('auth.get_signup');
/* page inscription traitement formulaire */
Route::post('/inscription', [AuthController::class, 'signup'])->name('auth.signup');

/* page connexion recuperation de formulaire */
Route::get('/connexion', [AuthController::class, 'get_signin'])->name('auth.get_signin'); #getlogin
/* page connexion traitement(envoie) formulaire */
Route::post('/connexion', [AuthController::class, 'signin'])->name('auth.signin'); #login

/* page profil */
/* remplacement du parametre {user} par service du session avec function session active meme en rechargement */
Route::get('/me', [AuthController::class, 'profil'])->name('profil'); #profil
/* page deconnexion */
Route::get('/deconnexion', [AuthController::class, 'logout'])->name('auth.logout');

/* page create personnage */
route::resource('personnages', PersonnageController::class);

// create one route for each method in the controller rand
Route::get('/rand', [RandController::class, 'rand'])->name('rand');

// create route for level up
Route::get('/randLevelUp', [RandController::class, 'randLevelUp'])->name('randLevelUp');

// create route for my personnage with my id
Route::get('/my_personnages', [MyPersonnageController::class, 'index'])->name('my_personnages')->middleware('auth');

// create route for edit my personnage with my id
Route::any('/my_personnages/{personnage}/edit', [MyPersonnageController::class, 'edit'])->name('my_personnages.edit')->middleware('auth')->where('personnage', '[0-9]+');

// create route for update my personnage with my id
Route::any('/my_personnages/{personnage}', [MyPersonnageController::class, 'update'])->name('my_personnages.update')->middleware('auth')->where('personnage', '[0-9]+');