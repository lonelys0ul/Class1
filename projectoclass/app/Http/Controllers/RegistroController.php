<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Personas;
class RegistroController extends Controller
{
    public function index(){
        return view('registro');

    }
    public function registrar(Request $request){

        $request->validate([
            'nombre' => 'required|string',
            'celular' => 'required',
            'email' => 'required'
        ]);
        $data = $request->all();
        $this->create($data);
        return redirect()->back()->withinput()->with('correcto', 'Usuario registrado correctamente');
    }
    public function create(array $data)
    {
        //dd($data);
        Personas::create([
            'nombre_completo' => $data['nombre'],
            'celular' => $data['celular'],
            'email' => $data['email'],
        ]);
    }
}
