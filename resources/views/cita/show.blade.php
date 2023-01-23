@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? 'Show Cita' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulocita:</strong>
                            {{ $cita->tituloCita }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $cita->fechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Horainicio:</strong>
                            {{ $cita->horaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafin:</strong>
                            {{ $cita->fechaFin }}
                        </div>
                        <div class="form-group">
                            <strong>Horafin:</strong>
                            {{ $cita->horaFin }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $cita->descripción }}
                        </div>
                        <div class="form-group">
                            <strong>Motivoconsulta:</strong>
                            {{ $cita->motivoConsulta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
