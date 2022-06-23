@extends('layouts.app')

@section('template_title')
    Grau
@endsection

@section('content')
@auth
    @if ((Auth::user()->tipus)==("Profesor"))   
        @if ((Auth::user()->admin)==("1"))
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('Listado de Grados') }}
                                    </span>

                                    <div class="float-right">
                                        <a href="{{ route('graus.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Crear nuevo Grado') }}
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
                                                <th>Nombre</th>
                                                <th>Código</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($graus as $grau)
                                                <tr>
                                                    <td>{{ $grau->nom }}</td>
                                                    <td>{{ $grau->codi }}</td>

                                                    <td>
                                                        <form action="{{ route('graus.destroy',$grau->nom) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ route('graus.show',$grau->nom) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                            <a class="btn btn-sm btn-success" href="{{ route('graus.edit',$grau->nom) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $graus->links() !!}
                    </div>
                </div>
            </div>
                                    <!-- Bootstrap core JS-->
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="js/scripts.js"></script>
            
        @else
        <p>
            No tienes permisos de Administrador, eres solo Profesor
        </p>
        @endif
    @else
    <p>
        No tienes permisos de Administrador, eres un Alumno
    </p>
    @endif
@endauth
@endsection
