<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    public function index(){

        $codes = Code::all();

        return view('acciones.codigos', ['codes' => $codes]);
    }




    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required'
        ]);

        Code::create([
            'name' => $request->name,
            'code' => $request->code
        ]);

        return redirect()->route('codigos');
    }
}
