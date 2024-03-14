@extends('layouts.principal')

@section('content')

      <form action="{{route('tecnicas.update', $tecnica->id) }}" method="POST" id="formulario">
     @csrf
     @method('PUT')
        <div class="mb-3">
          <label for="descripcion" class="form-label">Nombre de la Tecnica</label>
          <input type="text" class="form-control" id="descripcion" aria-describedby="Descripcion" name="descripcion" value="{{ $tecnica-> descripcion }}">
        </div>        

        <button type="submit" class="btn btn-primary" id="guardar" value="Actualizar">
         Actualizar</button>

        <a class="btn btn-secondary" href="{{route('tecnicas.index')}}">
           Cancelar</a>
      </form>
    
@endsection