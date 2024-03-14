<?php

namespace App\Http\Controllers;

use App\Models\Tecnica;
use Illuminate\Http\Request;
use PHPUnit\Event\Test\TestStubForIntersectionOfInterfacesCreatedSubscriber;

class TecnicaController extends Controller
{
    public function index()
    {
        $tecnicas = Tecnica::all();
        return view('tecnicas.index',compact('tecnicas'));
}

public function create()
    {
        return view('tecnicas.create');
    }

    public function store(Request $request)
    {
        Tecnica::create($request->all());
        //Idioma::create(['nombre' => $request-> nombre1]);
        return redirect(route('tecnicas.index'));
    }

    public function edit($id)
    {
        $tecnica = Tecnica::find($id);
        return view('tecnicas.edit', compact('tecnica'));
    }

    public function update($id,  Request $request)
    {
        $tecnica = Tecnica::find($id);
        $tecnica->descripcion = $request->descripcion;
        $tecnica->save();
        return redirect(route('tecnicas.index'));
    }

    public function destroy($id){
        
        $tecnica = Tecnica::find($id);
        $tecnica->delete();
        return redirect(route('tecnicas.index'));
    }

    public function show($id)
{
    // Lógica para mostrar un recurso específico (usando el ID)
}
}



