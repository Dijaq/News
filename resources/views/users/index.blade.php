@extends('layoutuser')

@section('contenido')

  <h1>Usuarios</h1>
  <a class="btn btn-primary" href="{{route('user.create')}}" style="float: right;">Crear Usuario</a>
  <br><br>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Email</th>
        <th>Role</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->role->displayName}}</td>
          <td>
            <a class="btn btn-info btn-sm" href="{{route('user.edit', $user->id)}}">Editar</a>
            <button class="btn btn-danger btn-sm">Deshabilitar</button>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

@stop