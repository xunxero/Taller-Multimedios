@extends('master')
@section('content')

<div class="container"> 
    <form method="post" action="{{ url('/contenido')  }}" enctype="multipart/form-data"> 
    @csrf

    @include('contenidos.form',['modo'=>'Crear'])  
    </form>
</div>
@endsection