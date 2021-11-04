@extends('layouts.app')
@section('PageTitle', 'Experiencias')
@section('content')
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($experiencias,['route'=>['experiencias.update',$experiencias->exID],'method'=>'PATCH']) }}
      @include('experiencias.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection