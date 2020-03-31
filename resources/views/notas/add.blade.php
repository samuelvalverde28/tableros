@extends('plantilla')


@section('cuerpo') 
    

    <form method="post" action="{{ route('nuevaNota') }}">
        @csrf
        <div class="form-group">
            <input hidden type="text" value="{{$Idtabla}}" name="idTab">
            <label for="exampleInputEmail1">Añadir Texto</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="texto">
          <small id="emailHelp" class="form-text text-muted">Añadir una nota</small>
        </div>
    
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox" value="1">
          <label class="form-check-label" for="exampleCheck1">Completado</label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

@stop