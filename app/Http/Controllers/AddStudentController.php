<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    public function index(){        
        $cursos = Curso::all();
        $matricula = Curso::distinct()->get();

        return view('acciones.add_student', ['cursos' => $cursos, 'matricula' => $matricula]);
    }

    public function store(Request $request) {
        dd($request);
    }
}
