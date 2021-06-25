@extends('master')
@section('content')


<br>
<br>
<a href="{{ url('/contenido/create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Crear Contenido</a>
<br>
<br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Contenido</th>
                <th>Fecha Creado</th>
                <th>Fecha Modificado</th>
                <th colspan="2" style="text-align:center">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contenidos as $contenido)
            <tr>
                <td>{{ $contenido->id }}</td>
                <td>{{ $contenido->nombre }}</td>
                <td>{{ $contenido->contenido }}</td>
                <td>{{ $contenido->created_at }}</td>
                <td>{{ $contenido->updated_at }}</td>
                <td> 
                    <a href="{{ url('/contenido/'.$contenido->id.'/edit') }}" class="btn btn-primary"> Editar </a>
                </td>
                
                <td>
                <form action=" {{ url('/contenido/'.$contenido->id) }} " method="post">
                @csrf
                {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" value="Borrar" onclick="return confirm('¿Quieres Borrar?')">
                </form>
                </td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
