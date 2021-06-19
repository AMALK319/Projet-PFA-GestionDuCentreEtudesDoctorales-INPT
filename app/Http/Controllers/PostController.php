<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   
   
  

    public function index()
    {
        $dashboard = 'Acceuil' ;
        return view('admin.professeur.welcome', ['title' => $dashboard]);
    }
    public function showFormations()
    {
        $formations = 'Formations proposées';
        return view('admin.professeur.formations_proposées.index' , ['title' => $formations]);
    }
    public function showParticipants()
    {

        return view('admin.professeur.participants.index');
    }
    public function showSujets()
    {
        $sujets = 'Sujets proposés';
        return view('admin.professeur.sujets_proposés.index', ['title' => $sujets]);
    }
    public function showCandidatures()
    {
        $candidatures = 'Candidatures';
        return view('admin.professeur.candidatures.index' ,  ['title' => $candidatures]);
    }
    public function showCompte()
    {
        $compte = 'Mon Compte';
        return view('admin.professeur.compte', ['title' => $compte]);
    }

    public function candidature()
    {
        $candidatures = 'Candidatures';
        return view(' admin.professeur.candidatures.candidature',  ['title' => $candidatures]);
    }
   
}
