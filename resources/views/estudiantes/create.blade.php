@extends('layouts.principal')

@section('content')

      <form action="{{route('estudiantes.store')}}" method="POST" id="formulario">
     @csrf
     @method('POST')
     <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" aria-describedby="Email" name="email">
    </div> 
    
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre del Esctudiante</label>
      <input type="text" class="form-control" id="nombre" aria-describedby="Nombre" name="nombre">
    </div> 

    <div class="mb-3">
      <label for="telefono" class="form-label">Telefono</label>
      <input type="text" class="form-control" id="telefono" aria-describedby="Telefono" name="telefono">
    </div> 
        
        

        <button type="submit" class="btn btn-primary" id="guardar" value="Guardar">
         Guardar</button>

        <a type="submit" class="btn btn-secondary" href="{{ route('estudiantes.index')}}">
           Cancelar</a>
      </form>
    
@endsection