<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $buscar_estudiante = $request->input('buscar_estudiante');

        if ($buscar_estudiante) {
            $estudiantes = Estudiante::where('nombre', 'LIKE', "%" . $buscar_estudiante . "%")->with('informatica')->get();
        } else {
            $estudiantes = Estudiante::with('informatica')->get();
        }

        // Para debugear esta variable
        // dd($estudiantes);

        return view('crud', compact('estudiantes'));
    }
}
