@extends('layoutuser')

@section('contenido')

  <h1>Noticias</h1>
  <a class="btn btn-primary" href="{{route('new.create')}}" style="float: right;">Crear Noticia</a>
  <br><br>
	<div class="row">
    <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>Fecha Publicación</th>
            <th>Títuto</th>
            <th>Tipo de Noticia</th>
            <th style="width: 16%;">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($news as $new)
            <tr>
              <td>{{$new->fechaPublicacion}}</td>
              <td>{{$new->title}}</td>
              <td><div style="padding: 3px; background-color: {{$new->label->color}}">{{$new->label->name}}</div></td>       
                 @if($new->estado == 2)
                  <td align="center">
                    <a class="btn btn-info btn-sm" href="{{route('new.edit', $new->id)}}">Editar</a>
                    <form style="display: inline" method="POST" action={{route('new.deshabilitar', $new->id)}}>
                      {!! csrf_field() !!}
                      {!! method_field('DELETE') !!}
                      <button class="btn btn-danger btn-sm">Deshabilitar</button>
                    </form>
                  </td>
                @else
                  <td align="center">
                    <form style="display: inline" method="POST" action={{route('new.habilitar', $new->id)}}>
                      {!! csrf_field() !!}
                      {!! method_field('DELETE') !!}
                      <button class="btn btn-danger btn-sm">Habilitar</button>
                    </form>
                  </td>
                @endif
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>

  <script>
      $(document).ready( function () {
      $('#example').DataTable();
  } );
  </script>

@stop