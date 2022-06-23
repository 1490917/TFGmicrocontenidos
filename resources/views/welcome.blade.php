@extends('layouts.app')
@section('content')

@auth
    @if ((Auth::user()->tipus)==("Profesor"))
        @if ((Auth::user()->admin)==("1"))
            <!-- Header-->
            <header class="py-5">
                <div class="container px-lg-5">
                    <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                        <div class="m-4 m-lg-5">
                            <h1 class="display-5 fw-bold">ADMINSTRADOR</h1>
                            <p class="fs-4">{{ Auth::user()->nom }}, tienes permisos de administración</p>
                        </div>
                    </div>
                </div>
            </header>
            <section class="pt-4">
                <div class="container px-lg-5">
                    <!-- Page Features-->
                    <div class="row gx-lg-5">
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4" 
                                    href="{{url('/graus')}}">
                                        <i class="bi bi-bullseye"></i>
                                    </a>
                                    <h2 class="fs-4 fw-bold">Administración de grados</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar grados</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4" 
                                    href="{{url('/assignaturas')}}">
                                        <i class="bi bi-book"></i>
                                    </a>
                                    <h2 class="fs-4 fw-bold">Administración de asignaturas</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar assignaturas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4" 
                                    href="{{url('/temas')}}">
                                        <i class="bi bi-badge-tm"></i></a>
                                    <h2 class="fs-4 fw-bold">Administración de temas</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar temas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4" 
                                    href="{{url('/microleccions')}}">    
                                <i class="bi bi-chat-square-dots"></i></a>
                                    <h2 class="fs-4 fw-bold">Administración de microlecciones</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar microlecciones</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4" 
                                    href="{{url('/microcontinguts')}}">
                                    <i class="bi bi-collection"></i></a>
                                    <h2 class="fs-4 fw-bold">Administración de microcontenidos</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar microcontenidos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                                    href="{{url('/faqs')}}">
                                        <i class="bi bi-collection">

                                        </i>
                                    </a>
                                    <h2 class="fs-4 fw-bold">Administración de FAQs</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar FAQs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                    <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        @else
            <!-- Header-->
            <header class="py-5">
                <div class="container px-lg-5">
                    <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                        <div class="m-4 m-lg-5">
                            <h1 class="display-5 fw-bold">PROFESOR</h1>
                            <p class="fs-4">{{ Auth::user()->nom }}, tienes permisos de Profesor</p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Page Content-->
            <section class="pt-4">
                <div class="container px-lg-5">
                    <!-- Page Features-->
                    <div class="row gx-lg-5">
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                                        href="{{url('/assignaturas')}}">
                                        <i class="bi bi-book">
                                        </i>
                                    </a>
                                    <h2 class="fs-4 fw-bold">Administración de asignaturas</h2>
                                    <p class="mb-0">Aquí puedes ver y modificar tus assignaturas, si quieres crear una nueva asignatura contacta con un administrador</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                                    href="{{url('/temas')}}">
                                        <i class="bi bi-badge-tm">
                                        </i>
                                    </a>
                                    <h2 class="fs-4 fw-bold">Administración de temas</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar tus temas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                                    href="{{url('/microleccions')}}">
                                        <i class="bi bi-chat-square-dots">
                                        </i>    
                                    </a>
                                    <h2 class="fs-4 fw-bold">Administración de microlecciones</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar tus microlecciones</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                                    href="{{url('/microcontinguts')}}">
                                        <i class="bi bi-collection">

                                        </i>
                                    </a>
                                    <h2 class="fs-4 fw-bold">Administración de microcontenidos</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar tus microcontenidos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <a class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"
                                    href="{{url('/faqs')}}">
                                        <i class="bi bi-collection">

                                        </i>
                                    </a>
                                    <h2 class="fs-4 fw-bold">Administración de FAQs</h2>
                                    <p class="mb-0">Aquí puedes ver, crear, modificar y borrar tus FAQs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer-->
            <!--<footer class="py-5 bg-dark">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
            </footer>-->
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
        @endif
    @else
            <header class="py-5">
                <div class="container px-lg-5">
                    <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                        <div class="m-4 m-lg-5">
                            <h1 class="display-5 fw-bold">ALUMNO</h1>
                            <p class="fs-4">Sección ampliable para un futuro</p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Page Content-->
            <section class="pt-4">
                <div class="container px-lg-5">
                    <!-- Page Features-->
                    <div class="row gx-lg-5">
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-info-circle"></i></div>
                                    <h2 class="fs-4 fw-bold">Info grado</h2>
                                    <p class="mb-0">Contenido de ejemplo 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-search"></i></div>
                                    <h2 class="fs-4 fw-bold">Buscar asignaturas</h2>
                                    <p class="mb-0">Contenido de ejemplo 2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-book"></i></div>
                                    <h2 class="fs-4 fw-bold">Asignatura 1</h2>
                                    <p class="mb-0">Contenido de ejemplo 3</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xxl-4 mb-5">
                            <div class="card bg-light border-0 h-100">
                                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-book"></i></div>
                                    <h2 class="fs-4 fw-bold">Asignatura 2</h2>
                                    <p class="mb-0">Contenido de ejemplo 4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer-->
            <!--<footer class="py-5 bg-dark">
                <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
            </footer>-->
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
    @endif
@else
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">BIENVENIDO!</h1>
                        <p class="fs-4">Aquí podrás encontrar muchos microcontenidos con los que podrás aprender sobre diferentes conceptos. ¿Comenzamos?</p>
                        <a class="btn btn-primary btn-lg" href="{{ url('/home') }}">Explorar</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold">Información sobre grados</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-cloud-download"></i></div>
                                <h2 class="fs-4 fw-bold">Información sobre asignaturas</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-card-heading"></i></div>
                                <h2 class="fs-4 fw-bold">Ejemplos de microcontenidos</h2>
                            </div>
                        </div>
                
                </div>
            </div>
        </section>
        <!-- Footer-->
        <!--<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>-->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
@endauth
@endsection