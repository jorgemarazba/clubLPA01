@extends('layouts.principal')

@section('content')

      <form action="{{route('tecnicas.store')}}" method="POST" id="formulario">
     @csrf
     @method('POST')
        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion</label>
          <input type="text" class="form-control" id="descripcion" aria-describedby="Descripcion" name="descripcion">
        </div>        

        <input type="submit" class="btn btn-primary" id="guardar" value="Guardar">
         </input>

        <a  class="btn btn-secondary" href="{{ route('tecnicas.index')}}">
           Cancelar</a>
      </form>
    
@endsection