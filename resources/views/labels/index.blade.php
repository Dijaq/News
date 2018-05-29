@extends('layoutuser')

@section('contenido')

  <h1>Tipos de Noticia</h1>
  <a class="btn btn-primary" href="{{route('label.create')}}" style="float: right;">Crear Tipo de Noticia</a>
  <br><br>
	<div class="table-responsive">
    <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Color</th>
            <th style="text-align: center">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($labels as $label)
            <tr>  
                <td>{{$label->id}}</td>
                <td>{{$label->name}}</td>
                <td><div width="20px" style="background-color: {{$label->color}}">{{$label->color}}</div>
                </td>
              @if($label->estado == 2)
                <td align="center">
                  <a class="btn btn-info btn-sm" href="{{route('label.edit', $label->id)}}">Editar</a>
                  <form style="display: inline" method="POST" action={{route('label.deshabilitar', $label->id)}}>
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <button class="btn btn-danger btn-sm">Deshabilitar</button>
                  </form>
                </td>
              @else
                <td align="center">
                  <form style="display: inline" method="POST" action={{route('label.habilitar', $label->id)}}>
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

@stop