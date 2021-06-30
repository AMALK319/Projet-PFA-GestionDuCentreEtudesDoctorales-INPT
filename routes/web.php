<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CandidaturesController;
use App\Http\Controllers\CE_SujetsController;
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

Route::group( [],function(){
    Route::get('/', [PostController::class , 'index' ])->name('admin.professeur.welcome');
    Route::get('/compte', [PostController::class , 'showCompte' ])->name('admin.professeur.compte');
    Route::get('/formations_proposees', [PostController::class , 'showFormations' ])->name('admin.professeur.formations_proposées.index');
    Route::get('/fparticipants', [PostController::class , 'showParticipants' ])->name('admin.professeur.participants.index');
    Route::get('/sujets_proposes', [PostController::class , 'showSujets' ])->name('admin.professeur.sujets_proposés.index');
    
    //Candidatures
    Route::get('/candidatures', [CandidaturesController::class , 'index' ])->name('admin.professeur.candidatures.index');
    Route::get('/consulter', [CandidaturesController::class , 'show' ])->name('admin.professeur.candidatures.candidature');
});

Route::group( [],function(){
    
    //Sujets
    Route::get('/chef_equipe/sujets', [CE_SujetsController::class , 'showSujets' ])->name('admin.chef_equipe.sujets.index');
    //Route::get('/chef_equipe/sujets', [CE_SujetsController::class , 'showSujets' ])->name('admin.chef_equipe.sujets.index');
});