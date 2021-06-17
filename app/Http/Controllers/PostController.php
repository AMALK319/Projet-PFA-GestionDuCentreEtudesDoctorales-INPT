<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
   
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class PostController extends Controller
{
 

                                
  
    public function choose()
    {
        $user_id=auth()->user()->id;
        $roles = DB::select('select role_id from users where id= ?;', [$user_id]);
        return view('admin.choice', compact( 'roles' ) );
    }
    public function index()
    {
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
