@extends('layouts.principal')

@push('estilos')
    <link href="{asset('assets/DataTables/datatables.min.css')}" rel="stylesheet">
@endpush


@section('content')
    <div class="card text-white bg-dark mb-3 " style="width: 100%; 
    left: 2%; ">
        <div class="card-header bg-transparent border-light d-flex justify-content-between">
            <h5>Idiomas Bilinguistas</h5>
            <a class="btn btn-create-plus" href="{{ route('idiomas.create') }}">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </a>
        </div>
        <div class="card-body text-success">

            <Table class="table table-striped table-hover" id="myTable"
                style="width: 90%; order-collapse: collapse; margin: 30px">

                <thead>

                    <th class="text-light"> Nro.</th>
                    <th class="text-light">Nombre</th>
                    <th class="text-light">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($idiomas as $item)
                        <tr>
                            <td class="text-light">{{ $item->id }}</td>
                            <td class="text-light">{{ $item->nombre }}</td>
                            <td class="text-light">                                
                                <a class="btn btn-azul-editar" href="{{ route('idiomas.edit', $item->id)}}">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <form action="{{ route('idiomas.destroy', $item->id) }}" method="POST" id="formulario">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-rojo-eliminar"
                                    onclick="return confirm('¿Desea Borrar Este Elemento?');">
                                    <i class="fa fa-eraser" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </form>
                    @endforeach
                </tbody>
            </Table>
        </div>
        {{--<div class="card-footer bg-transparent border-success">
        </div>--}}
    </div>
@endsection

@push('scriptsjs')
    <script src="{{ asset('assets/DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
