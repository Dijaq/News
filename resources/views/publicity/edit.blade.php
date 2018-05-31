@extends('layoutuser')

@section('contenido')

  <div style="text-align:center;">
  <h1>Editar Publicidad</h1>
  <br>
  @if(session()->has('info'))
    <h3>{{session('info')}}</h3>
  @else

      <form method="POST" action="{{route('publicity.update', $publicidad->id)}}">

        {!! method_field('PUT') !!}
      
        {!!csrf_field()!!}
      
        <div class="row">

          <div class="col-md-4">
            <label for="nombre">
              Nombre de la Publicidad: 
            </label>
          </div>
            <div class="col-md-8"><input class="form-control" type="text" name="nombre" value="{{$publicidad->name}}">
              {!! $errors->first('nombre', '<span class="error">:message</span>') !!}</div>
          <br><br>
          <div class="col-md-4">
            <label for="url_publicidad">
              Ingrese URL de la pagina:
            </label>
          </div>
          <div class="col-md-8">
            <input class="form-control" type="text" name="url_publicidad" value="{{$publicidad->url_page}}">
            {!! $errors->first('url_publicidad', '<span class="error">:message</span>') !!}
          </div>
            <br><br>
          <div class="col-md-4">
            <label for="fechaInicio">
              Fecha Inicio publicidad:
            </label>
          </div>
          <div class="col-md-8">
            <input class="form-control" type="date" name="fechaInicio" value="{{$publicidad->fechaInicio}}">
            {!! $errors->first('fechaInicio', '<span class="error">:message</span>') !!}
          </div>
          <br><br>
          <div class="col-md-4">
            <label for="fechaFin">
              Fecha Fin de publicidad:
          </label>
          </div>
          <div class="col-md-8">
            <input class="form-control" type="date" name="fechaFin" value="{{$publicidad->fechaFin}}">
            {!! $errors->first('fechaFin', '<span class="error">:message</span>') !!}
          </div>
          <br><br>
          <div class="col-md-4">
            <label for="dir_imagen">
              Directorio de la imagen
            </label>
          </div>
            <div class="col-md-8">
              <input class="form-control" type="text" name="dir_image" value="{{$publicidad->dir_image}}">
              {!! $errors->first('dir_image', '<span class="error">:message</span>') !!}
                <br><br>
          </div> 
          <div class="col-md-12"><input class="btn btn-primary" type="submit" value="Editar"></div>
        </div>
      
      </form>
    </div>
  @endif

@stop