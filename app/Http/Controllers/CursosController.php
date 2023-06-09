<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        $search = $request->input('search');
        $query = Curso::query();

        if ($search) {
            $query->where('name', 'LIKE', '%'. $search . '%')
                ->orWhere('level', 'LIKE', '%' . $search . '%');
        }

        $cursos = $query->get();


        return view('acciones.cursos', ['cursos' => $cursos, 'search' => $search]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|min:5',
            'level' => 'required|min:5',
            'duration' => 'required',
            'price' => 'required'
        ]);

        

        Curso::create([
            'name' => $request->name,
            'level' => $request->level,
            'duration' => $request->duration,
            'price' => $request->price
        ]);

        return redirect()->route('cursos');
    }


}
