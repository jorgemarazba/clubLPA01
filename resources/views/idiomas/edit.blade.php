@extends('layouts.principal')

@section('content')

      <form action="{{route('idiomas.update', $idiomas->id) }}" method="POST" id="formulario">
     @csrf
     @method('PUT')
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre del Idioma</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="Nombre" name="nombre" value="{{ $idiomas-> nombre }}">
        </div>        

        <button type="submit" class="btn btn-primary" id="guardar" value="Actualizar">
         Actualizar</button>

        <a class="btn btn-secondary" href="{{route('idiomas.index')}}">
           Cancelar</a>
      </form>
    
@endsection