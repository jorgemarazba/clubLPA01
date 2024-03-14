<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        Estudiante::create($request->all());
        //Idioma::create(['nombre' => $request-> nombre1]);
        return redirect(route('estudiantes.index'));
    }

    public function edit($id)
    {
        $estudiantes = Estudiante::find($id);
        return view('estudiantes.edit', compact('estudiantes'));
    }

    public function update($id,  Request $request)
    {
        $estudia = Estudiante::find($id);

        $estudia->email = $request->email;
        $estudia->nombre = $request->nombre;
        $estudia->telefono = $request->telefono;

        $estudia->save();
        return redirect(route('estudiantes.index'));
    }

    public function destroy($id){
        
        $estudia = Estudiante::find($id);
        $estudia->delete();
        return redirect(route('estudiantes.index'));
    }

    public function show($id)
{
    // Lógica para mostrar un recurso específico (usando el ID)
}
}

