@extends('layoutuser')

@section('contenido')

  <div style="text-align:center;">
  <h1>Editar Tipo de Noticia</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else

      <form method="POST" action="{{route('label.update', $label->id)}}">

        {!! method_field('PUT') !!}
      
        {!!csrf_field()!!}
      
        <div class="row">

          <div class="col-md-4">
            <label for="nombre">
              Nombre Tipo de Noticia: 
            </label>
          </div>
            <div class="col-md-8"><input class="form-control" type="text" name="nombre" value="{{$label->name}}">
              {!! $errors->first('nombre', '<span class="error">:message</span>') !!}</div>
          <br><br>
          <div class="col-md-4">
            <label for="color_etiqueta">
              Color del Tipo de Noticia:
            </label>
          </div>
            <div class="col-md-8">
              <input class="form-control" type="text" name="color_etiqueta" value="{{$label->color}}">
              {!! $errors->first('color_etiqueta', '<span class="error">:message</span>') !!}
            </div>
                <br><br>
          
          <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Editar"></div>
        </div>
      
      </form>
    </div>
  @endif

@stop