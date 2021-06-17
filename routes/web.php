<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ChefCedocController;
use App\Http\Controllers\DirecteurTheseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/login', [PostController::class , 'showLogin' ])->name('login');
Route::get('/welcome', [PostController::class, 'index'])->name('admin.professeur.welcome');
Route::get('/compte', [PostController::class, 'showCompte'])->name('admin.professeur.compte');
Route::get('/formations_proposees', [PostController::class, 'showFormations'])->name('admin.professeur.formations_proposées.index');
Route::get('/fparticipants', [PostController::class, 'showParticipants'])->name('admin.professeur.participants.index');
Route::get('/sujets_proposes', [PostController::class, 'showSujets'])->name('admin.professeur.sujets_proposés.index');
Route::get('/candidatures', [PostController::class, 'showCandidatures'])->name('admin.professeur.candidatures.index'); 

//Route::get('/choice', [PostController::class, 'choose'])->name('admin.choice')->middleware('auth');

/* Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'role:professeur', 'prefix' => 'professeur'], function () {
        Route::get('/welcome', [PostController::class, 'index'])->name('admin.professeur.welcome');
        Route::get('/compte', [PostController::class, 'showCompte'])->name('admin.professeur.compte');
        Route::get('/formations_proposees', [PostController::class, 'showFormations'])->name('admin.professeur.formations_proposées.index');
        Route::get('/fparticipants', [PostController::class, 'showParticipants'])->name('admin.professeur.participants.index');
        Route::get('/sujets_proposes', [PostController::class, 'showSujets'])->name('admin.professeur.sujets_proposés.index');
        Route::get('/candidatures', [PostController::class, 'showCandidatures'])->name('admin.professeur.candidatures.index');
    });
    Route::group(['middleware' => 'role:chef de cedoc', 'prefix' => 'chef_cedoc'], function () {
        Route::get('/welcome', [ChefCedocController::class, 'index'])->name('admin.chef_cedoc.welcome');
    });
    Route::group(['middleware' => 'role:directeur de these', 'prefix' => 'directeur_these'], function () {
        Route::get('/welcome', [DirecteurTheseController::class, 'index'])->name('admin.directeur_these.welcome');
    });
}); */

/* Route::group(['prefix'=>'professeur','middleware' => 'auth'], function() {
    Route::get('/welcome', [PostController::class, 'index'])->name('admin.professeur.welcome');
    Route::get('/compte', [PostController::class, 'showCompte'])->name('admin.professeur.compte');
Route::get('/formations_proposees', [PostController::class, 'showFormations'])->name('admin.professeur.formations_proposées.index');
Route::get('/fparticipants', [PostController::class, 'showParticipants'])->name('admin.professeur.participants.index');
Route::get('/sujets_proposes', [PostController::class, 'showSujets'])->name('admin.professeur.sujets_proposés.index');
Route::get('/candidatures', [PostController::class, 'showCandidatures'])->name('admin.professeur.candidatures.index');
});

Route::group(['prefix'=>'chef_cedoc','middleware' => 'auth'], function() {
    Route::get('/welcome', [ChefCedocController::class, 'index'])->name('admin.chef_cedoc.welcome');
});

Route::group(['prefix'=>'directeur_these','middleware' => 'auth'], function() {
    Route::get('/welcome', [DirecteurTheseController::class, 'index'])->name('admin.directeur_these.welcome');
}); */