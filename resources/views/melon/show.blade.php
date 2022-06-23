@extends('layouts.app')

@section('template_title')
    {{ $melon->name ?? 'Show Melon' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Melon</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('melons.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $melon->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Cognoms:</strong>
                            {{ $melon->cognoms }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $melon->email }}
                        </div>
                        <div class="form-group">
                            <strong>Idioma:</strong>
                            {{ $melon->idioma }}
                        </div>
                        <div class="form-group">
                            <strong>Niu:</strong>
                            {{ $melon->niu }}
                        </div>
                        <div class="form-group">
                            <strong>Tipus:</strong>
                            {{ $melon->tipus }}
                        </div>
                        <div class="form-group">
                            <strong>Admin:</strong>
                            {{ $melon->admin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
