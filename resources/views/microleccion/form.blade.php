<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <div class="row mb-3">
                <label for="titol_tema" class="col-md-4 col-form-label text-md-end">{{ __('Título tema') }}</label>

                <div class="col-md-6">     
                    <select class="form-control" name="titol_tema" id="titol_tema" requiered>
                    <option value="{{ $microleccion->titol_tema }}" selected disabled hidden>{{ $microleccion->titol_tema }}</option>
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

        <div class="form-group">
            <div class="row mb-3">
                <label for="descrip" class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                <div class="col-md-6">
                    <input id="descrip" type="text" class="form-control @error('descrip') is-invalid @enderror" name="descrip" value="{{ $microleccion->descrip }}" required autocomplete="descrip" autofocus>

                    @error('descrip')
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