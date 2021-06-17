<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DirecteurTheseController extends Controller{


   
    public function index(){
        
          if(Gate::denies('directeur_these')){
           abort(403);
          };
    
          return view('admin.directeur_these.welcome');
    }
    
}
