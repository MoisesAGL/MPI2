<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Informatica;
use App\Request\EditarNotaRequest;

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

    public function editarNota(EditarNotaRequest $request)
    {
        $nota = $request->input('nota');


        return view('crud', compact('estudiantes'));
    }

    public function actualizarNota(Request $request, $id)
    {
        // Validar la nueva nota
        $request->validate([
            'nota' => 'required|integer|min:0|max:20',
        ]);

        // Buscar el registro de informática por ID
        $informatica = Informatica::findOrFail($id);

        // Actualizar la nota
        $informatica->nota = $request->input('nota');
        $informatica->fecha = now();
        $informatica->save();

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Nota actualizada correctamente.');
    }
}
