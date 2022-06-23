<div class="box box-info padding-1">
    <div class="box-body">    
        <div class="form-group">
            <div class="row mb-3">
                <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                <div class="col-md-6">
                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $grau->nom }}" required autocomplete="nom" autofocus>

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
                <label for="codi" class="col-md-4 col-form-label text-md-end">{{ __('Código') }}</label>

                <div class="col-md-6">
                    <input id="codi" type="text" class="form-control @error('codi') is-invalid @enderror" name="codi" value="{{ $grau->codi }}" required autocomplete="codi" autofocus>

                    @error('codi')
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