@extends('plantilla')


@section('cuerpo') 
    hola
    

    <form method="post" action="{{ route('anadiredit') }}" >
        @csrf
        <div class="form-group">
        <input type="text" value="{{$Nota[0]->idTab}}" hidden name="idTab">
        <input type="text" value="{{$Nota[0]->idNot}}" hidden name="idNot">
           
            <label for="exampleInputEmail1">Añadir Texto</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="texto" value="{{$Nota[0]->texto}}">
          
        </div>
    
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox" value="1" 
          @if ($Nota[0]->completado == 1)
                                checked
                            @endif
          
          >
          <label class="form-check-label" for="exampleCheck1">Completado</label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>

@stop