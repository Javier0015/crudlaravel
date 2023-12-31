@extends('layouts.app')

@section('template_title')
    {{ $contacto->name ?? "{{ __('Show') Contacto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Contacto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contactos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $contacto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $contacto->dirección }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $contacto->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $contacto->correo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
