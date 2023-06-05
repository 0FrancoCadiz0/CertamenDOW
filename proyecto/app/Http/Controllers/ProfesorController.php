<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function homeProfe(){
        return view('profesor.profe');
    }
}
