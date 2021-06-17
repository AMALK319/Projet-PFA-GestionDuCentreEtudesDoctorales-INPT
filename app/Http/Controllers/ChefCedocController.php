<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ChefCedocController extends Controller
{
    public function index()
    {
        if (Gate::denies('chef_cedoc')) {
            abort(403);
        };
        return view('admin.chef_cedoc.welcome');
    }
}
