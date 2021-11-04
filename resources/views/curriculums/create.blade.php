@extends('layouts.app')
@section('PageTitle', 'Curriculum')
@section('content')
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open(['route'=>'curriculums.store', 'method'=>'POST']) }}
        @include('curriculums.form_master')
      {{ form::close() }}
    </div>
  </div>
@endsection