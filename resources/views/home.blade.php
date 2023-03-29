@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reportes') }}</div>

                <div style="display: flex; justify-content: space-between; align-items: center;">

                <div class="float-right">
                    <a href="{{ route('pdf') }}" class="btn btn-primary btn-sm "  data-placement="left">
                        {{ __('Reporte Escecialidad') }}
                    </a>
                </div>
                &nbsp;
                <div class="float-right">
                    <a href="{{ route('pdfM') }}" class="btn btn-primary btn-sm "  data-placement="left">
                        {{ __('Reporte Medico') }}
                    </a>
                </div>
                &nbsp;
                <div class="float-right">
                    <a href="{{ route('pdfF') }}" class="btn btn-primary btn-sm "  data-placement="left">
                        {{ __('Reporte Mes') }}
                    </a>
                </div>


            </div>




                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido!!') }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
