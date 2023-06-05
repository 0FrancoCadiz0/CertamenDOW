<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function homeAlum(){
        return view('alumnos.alumnos');
    }
}
