<?php

use App\Http\Controllers\PostController;
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
Route::get('/login', [PostController::class , 'showLogin' ])->name('auth.login');
Route::get('/', [PostController::class , 'index' ])->name('admin.professeur.welcome');
Route::get('/compte', [PostController::class , 'showCompte' ])->name('admin.professeur.compte');
Route::get('/formations_proposees', [PostController::class , 'showFormations' ])->name('admin.professeur.formations_proposées.index');
Route::get('/fparticipants', [PostController::class , 'showParticipants' ])->name('admin.professeur.participants.index');
Route::get('/sujets_proposes', [PostController::class , 'showSujets' ])->name('admin.professeur.sujets_proposés.index');
Route::get('/candidatures', [PostController::class , 'showCandidatures' ])->name('admin.professeur.candidatures.index');