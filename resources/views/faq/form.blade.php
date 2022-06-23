<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <div class="row mb-3">
                <label for="titol" class="col-md-4 col-form-label text-md-end">{{ __('Título') }}</label>

                <div class="col-md-6">
                    <input id="titol" type="text" class="form-control @error('titol') is-invalid @enderror" name="titol" value="{{ $faq->titol }}" required autocomplete="titol" autofocus>

                    @error('titol')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="resposta" class="col-md-4 col-form-label text-md-end">{{ __('Respuesta') }}</label>

                <div class="col-md-6">
                    <input id="resposta" type="text" class="form-control @error('resposta') is-invalid @enderror" name="resposta" value="{{ $faq->resposta }}" required autocomplete="resposta" autofocus>

                    @error('resposta')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="categoria" class="col-md-4 col-form-label text-md-end">{{ __('Categoría') }}</label>

                <div class="col-md-6">
                    <select class="form-control" name="categoria" id="categoria" >
                    <option value="{{ $faq->categoria }}" selected disabled hidden>{{ $faq->categoria }}</option>
                        <option value="Informacion general">Información general</option>
                        <option value="Profesorado y tutorias">Profesorado y tutorías</option>
                        <option value="Horarios">Horarios</option>
                        <option value="Examenes">Exámenes</option>
                        <option value="Evaluacion">Evaluación</option>                    
                    </select>
                    @error('categoria')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="codi_assignatura" class="col-md-4 col-form-label text-md-end">{{ __('Asignatura') }}</label>

                <div class="col-md-6">     
                    <select class="form-control" name="codi_assignatura" id="codi_assignatura" requiered>
                    <option value="{{ $faq->codi_assignatura }}" selected disabled hidden>{{ $faq->codi_assignatura }}</option>
                    @foreach ($asignaturas as $asignatura)
                        <option value='{{ $asignatura->codi }} '>{{ $asignatura->codi }}</option>
                    @endforeach
                    </select>
                    @error('codi_assignatura')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="nom_grau" class="col-md-4 col-form-label text-md-end">{{ __('Grado') }}</label>

                <div class="col-md-6">     
                    <select class="form-control" name="nom_grau" id="nom_grau" requiered>
                    <option value="{{ $faq->nom_grau }}" selected disabled hidden>{{ $faq->nom_grau }}</option>
                    @foreach ($graus as $grau)
                        <option value='{{ $grau->nom }} '>{{ $grau->nom }}</option>
                    @endforeach
                    </select>
                    @error('nom_grau')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="titol_tema" class="col-md-4 col-form-label text-md-end">{{ __('Título tema') }}</label>

                <div class="col-md-6">     
                    <select class="form-control" name="titol_tema" id="titol_tema" requiered>
                    <option value="{{ $faq->titol_tema }}" selected disabled hidden>{{ $faq->titol_tema }}</option>
                    @foreach ($temas as $tema)
                        <option value='{{ $tema->titol }} '>{{ $tema->titol }}</option>
                    @endforeach
                    </select>
                    @error('titol_tema')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>