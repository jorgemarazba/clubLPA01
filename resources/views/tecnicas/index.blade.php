@extends('layouts.principal')

@push('estilos')
    <link href="{asset('assets/DataTables/datatables.min.css')}" rel="stylesheet">
@endpush


@section('content')
    <div class="card text-white bg-dark mb-3" style="width: 100%; margin: 0 auto;
    left: 2rem; ">
        <div class="card-header bg-transparent border-light d-flex justify-content-between">
            <h5>Tecnicas Bilinguistas</h5>
            <a class="btn btn-create-plus" href="{{ route('tecnicas.create') }}">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </a>
        </div>
        <div class="card-body text-success">

            <Table class="table table-striped table-hover" id="myTable"
                style="width: 90%; order-collapse: collapse; margin: 30px">

                <thead>

                    <th class="text-light"> Nro.</th>
                    <th class="text-light">Descripcion</th>
                    <th class="text-light">acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tecnicas as $item)
                        <tr>
                            <td class="text-light">{{ $item->id }}</td>
                            <td class="text-light">{{ $item->descripcion }}</td>
                            <td class="text-light">                                
                                <a class="btn btn-editar-tecnica" href="{{ route('tecnicas.edit', $item->id)}}">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <form action="{{ route('tecnicas.destroy', $item->id) }}" method="POST" id="formulario">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-eliminar-tecnica"
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
