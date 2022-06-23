@extends('layouts.app')

@section('template_title')
    Usersadmin
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
                                {{ __('Listado de usuarios') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('usersadmins.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo usuario') }}
                                </a>
                            </div>
                            <div class="float-right">
                                <a href="{{ url('/perfil') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Volver a vista normal') }}
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
                                        <th>Id</th>
                                        
										<th>Nombre</th>
										<th>Apellidos</th>
										<th>Email</th>
										<th>Idioma</th>
										<th>NIU</th>
										<th>Tipo</th>
										<th>Admin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usersadmins as $usersadmin)
                                        <tr>
                                            <td>{{ $usersadmin->id }}</td>
                                            
											<td>{{ $usersadmin->nom }}</td>
											<td>{{ $usersadmin->cognoms }}</td>
											<td>{{ $usersadmin->email }}</td>
											<td>{{ $usersadmin->idioma }}</td>
											<td>{{ $usersadmin->niu }}</td>
											<td>{{ $usersadmin->tipus }}</td>
											<td>{{ $usersadmin->admin }}</td>

                                            <td>
                                                <form action="{{ route('usersadmins.destroy',$usersadmin->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usersadmins.show',$usersadmin->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usersadmins.edit',$usersadmin->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $usersadmins->links() !!}
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
                                    <!-- Bootstrap core JS-->
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        </p>
        @endif
    @else
    <p>
        No tienes permisos de Administrador, eres un Alumno
                                <!-- Bootstrap core JS-->
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </p>
    @endif
@endauth
@endsection
