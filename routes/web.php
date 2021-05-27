<?php

use App\Http\Controllers\ContinentController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\PhotoController;
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

//Home
Route::get('/', function () {
    return view('welcome');
});


//Equipe
Route::resource("/equipe", EquipeController::class);

//Joueur
Route::resource('/joueur', JoueurController::class);

//Photo
Route::resource('/photo', PhotoController::class);
Route::post("photo/{id}/download", [PhotoController::class, 'download']);

// Principale
Route::get('/admin', function(){
    return view('backoffice.principale.principale');
})->name('main');