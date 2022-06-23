@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nom:</strong>
                            {{ $user->nom }}
                        </div>
                        <div class="form-group">
                            <strong>Cognoms:</strong>
                            {{ $user->cognoms }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Idioma:</strong>
                            {{ $user->idioma }}
                        </div>
                        <div class="form-group">
                            <strong>Niu:</strong>
                            {{ $user->niu }}
                        </div>
                        <div class="form-group">
                            <strong>Tipus:</strong>
                            {{ $user->tipus }}
                        </div>
                        <div class="form-group">
                            <strong>Admin:</strong>
                            {{ $user->admin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
