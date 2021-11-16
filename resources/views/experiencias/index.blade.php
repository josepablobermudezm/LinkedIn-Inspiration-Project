@extends('layouts.app')
@section('PageTitle', 'Experiencias')
@section('content')
<div class="container">


    <div class="row">
        <div class="col-sm-12">
            <div class="full-right">
                <h2>Experiencias</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">
            &times;
        </button>
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-hover">
        <tr>
            <th with="80px">No</th>
            <td>Puesto</td>
            <td>Empresa</td>
            <td>Fecha Inicio</td>
            <td>Fecha Final</td>
            <td>Descripción</td>
            <th with="140px" class="text-center">
                <a href="{{route('experiencias.create')}}" class="btn btn-success btn-sm rounded-circle">
                    <i class="material-icons">
                        add
                    </i>
                </a>
            </th>
        </tr>
        <?php $no = 1; ?>
        @foreach ($experiencias as $key => $value)
        <tr>
            <td>{{$no++}}</td>
            <td>{{ $value->exPuesto }}</td>
            <td>{{ $value->exEmpresa }}</td>
            <td>{{ $value->exFechaInicio }}</td>
            <td>{{ $value->fechaFinal }}</td>
            <td>{{ $value->exDescripcion }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{route('experiencias.edit', $value->exID)}}">
                    <i class="material-icons">edit</i></a>
                {!! Form::open(['method' => 'DELETE','route' => ['experiencias.destroy', $value->exID
                ],'style'=>'display:inline']) !!}
                <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i
                        class="material-icons">delete</i></button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </table>

</div>
@endsection