
<br>
<br>
<a href="{{ url('/contenido') }}"type="button" class="btn btn-danger float-right" >Atras</a>
<br>
<br>
<div class="form-group">
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="nombre" id="Nombre" value="{{ isset($contenidos->nombre)?$contenidos->nombre:'' }}">
</div>
<br>
<div class="form-group">
<label for="Nombre"> Contenido </label>
<textarea class="form-control" type="text" name="contenido" id="Contenido" value="">{{ isset($contenidos->contenido)?$contenidos->contenido:''}}</textarea>
</div>
<input type="submit" value="{{ $modo }}" id="Agregar" class="btn btn-primary"> 

