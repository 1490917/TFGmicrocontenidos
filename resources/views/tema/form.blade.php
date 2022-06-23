<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
            <div class="row mb-3">
                <label for="titol" class="col-md-4 col-form-label text-md-end">{{ __('Título') }}</label>

                <div class="col-md-6">
                    <input id="titol" type="text" class="form-control @error('titol') is-invalid @enderror" name="titol" value="{{ $tema->titol }}" required autocomplete="titol" autofocus>

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
                <label for="codi_assignatura" class="col-md-4 col-form-label text-md-end">{{ __('Asignatura') }}</label>

                <div class="col-md-6">     
                    <select class="form-control" name="codi_assignatura" id="codi_assignatura" requiered>
                    <option value="{{ $tema->codi_assignatura }}" selected disabled hidden>{{ $tema->codi_assignatura }}</option>
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
                <label for="descripcio" class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                <div class="col-md-6">
                    <input id="descripcio" type="text" class="form-control @error('descripcio') is-invalid @enderror" name="descripcio" value="{{ $tema->descripcio }}" required autocomplete="descripcio" autofocus>

                    @error('descripcio')
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