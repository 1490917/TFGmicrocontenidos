@extends('layouts.app')

@section('template_title')
    Opcione
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
                                {{ __('Administrador de Opciones') }}
                                <a class="btn btn-primary" href="{{url('/microcontinguts')}}"> Volver</a>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('opciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva Opción') }}
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
										<th>Id Opcion</th>
										<th>Id Microcontingut</th>
										<th>Opcion</th>
										<th>Correcta?</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($opciones as $opcione)
                                        <tr>      
											<td>{{ $opcione->id }}</td>
											<td>{{ $opcione->id_microcontingut }}</td>
											<td>{{ $opcione->opcion }}</td>
											<td>{{ $opcione->correcta }}</td>

                                            <td>
                                                <form action="{{ route('opciones.destroy',$opcione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('opciones.edit',$opcione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    @else
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Administrador de Opciones') }}
                                <a class="btn btn-primary" href="{{url('/microcontinguts')}}"> Volver</a>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('opciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva Opción') }}
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
										<th>Id Opcion</th>
										<th>Id Microcontingut</th>
										<th>Opcion</th>
										<th>Correcta?</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
        @foreach ($profesores as $p)
            @if ((Auth::user()->id)==($p->id_users))
            @foreach ($opciones as $opcione)
                @foreach ($microcontinguts as $microcontingut)
                @if (($opcione->id_microcontingut)==($microcontingut->id))
                    @foreach ($microleccions as $microleccion)
                        @if (($microleccion->id)==($microcontingut->microleccio_id))
                            @foreach ($temas as $tema)
                                @if (($tema->titol)==($microleccion->titol_tema))
                                    @if (($tema->codi_assignatura)==($p->codi_assignatura))
                                        <tr>      
											<td>{{ $opcione->id }}</td>
											<td>{{ $opcione->id_microcontingut }}</td>
											<td>{{ $opcione->opcion }}</td>
											<td>{{ $opcione->correcta }}</td>

                                            <td>
                                                <form action="{{ route('opciones.destroy',$opcione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('opciones.edit',$opcione->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    @endforeach
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
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
