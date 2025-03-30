<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logro;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class LogroController extends Controller
{
    public function index()
    {
        // Obtener todos los logros
        $logros = Logro::all();

        // Obtener los logros obtenidos por el usuario autenticado
        $usuario = Auth::user();
        $logrosObtenidos = $usuario ? $usuario->logros->pluck('id_logro')->toArray() : [];

        return view('logros', compact('logros', 'logrosObtenidos'));
    }
}