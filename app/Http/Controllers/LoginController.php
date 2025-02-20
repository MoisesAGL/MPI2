<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Estudiante;

class LoginController extends Controller
{
    // BEGIN Formularios (Frontend)
    public function mostrarFormularioLogin(Request $request) {
        return view('login');
    }
    // END Formularios (Frontend)

    // BEGIN Logica de negocio (Backend)
    public function iniciarSesion(Request $request)
    {
        // Validar los datos de entrada que vienen del formulario en blade
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required'],
        ]);

        // Buscar el usuario en la base de datos
        $usuario = Estudiante::where('usuario', $credentials['username'])
            ->where('contrasena', $credentials['password'])
            ->first();

        if ($usuario) {
            $request->session()->regenerate(); // Prevenir ataques de sesión fija
            return redirect()->intended('crud'); // Redirigir al dashboard
        }

        // Si la autenticación falla, devolver un error
        return back()->withErrors([
            'username' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('username');
    }
    // END Logica de negocio (Backend)
}
