@extends('layouts.app')

@section('template_title')
    Faq
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
                                {{ __('FAQs') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('faqs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevas FAQs') }}
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
										<th>Respuesta</th>
										<th>Categoría</th>
                                        <th>Grado</th>
										<th>Asignatura</th>
										<th>Tema</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faqs as $faq)
                                        <tr>
                                            <td>{{ $faq->id }}</td>                                           
											<td>{{ $faq->titol }}</td>
											<td>{{ $faq->resposta }}</td>
											<td>{{ $faq->categoria }}</td>
											<td>{{ $faq->codi_assignatura }}</td>
											<td>{{ $faq->nom_grau }}</td>
											<td>{{ $faq->titol_tema }}</td>

                                            <td>
                                                <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('faqs.show',$faq->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('faqs.edit',$faq->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
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
                                {{ __('FAQs') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('faqs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevas FAQs') }}
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
										<th>Respuesta</th>
										<th>Categoría</th>
                                        <th>Grado</th>
										<th>Asignatura</th>
										<th>Tema</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach ($faqs as $faq)
                                    @foreach ($profesores as $p)
                                        @if ((Auth::user()->id)==($p->id_users))   
                                                @foreach ($temas as $tema)
                                                    @if (($tema->titol)==($faq->titol_tema))
                                                        @if (($tema->codi_assignatura)==($p->codi_assignatura))
                                                            <tr>
                                                                <td>{{ $faq->id }}</td>                                           
                                                                <td>{{ $faq->titol }}</td>
                                                                <td>{{ $faq->resposta }}</td>
                                                                <td>{{ $faq->categoria }}</td>
                                                                <td>{{ $faq->codi_assignatura }}</td>
                                                                <td>{{ $faq->nom_grau }}</td>
                                                                <td>{{ $faq->titol_tema }}</td>

                                                                <td>
                                                                    <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">
                                                                        <a class="btn btn-sm btn-primary " href="{{ route('faqs.show',$faq->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                                        <a class="btn btn-sm btn-success" href="{{ route('faqs.edit',$faq->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    @else
    <p>
        No tienes permisos de Administrador, eres un Alumno
    </p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    @endif
@endauth
@endsection