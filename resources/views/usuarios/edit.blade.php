@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($usuario,['route'=>['usuarios.update',$usuario->id],'method'=>'PATCH']) }}
      @include('usuarios.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection