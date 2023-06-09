<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RetroA;
use Carbon\Carbon;

class ProfesorController extends Controller
{
    public function homeProfe(){
        $RetroA = RetroA::all();
        return view('profesor.profe');
    }
    public function store(Request $request){
        $RetroA = new RetroA();
        $RetroA->profesor_rut = $request->rut;
        $RetroA->comentario = $request->Retroalimentacion;
        $RetroA->fecha = Carbon::now()->toDateString();
        $RetroA->hora = Carbon::now()->toTimeString();
        $RetroA->propuesta_id = $request->id;
        $RetroA->save();
        return redirect()->route('profesor.profe');
    }
}
