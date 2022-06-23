@extends('layouts.app')

@section('content')

@foreach ($users as $user)
@auth
    @if (($user->email)==(Auth::user()->email))
        @if (($user->admin)==('1'))
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Información de Perfil') }}</div>
                            <div class="card-body">
                                <table class="table table-hover table-dark">
                                    <thead>
                                        <tr>
                                        <th scope="col">Campos</th>
                                        <th scope="col">Datos de usuario</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <th scope="row">ID</th>
                                        <td>{{ $user->id }}</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                        <th scope="row">NIU</th>
                                        <td>{{ $user->niu }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Nombre</th>
                                        <td>{{ $user->nom }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Apellidos</th>
                                        <td>{{ $user->cognoms }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Idioma</th>
                                        <td>{{ $user->idioma }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Tipo</th>
                                        <td>{{ $user->tipus }}</td>
                                        </tr>
                                        @if (($user->tipus)==('Profesor'))
                                            @if (($user->admin)==('1'))
                                                <tr>
                                                <th scope="row"></th>
                                                <td>Administrador</td>
                                                </tr>
                                            @endif
                                        @endif
                                    </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                {{ __('Información del resto de usuarios') }}   
                            </div>
                            <a class="btn btn-sm btn-success" href="{{ url('/usersadmins') }}"><i class="fa fa-fw fa-edit"></i> Administrar</a>
                            <div class="card-body">
                                @foreach($users as $user2)
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                            <th scope="col">Campos</th>
                                            <th scope="col">Datos de usuario</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">ID</th>
                                            <td>{{ $user2->id }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">NIU</th>
                                            <td>{{ $user2->niu }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Nombre</th>
                                            <td>{{ $user2->nom }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Apellidos</th>
                                            <td>{{ $user2->cognoms }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Email</th>
                                            <td>{{ $user2->email }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Idioma</th>
                                            <td>{{ $user2->idioma }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Tipo</th>
                                            <td>{{ $user2->tipus }}</td>
                                            </tr>
                                            @if (($user2->tipus)==('Profesor'))
                                                @if (($user2->admin)==('1'))
                                                    <tr>
                                                    <th scope="row"></th>
                                                    <td>Administrador</td>
                                                    </tr>
                                                @endif
                                            @endif
                                        </tbody>
                                        </table>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Información de Perfil') }}</div>
                            <div class="card-body">
                                    <table class="table table-hover table-dark">
                                        <thead>
                                            <tr>
                                            <th scope="col">Campos</th>
                                            <th scope="col">Datos de usuario</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">NIU</th>
                                            <td>{{ $user->niu }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Nombre</th>
                                            <td>{{ $user->nom }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Apellidos</th>
                                            <td>{{ $user->cognoms }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Email</th>
                                            <td>{{ $user->email }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Idioma</th>
                                            <td>{{ $user->idioma }}</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">Tipo</th>
                                            <td>{{ $user->tipus }}</td>
                                            </tr>
                                            @if (($user->tipus)==('Profesor'))
                                                @if (($user->admin)==('1'))
                                                    <tr>
                                                    <th scope="row"></th>
                                                    <td>Administrador</td>
                                                    </tr>
                                                @endif
                                            @endif
                                        </tbody>
                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endauth
@endforeach
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
@endsection
