<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('especialidades_id') }}
            {{ Form::select('especialidades_id',$especialidades, $cita->especialidades_id, ['class' => 'form-control' . ($errors->has('especialidades_id') ? ' is-invalid' : ''), 'placeholder' => 'especialidades_id']) }}
            {!! $errors->first('especialidades_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('tituloCita') }}
            {{ Form::text('tituloCita', $cita->tituloCita, ['class' => 'form-control' . ($errors->has('tituloCita') ? ' is-invalid' : ''), 'placeholder' => 'Titulocita']) }}
            {!! $errors->first('tituloCita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaInicio') }}
            {{ Form::date('fechaInicio', $cita->fechaInicio, ['class' => 'form-control' . ($errors->has('fechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('fechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horaInicio') }}
            {{ Form::time('horaInicio', $cita->horaInicio, ['class' => 'form-control' . ($errors->has('horaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Horainicio']) }}
            {!! $errors->first('horaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaFin') }}
            {{ Form::date('fechaFin', $cita->fechaFin, ['class' => 'form-control' . ($errors->has('fechaFin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
            {!! $errors->first('fechaFin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horaFin') }}
            {{ Form::time('horaFin', $cita->horaFin, ['class' => 'form-control' . ($errors->has('horaFin') ? ' is-invalid' : ''), 'placeholder' => 'Horafin']) }}
            {!! $errors->first('horaFin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripción') }}
            {{ Form::text('descripción', $cita->descripción, ['class' => 'form-control' . ($errors->has('descripción') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('descripción', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivoConsulta') }}
            {{ Form::text('motivoConsulta', $cita->motivoConsulta, ['class' => 'form-control' . ($errors->has('motivoConsulta') ? ' is-invalid' : ''), 'placeholder' => 'Motivoconsulta']) }}
            {!! $errors->first('motivoConsulta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
