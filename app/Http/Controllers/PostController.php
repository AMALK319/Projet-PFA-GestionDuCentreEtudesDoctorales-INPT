<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   
   
  

    public function index()
    {
        $dashboard = 'Acceuil' ;
        return view('admin.professeur.welcome');
    }
    public function showFormations()
    {
        $formations = 'Formations proposées';
        return view('admin.professeur.formations_proposées.index');
    }
    public function showParticipants()
    {

        return view('admin.professeur.participants.index');
    }
    public function showSujets()
    {

        return view('admin.professeur.sujets_proposés.index');
    }
    public function showCandidatures()
    {

        return view('admin.professeur.candidatures.index');
    }
    public function showCompte()
    {
       
        return view('admin.professeur.compte');
    }
    public function showLogin()
    {
       
        return view('auth.login');
    }
}
