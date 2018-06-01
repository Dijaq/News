@extends('layoutuser')

@section('contenido')


<h1>Empresariales</h1>
  <a class="btn btn-primary" href="{{route('empresarial.create')}}" style="float: right;">Crear Empresarial</a>
  <br><br>
	<div class="row">
    <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th>Fecha Publicación</th>
            <th>Títuto</th>
            <th style="width: 16%;">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($empresariales as $empresarial)
            <tr>
              <td>{{$empresarial->fechaPublicacion}}</td>
              <td>{{$empresarial->title}}</td>
                 @if($empresarial->estado == 2)
                  <td align="center">
                    <a class="btn btn-info btn-sm" href="{{route('empresarial.edit', $empresarial->id)}}">Editar</a>
                    <form style="display: inline" method="POST" action={{route('empresarial.deshabilitar', $empresarial->id)}}>
                      {!! csrf_field() !!}
                      {!! method_field('DELETE') !!}
                      <button class="btn btn-danger btn-sm">Deshabilitar</button>
                    </form>
                  </td>
                @else
                  <td align="center">
                    <form style="display: inline" method="POST" action={{route('empresarial.habilitar', $empresarial->id)}}>
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