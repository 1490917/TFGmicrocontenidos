<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TFG MICROCONTENIDOS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="{{ url('/home') }}">TFG MICROCONTENIDOS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                @if (Route::has('login'))
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nom }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/perfil') }}">
                                        {{ __('Mi Perfil') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @else
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('login') }}">Iniciar Sesión</a></li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('register') }}">Registrarse</a></li>  
                            @endif
                    @endauth
                    </ul>
                </div>
                @endif
            </div>
        </nav>
        @auth
    @if ((Auth::user()->tipus)==("Profesor"))   
        @if ((Auth::user()->admin)==("1"))
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Microleccion existente</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('microleccions.index') }}"> Volver</a>
                        </div>
                    </div>
                    @if (($microleccion!=null))
                    <div class="card-body">
                        <form method="POST" action="{{ route('microleccions.update', $microleccion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('microleccion.form')

                        </form>
                    </div>
                    @else
                <p>     
            Esta microlección no existe
                </p>

                @endif
                </div>
            </div>
        </div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        @else

        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Microleccion existente</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('microleccions.index') }}"> Volver</a>
                        </div>
                    </div>
                    @if (($microleccion!=null))
                            @foreach ($profesores as $p)
            @if ((Auth::user()->id)==($p->id_users))
                    @foreach ($temas as $tema)
                        @if (($tema->titol)==($microleccion->titol_tema))
                            @if (($tema->codi_assignatura)==($p->codi_assignatura))
                    <div class="card-body">
                        <form method="POST" action="{{ route('microleccions.update', $microleccion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('microleccion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
                        @endif
                    @endforeach
            @endif
        @endforeach
        @else
                <p>     
            Esta microlección no existe
                </p>

                @endif
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
        </body>
</html>
