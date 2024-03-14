<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function index()
    {
        $idiomas = idioma::all();
        return view('idiomas.index', compact('idiomas'));
    }

    public function create()
    {
        return view('idiomas.create');
    }

    public function store(Request $request)
    {
        Idioma::create($request->all());
        //Idioma::create(['nombre' => $request-> nombre1]);
        return redirect(route('idiomas.index'));
    }

    public function edit($id)
    {
        $idiomas = idioma::find($id);
        return view('idiomas.edit', compact('idiomas'));
    }

    public function update($id,  Request $request)
    {
        $idioma = Idioma::find($id);
        $idioma->nombre = $request->nombre;
        $idioma->save();
        return redirect(route('idiomas.index'));
    }

    public function destroy($id){
        
        $idioma = Idioma::find($id);
        $idioma->delete();
        return redirect(route('idiomas.index'));
    }

    public function show($id)
{
    // Lógica para mostrar un recurso específico (usando el ID)
}
}

