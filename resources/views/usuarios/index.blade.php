@extends('layouts.app')
@section('PageTitle', 'Mi Perfil')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>Usuario</h2>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">
        &times;
    </button>
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-hover">
    <tr>
        <th with="80px">No</th>
        <td>Nombre Real</td>
        <td>Nombre de Usuario</td>
        <td>Correo</td>
        <!--<td>Contraseña</td>-->
        <td>Dirección</td>
        <td>Teléfono</td>
        <td>Tipo de Usuario</td>
        <td>Foto</td>
        <td>Cédula</td>
        <td>Acciones</td>
    </tr>
    <?php $no = 1; ?>
    @foreach ($usuarios as $key => $value)
    <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->name }}</td>
        <td>{{ $value->username }}</td>
        <td>{{ $value->email }}</td>
        <!--<td>{{ $value->password }}</td>-->
        <td>{{ $value->address }}</td>
        <td>{{ $value->phone }}</td>
        <td>{{ $value->tipoUsuario }}</td>
        <td><img class="imagen" src="<?php echo ('../../storage/images/' . auth()->user()->photo) ?>"></td>
        <td>{{ $value->cedula }}</td>
        <td>
            <div class="row">
                <div class="col-sm-4">
                    <a class="" href="{{route('usuarios.show',$value->id)}}">
                        <i class="material-icons">visibility</i></a>
                </div>
                <br>
                <div class="col-sm-4">
                    <a class="" href="{{route('usuarios.edit',$value->id)}}">
                        <i class="material-icons">edit</i></a>
                </div>
                <br>
                <div class="col-sm-4">
                    {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy',
                    $value->id],'style'=>'display:inline'])
                    !!}
                    <a type="submit" style="display: inline;" class=""><i
                            class="material-icons">delete</i></a>
                    {!! Form::close() !!}
                </div>
            </div>
        </td>
    </tr>
    @endforeach
</table>
@endsection