@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2>Ofertas</h2>
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
    <td>Nombre</td>
    <td>Categoría</td>
    <td>Descripción</td>
    <td>Fecha Inicio</td>
    <td>Fecha Final</td>
    <td>Ubicación</td>
    <td>Horario</td>
    <td>Vacantes</td>
    <td>Sueldo</td>
    <th with="140px" class="text-center">
      <a href="{{route('ofertas.create')}}" class="btn btn-success btn-sm">
        <i class="glyphicon glyphicon-plus"></i>
      </a>
    </th>
  </tr>
  <?php $no = 1; ?>
  @foreach ($ofertas as $key => $value)
  <tr>
    <td>{{$no++}}</td>
    <td>{{ $value->ofNombre }}</td>
    <td>{{ $value->ofNomCategoria }}</td>
    <td>{{ $value->ofDescripcion }}</td>
    <td>{{ $value->ofFechaInicio }}</td>
    <td>{{ $value->ofFechaFinal }}</td>
    <td>{{ $value->ofUbicacion }}</td>
    <td>{{ $value->ofHorario }}</td>
    <td>{{ $value->ofVacantes }}</td>
    <td>{{ $value->ofSueldo }}</td>

    <td>
      <a class="btn btn-info btn-sm" href="{{route('offer',$value->ofID)}}">
        <i class="glyphicon glyphicon-th-large"></i></a>
      <a class="btn btn-primary btn-sm" href="{{route('ofertas.edit',$value->ofID)}}">
        <i class="glyphicon glyphicon-pencil"></i></a>
      {!! Form::open(['method' => 'DELETE','route' => ['ofertas.destroy', $value->ofID],'style'=>'display:inline']) !!}
      <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
      {!! Form::close() !!}
    </td>
  </tr>
  @endforeach
</table>
@endsection