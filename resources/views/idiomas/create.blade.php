@extends('layouts.principal')

@section('content')

      <form action="{{route('idiomas.store')}}" method="POST" id="formulario">
     @csrf
     @method('POST')
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre del Idioma</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="Nombre" name="nombre">
        </div>        

        <button type="submit" class="btn btn-primary" id="guardar" value="Guardar">
         Guardar</button>

        <a type="submit" class="btn btn-secondary" href="{{ route('idiomas.index')}}">
           Cancelar</a>
      </form>
    
@endsection