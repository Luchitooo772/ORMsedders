<?php

namespace App\Http\Controllers;

use App\Models\Docente; // 👈 1. Importa el Modelo que acabas de crear
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Resuelve la ruta /docentes y carga la vista con los datos.
     */
    public function index()
    {
        // 2. Busca todos los docentes en la base de datos
        $docentes = Docente::all();

        // 3. Pasa la variable $docentes a la vista
        // NOTA: Reemplaza 'ORM.orm' por el nombre real de tu vista si es diferente.
        // Si tu vista está en resources/views/docentes/index.blade.php, usa 'docentes.index'.
        return view('ORM.orm', compact('docentes')); 
    }
}