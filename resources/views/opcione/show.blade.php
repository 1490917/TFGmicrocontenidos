@extends('layouts.app')

@section('template_title')
    {{ $opcione->name ?? 'Show Opcione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Opcione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('opciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Opcion:</strong>
                            {{ $opcione->id_opcion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Microcontingut:</strong>
                            {{ $opcione->id_microcontingut }}
                        </div>
                        <div class="form-group">
                            <strong>Opcion:</strong>
                            {{ $opcione->opcion }}
                        </div>
                        <div class="form-group">
                            <strong>Correcta:</strong>
                            {{ $opcione->correcta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
