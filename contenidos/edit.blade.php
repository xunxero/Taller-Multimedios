@extends('master')
@section('content')

<form action="{{ url('/contenido/'.$contenidos->id) }}" method="post">
@csrf
{{method_field('PATCH')}}
@include('contenidos.form',['modo'=>'Editar'])

</form>

@endsection