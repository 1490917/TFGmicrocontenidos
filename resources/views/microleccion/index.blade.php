@extends('layouts.app')

@section('template_title')
    Microleccion
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
                                {{ __('Listado de Microlecciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('microleccions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva Microlección') }}
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
                                        <th>ID</th>
										<th>Tema</th>
										<th>Descripción de la microlección</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($microleccions as $microleccion)
                                        <tr>
                                            <td>{{ $microleccion->id }}</td>
											<td>{{ $microleccion->titol_tema }}</td>
											<td>{{ $microleccion->descrip }}</td>

                                            <td>
                                                <form action="{{ route('microleccions.destroy',$microleccion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('microleccions.show',$microleccion->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('microleccions.edit',$microleccion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $microleccions->links() !!}
            </div>
        </div>
    </div>
                                    <!-- Bootstrap core JS-->
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        @else
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Microlecciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('microleccions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva Microlección') }}
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
                                        <th>ID</th>
										<th>Tema</th>
										<th>Descripción de la microlección</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($profesores as $p)
                                    @if ((Auth::user()->id)==($p->id_users))
                                        @foreach ($microleccions as $microleccion) 
                                            @foreach ($temas as $tema)
                                                @if (($tema->titol)==($microleccion->titol_tema))
                                                    @if (($tema->codi_assignatura)==($p->codi_assignatura))
                                                        <tr>
                                                            <td>{{ $microleccion->id }}</td>
                                                            <td>{{ $microleccion->titol_tema }}</td>
                                                            <td>{{ $microleccion->descrip }}</td>

                                                            <td>
                                                                <form action="{{ route('microleccions.destroy',$microleccion->id) }}" method="POST">
                                                                    <a class="btn btn-sm btn-primary " href="{{ route('microleccions.show',$microleccion->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                                    <a class="btn btn-sm btn-success" href="{{ route('microleccions.edit',$microleccion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $microleccions->links() !!}
            </div>
        </div>
    </div>
                                    <!-- Bootstrap core JS-->
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
        @endif
    @else
    <p>
        No tienes permisos de Administrador, eres un Alumno
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    @endif
@endauth
@endsection











