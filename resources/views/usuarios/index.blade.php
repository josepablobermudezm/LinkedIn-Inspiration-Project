@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2>CRUD Resource</h2>
    </div>
  </div>
</div>

@if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th with="80px">No</th>
      <td>NombreReal</td>
      <td>NombreUsuario</td>
      <td>Contrasena</td>
      <td>Telefono</td>
      <td>TipoUsuario</td>
      <td>Foto</td>
      <th with="140px" class="text-center">
        <a href="{{route('usuarios.create')}}" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </th>
    </tr>
    <?php $no = 1; ?>
    @foreach ($usuarios as $key => $value)
    <tr>
      <td>{{$no++}}</td>
      <td>{{ $value->usNombreReal }}</td>
      <td>{{ $value->usNombreUsuario }}</td>
      <td>{{ $value->usContrasena }}</td>
      <td>{{ $value->usTelefono }}</td>
      <td>{{ $value->usTipoUsuario }}</td>
      <td>{{ $value->usFoto }}</td>
      <td>
        <a class="btn btn-info btn-sm" href="{{route('usuarios.show',$value->usID)}}">
          <i class="glyphicon glyphicon-th-large"></i></a>
        <a class="btn btn-primary btn-sm" href="{{route('usuarios.edit',$value->usID)}}">
          <i class="glyphicon glyphicon-pencil"></i></a>
        {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $value->usID],'style'=>'display:inline']) !!}
        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </table>
  @endsection