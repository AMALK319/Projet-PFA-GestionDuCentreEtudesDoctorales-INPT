<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Candidat;

class CandidatController extends Controller
{
    public function index()
    {
        
        return view('candidat.auth.index');
    }
   
}