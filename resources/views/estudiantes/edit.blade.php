@extends('layouts.principal')

@section('content')

      <form action="{{route('estudiantes.update', $estudiantes->id) }}" method="POST" id="formulario">
     @csrf
     @method('PUT')
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="Email" name="email"
          value="{{ $estudiantes-> email }}">
        </div> 
        
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre del Esctudiante</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="Nombre" name="nombre"
          value="{{ $estudiantes-> nombre }}">
        </div> 

        <div class="mb-3">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="text" class="form-control" id="telefono" aria-describedby="Telefono" name="telefono"
          value="{{ $estudiantes-> telefono }}">
        </div> 

        <button type="submit" class="btn btn-primary" id="guardar" value="Actualizar">
         Actualizar</button>

        <a class="btn btn-secondary" href="{{route('estudiantes.index')}}">
           Cancelar</a>
      </form>
    
@endsection