<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <div class="row mb-3">
                <label for="id_microcontingut" class="col-md-4 col-form-label text-md-end">{{ __('ID Microcontenido') }}</label>

                <div class="col-md-6">     
                    <select class="form-control" name="id_microcontingut" id="id_microcontingut" requiered>
                    <option value="{{ $opcione->id_microcontingut }}" selected disabled hidden>{{ $opcione->id_microcontingut }}</option>
                    @foreach ($microcontinguts as $microcontingut)
                        <option value='{{ $microcontingut->id }} '>{{ $microcontingut->id }}</option>
                    @endforeach
                    </select>
                    @error('id_microcontingut')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="opcion" class="col-md-4 col-form-label text-md-end">{{ __('Opción') }}</label>

                <div class="col-md-6">
                    <input id="opcion" type="text" class="form-control @error('opcion') is-invalid @enderror" name="opcion" value="{{ $opcione->opcion }}" required autocomplete="opcion" autofocus>

                    @error('opcion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="correcta" class="col-md-4 col-form-label text-md-end">{{ ('Correcta?') }}</label>

                <div class="col-md-6">
                    <select class="form-control" name="correcta" id="correcta" >
                    <option value="{{ $opcione->correcta }}" selected disabled hidden>{{ $opcione->correcta }}</option>
                        <option value="0">No</option>
                        <option value="1">Sí</option>
                    </select>
                    @error('correcta')
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