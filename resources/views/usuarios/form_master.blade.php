<div class="row">
  <div class="col-sm-2">
    {!! form::label('usNombreReal','NombreReal') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('usNombreReal') ? 'has-error' : "" }}">
      {{ Form::text('usNombreReal',NULL, ['class'=>'form-control', 'id'=>'usNombreReal', 'placeholder'=>'NombreReal Post...']) }}
      {{ $errors->first('usNombreReal', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('usNombreUsuario','NombreUsuario') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('usNombreUsuario') ? 'has-error' : "" }}">
      {{ Form::text('usNombreUsuario',NULL, ['class'=>'form-control', 'id'=>'usNombreUsuario', 'placeholder'=>'NombreUsuario Post...']) }}
      {{ $errors->first('usNombreUsuario', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('usContrasena','Contrasena') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('usContrasena') ? 'has-error' : "" }}">
      {{ Form::text('usContrasena',NULL, ['class'=>'form-control', 'id'=>'usContrasena', 'placeholder'=>'Contrasena Post...']) }}
      {{ $errors->first('usContrasena', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('usDireccion','Direccion') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('usDireccion') ? 'has-error' : "" }}">
      {{ Form::text('usDireccion',NULL, ['class'=>'form-control', 'id'=>'usDireccion', 'placeholder'=>'Direccion Post...']) }}
      {{ $errors->first('usDireccion', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('usTelefono','Telefono') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('usTelefono') ? 'has-error' : "" }}">
      {{ Form::text('usTelefono',NULL, ['class'=>'form-control', 'id'=>'usTelefono', 'placeholder'=>'Telefono Post...']) }}
      {{ $errors->first('usTelefono', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('usTipoUsuario','TipoUsuario') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('usTipoUsuario') ? 'has-error' : "" }}">
      {{ Form::text('usTipoUsuario',NULL, ['class'=>'form-control', 'id'=>'usTipoUsuario', 'placeholder'=>'TipoUsuario Post...']) }}
      {{ $errors->first('usTipoUsuario', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('usFoto','Foto') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('usFoto') ? 'has-error' : "" }}">
      {{ Form::text('usFoto',NULL, ['class'=>'form-control', 'id'=>'usFoto', 'placeholder'=>'Foto Post...']) }}
      {{ $errors->first('usFoto', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('usCedula','Cedula') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('usCedula') ? 'has-error' : "" }}">
      {{ Form::text('usCedula',NULL, ['class'=>'form-control', 'id'=>'usCedula', 'placeholder'=>'Cedula Post...']) }}
      {{ $errors->first('usCedula', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>