@extends('layouts.app')

@section('template_title')
    Melon
@endsection

@section('content')
@foreach ($melons as $melon)
@auth
    @if (($melon->email)==(Auth::user()->email))
        @if (($melon->admin)==('1'))
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
                                        <td>{{ $melon->niu }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Nombre</th>
                                        <td>{{ $melon->nom }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Apellidos</th>
                                        <td>{{ $melon->cognoms }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $melon->email }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Idioma</th>
                                        <td>{{ $melon->idioma }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Tipo</th>
                                        <td>{{ $melon->tipus }}</td>
                                        </tr>
                                        @if (($melon->tipus)==('Profesor'))
                                            @if (($melon->admin)==('1'))
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
            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                                <span id="card_title">
                                    {{ __('Resto de usuarios') }}
                                </span>

                                <div class="float-right">
                                    <a href="{{ route('melons.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Create New') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                            <th>No</th>
                                            
                                            <th>Nom</th>
                                            <th>Cognoms</th>
                                            <th>Email</th>
                                            <th>Idioma</th>
                                            <th>Niu</th>
                                            <th>Tipus</th>
                                            <th>Admin</th>

                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($melons as $melon)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $melon->nom }}</td>
                                                <td>{{ $melon->cognoms }}</td>
                                                <td>{{ $melon->email }}</td>
                                                <td>{{ $melon->idioma }}</td>
                                                <td>{{ $melon->niu }}</td>
                                                <td>{{ $melon->tipus }}</td>
                                                <td>{{ $melon->admin }}</td>

                                                <td>
                                                    <form action="{{ route('melons.destroy',$melon->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('melons.show',$melon->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('melons.edit',$melon->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $melons->links() !!}
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
                                        <td>{{ $melon->niu }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Nombre</th>
                                        <td>{{ $melon->nom }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Apellidos</th>
                                        <td>{{ $melon->cognoms }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $melon->email }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Idioma</th>
                                        <td>{{ $melon->idioma }}</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">Tipo</th>
                                        <td>{{ $melon->tipus }}</td>
                                        </tr>
                                        @if (($melon->tipus)==('Profesor'))
                                            @if (($melon->admin)==('1'))
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
@endsection
