@extends('layouts.app')
@section('PageTitle', 'Curriculum')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="full-right">
            <h2>Curriculum</h2>
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

<table class="table table-striped table-hover">
    <tr>
        <th with="80px">No</th>
        <td>Candidato</td>
        <td >Observaciones</td>
        <td>Acciones</td>
        <?php if (sizeof($curriculums) == 0) {?>
        <th with="140px" class="text-center">
            <a href="{{route('curriculums.create')}}" class="btn btn-success btn-sm rounded-circle">
                <i class="material-icons">add</i>
            </a>
        </th>
        <?php }?>
    </tr>
    <?php $no = 1; ?>
    @foreach ($curriculums as $key => $value)
    <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->NombreUsuario}}</td>
        <td>{{ $value->	crObservaciones}}</td>
        <td class="text-center">
            <a class="btn btn-primary btn-sm" href="{{route('curriculums.edit',$value->crID)}}">
                <i class="material-icons">edit</i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['curriculums.destroy',
            $value->crID],'style'=>'display:inline']) !!}
            <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i
                    class="material-icons">delete</i></button>
            {!! Form::close() !!}
            <a class="btn btn-info btn-sm" href="{{route('form',$value->crID)}}">
                Formaciones</a>
            <a class="btn btn-info btn-sm" href="{{route('exp',$value->crID)}}">
                Experiencias</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection