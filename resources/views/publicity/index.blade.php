@extends('layoutuser')

@section('contenido')

  <h1>Publicidades</h1>
  <a class="btn btn-primary" href="{{route('publicity.create')}}" style="float: right;">Crear Publicidad</a>
  <br><br>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Url Publicidad</th>
        <th>Direccion Imagen</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($publicidades as $publicidad)
        <tr>
          <td>{{$publicidad->name}}</td>
          <td>{{$publicidad->url_page}}</td>
          <td>{{$publicidad->dir_image}}</td>
          @if($publicidad->estado == 2)
            <td align="center">
              <a class="btn btn-info btn-sm" href="{{route('publicity.edit', $publicidad->id)}}">Editar</a>
              <form style="display: inline" method="POST" action={{route('publicity.deshabilitar', $publicidad->id)}}>
                {!! csrf_field() !!}
                {!! method_field('DELETE') !!}
                <button class="btn btn-danger btn-sm">Deshabilitar</button>
              </form>
            </td>
          @else
            <td align="center">
              <form style="display: inline" method="POST" action={{route('publicity.habilitar', $publicidad->id)}}>
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

@stop