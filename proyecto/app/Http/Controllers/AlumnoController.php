<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuestas;
use Carbon\Carbon;

class AlumnoController extends Controller
{
    public function homeAlum(){
        $propuestas = Propuestas::all();
        return view('alumnos.alumnos',compact('propuestas'));
    }
    public function store(Request $request){
        $Propuesta = new Propuestas();
        $Propuesta->estudiante_rut = $request->rut;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfPath = $pdf->store('pdfs', 'public');
            $Propuesta->documento = $pdfPath;
        } 
        $Propuesta->fecha = Carbon::now();
        $Propuesta->estado = 1;
        $Propuesta->save();
        return redirect()->route('alumnos.alumnos');
    }
}