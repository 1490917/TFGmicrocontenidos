<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <div class="row mb-3">
                <label for="codi" class="col-md-4 col-form-label text-md-end">{{ __('Código') }}</label>

                <div class="col-md-6">
                    <input id="codi" type="text" class="form-control @error('codi') is-invalid @enderror" name="codi" value="{{ $assignatura->codi }}" required autocomplete="codi" autofocus>

                    @error('codi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mb-3">
                <label for="curs" class="col-md-4 col-form-label text-md-end">{{ __('Curso') }}</label>

                <div class="col-md-6">
                    <input id="curs" type="text" class="form-control @error('curs') is-invalid @enderror" name="curs" value="{{ $assignatura->curs }}" required autocomplete="curs" autofocus>

                    @error('curs')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="semestre" class="col-md-4 col-form-label text-md-end">{{ __('Semestre') }}</label>

                <div class="col-md-6">
                    <input id="semestre" type="text" class="form-control @error('semestre') is-invalid @enderror" name="semestre" value="{{ $assignatura->semestre }}" required autocomplete="semestre" autofocus>

                    @error('semestre')
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
                    <option value="{{ $assignatura->nom_grau }}" selected disabled hidden>{{ $assignatura->nom_grau }}</option>
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
                <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                <div class="col-md-6">
                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $assignatura->nom }}" required autocomplete="nom" autofocus>

                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ $assignatura->nom }}" name="password" required autocomplete="new-password">

                    @error('password')
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