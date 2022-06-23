@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Información de Perfil') }}</div>

                <div class="card-body">
                        <div class="row mb-3">
                            <label for="niu" class="col-md-4 col-form-label text-md-end">{{ __('NIU') }}</label>
                            <div class="col-md-6">
                                
                            </div>
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                
                            </div>
                            <label for="cognoms" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>
                            <div class="col-md-6">
                                
                            </div>
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                
                            </div>
                            <label for="idioma" class="col-md-4 col-form-label text-md-end">{{ __('Idioma') }}</label>
                            <div class="col-md-6">
                                
                            </div>
                            <label for="tipus" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de usuario') }}</label>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                </div>    

            </div>
        </div>
    </div>
</div>
@endsection
