@extends('layouts.app')
@section('PageTitle', 'Categorías')
@section('content')
<div class="pull-right">
  <br />
  <a class="btn btn-primary" href="{{ route('formaciones.index') }}"> <i class="material-icons">arrow_back</i></a>
</div>
<div class="row justify-content-center align-items-center h-100">
  <div class="col-md-6 col-md-offset-3">
    {{ Form::open(['route'=>'categorias.store', 'method'=>'POST']) }}
    @include('categorias.form_master')
    {{ form::close() }}
  </div>
</div>
@endsection