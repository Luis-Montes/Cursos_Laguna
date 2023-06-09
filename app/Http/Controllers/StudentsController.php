<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Curso;

use App\Models\Alumno;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        $cursos = Curso::all();
        $alumnoCurso = Alumno::with('curso')->get();

        return view('acciones.students', ['alumnos' => $alumnos, 'cursos' => $cursos], compact('alumnos'));
    }

    public function store(Request $request) {
        // $this->validate($request, [
        //     'name' => 'required|max:70',
        //     'matricula' => 'unique:inscription',
        // ]);

        dd($request);

        // Alumno::create([
        //     'name' => $request->name
        // ]);
    }
}
