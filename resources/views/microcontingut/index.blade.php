@extends('layouts.app')

@section('template_title')
    Microcontingut
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
                                {{ __('Listado de Microcontenidos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('microcontinguts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo Microcontenido') }}
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
										<th>Título</th>
										<th>Contenido</th>
										<th>Texto</th>
										<th>Imagen</th>
										<th>Video</th>
										<th>Pregunta</th>
										<th>Microleccion ID</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($microcontinguts as $microcontingut)
                                        <tr>
                                            <td>{{ $microcontingut->id }}</td>                                           
											<td>{{ $microcontingut->title }}</td>
											<td>{{ $microcontingut->content }}</td>
											<td>{{ $microcontingut->texto }}</td>
											<td>{{ $microcontingut->imagen }}</td>
											<td>{{ $microcontingut->video }}</td>
											<td>{{ $microcontingut->pregunta }}</td>
											<td>{{ $microcontingut->microleccio_id }}</td>

                                            <td>
                                                <form action="{{ route('microcontinguts.destroy',$microcontingut->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('microcontinguts.show',$microcontingut->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('microcontinguts.edit',$microcontingut->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @if ($microcontingut->pregunta!=null)
                                                        <a class="btn btn-sm btn-secondary" href="{{ route('opciones.index') }}"><i class="fa fa-fw fa-edit"></i> Administrar opciones</a>
                                                    @endif
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
                {!! $microcontinguts->links() !!}
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
                                {{ __('Listado de Microcontenidos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('microcontinguts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Crear nuevo Microcontenido') }}
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
                                        <th>Título</th>
                                        <th>Contenido</th>
                                        <th>Texto</th>
                                        <th>Imagen</th>
                                        <th>Video</th>
                                        <th>Pregunta</th>
                                        <th>Microleccion ID</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
        @foreach ($profesores as $p)
            @if ((Auth::user()->id)==($p->id_users))
                @foreach ($microcontinguts as $microcontingut)
                    @foreach ($microleccions as $microleccion)
                        @if (($microleccion->id)==($microcontingut->microleccio_id))
                            @foreach ($temas as $tema)
                                @if (($tema->titol)==($microleccion->titol_tema))
                                    @if (($tema->codi_assignatura)==($p->codi_assignatura))
                                        <tr>
                                            <td>{{ $microcontingut->id }}</td>                                           
                                            <td>{{ $microcontingut->title }}</td>
                                            <td>{{ $microcontingut->content }}</td>
                                            <td>{{ $microcontingut->texto }}</td>
                                            <td>{{ $microcontingut->imagen }}</td>
                                            <td>{{ $microcontingut->video }}</td>
                                            <td>{{ $microcontingut->pregunta }}</td>
                                            <td>{{ $microcontingut->microleccio_id }}</td>

                                            <td>
                                                <form action="{{ route('microcontinguts.destroy',$microcontingut->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('microcontinguts.show',$microcontingut->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('microcontinguts.edit',$microcontingut->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @if ($microcontingut->pregunta!=null)
                                                        <a class="btn btn-sm btn-secondary" href="{{url('/opciones')}}"><i class="fa fa-fw fa-edit"></i> Administrar opciones</a>
                                                    @endif
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
                @endforeach
            @endif
        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $microcontinguts->links() !!}
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
