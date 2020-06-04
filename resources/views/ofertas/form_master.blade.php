<div class="row">
    <div class="col-sm-2">
        {!! form::label('ofNombre','Nombre de Oferta') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('ofNombre') ? 'has-error' : "" }}">
            {{ Form::text('ofNombre',NULL, ['class'=>'form-control', 'id'=>'ofNombre', 'placeholder'=>'Nombre de Oferta']) }}
            {!! $errors->first('ofNombre', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('ofFechaInicio','Fecha Inicio') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('ofFechaInicio') ? 'has-error' : "" }}">
            {{ Form::text('ofFechaInicio',NULL, ['class'=>'datepicker', 'id'=>'ofFechaInicio', 'placeholder'=>'dd/mm/yyyy']) }}
            {!! $errors->first('ofFechaInicio', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('ofFechaFinal','Fecha Final') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('ofFechaFinal') ? 'has-error' : "" }}">
            {{ Form::text('ofFechaFinal',NULL, ['class'=>'datepicker', 'id'=>'ofFechaFinal', 'placeholder'=>'dd/mm/yyyy']) }}
            {!! $errors->first('ofFechaFinal', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('ofLimite','Cupo') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('ofLimite') ? 'has-error' : "" }}">
            {{ Form::text('ofLimite',NULL, ['class'=>'form-control', 'id'=>'ofLimite', 'placeholder'=>'Cantidad de cupos']) }}
            {!! $errors->first('ofLimite', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>