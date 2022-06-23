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
        <link href="../css/styles.css" rel="stylesheet" />
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Visualización de Microcontenido</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('microcontinguts.index') }}"> Volver</a>
                        </div>
                    </div>
                    @if (($microcontingut!=null))

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $microcontingut->title }}
                        </div>
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $microcontingut->content }}
                        </div>
                        <div class="form-group">
                            <strong>Texto:</strong>
                            {{ $microcontingut->texto }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $microcontingut->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Video:</strong>
                            {{ $microcontingut->video }}
                        </div>
                        <div class="form-group">
                            <strong>Pregunta:</strong>
                            {{ $microcontingut->pregunta }}
                        </div>
                        <div class="form-group">
                            <strong>Microleccion ID:</strong>
                            {{ $microcontingut->microleccio_id }}
                        </div>

                    </div>
                    @else
                <p>     
            Este microcontenido no existe
                </p>

                @endif
                </div>
                </div>
            </div>
        </div>
                                <!-- Bootstrap core JS-->
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        @else
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="float-left">
                                                            <span class="card-title">Visualización de Microcontenidos</span>
                                                        </div>
                                                        <div class="float-right">
                                                            <a class="btn btn-primary" href="{{ route('microcontinguts.index') }}"> Volver</a>
                                                        </div>
                                                    </div>
                                                    @if (($microcontingut!=null))
                                                    @foreach ($profesores as $p)
            @if ((Auth::user()->id)==($p->id_users))
                    @foreach ($microleccions as $microleccion)
                        @if (($microleccion->id)==($microcontingut->microleccio_id))
                            @foreach ($temas as $tema)
                                @if (($tema->titol)==($microleccion->titol_tema))
                                    @if (($tema->codi_assignatura)==($p->codi_assignatura))

                                                    <div class="card-body">
                                                        
                                                        <div class="form-group">
                                                            <strong>Título:</strong>
                                                            {{ $microcontingut->title }}
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Contenido:</strong>
                                                            {{ $microcontingut->content }}
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Texto:</strong>
                                                            {{ $microcontingut->texto }}
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Imagen:</strong>
                                                            {{ $microcontingut->imagen }}
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Video:</strong>
                                                            {{ $microcontingut->video }}
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Pregunta:</strong>
                                                            {{ $microcontingut->pregunta }}
                                                        </div>
                                                        <div class="form-group">
                                                            <strong>Microleccion ID:</strong>
                                                            {{ $microcontingut->microleccio_id }}
                                                        </div>

                                                    </div>
                @if ($microcontingut->pregunta!=null)     
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Opciones:</span>
                        </div>
                    </div>
                    @foreach ($opciones as $opcion)
                    <div class="card-body">
                                                        
                    <div class="form-group">
                        <strong>Opción: </strong>
                        {{ $opcion->opcion }}
                        <strong>Correcta: </strong>
                        {{ $opcion->correcta }}
                    </div>
                </div>
                @endforeach
                @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    @endforeach
            @endif
        @endforeach
        @else
                <p>     
            Este microcontenido no existe
                </p>

                @endif
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
        </body>
</html>