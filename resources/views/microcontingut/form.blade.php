<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <div class="row mb-3">
                <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Título') }}</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $microcontingut->title }}" required autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mb-3">
                <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Contenido') }}</label>

                <div class="col-md-6">
                    <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ $microcontingut->content }}" required autocomplete="content" autofocus>

                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="texto" class="col-md-4 col-form-label text-md-end">{{ __('Texto') }}</label>

                <div class="col-md-6">
                    <input id="texto" type="text" class="form-control @error('texto') is-invalid @enderror" name="texto" value="{{ $microcontingut->texto }}"  autocomplete="texto" autofocus>

                    @error('texto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mb-3">
                <label for="imagen" class="col-md-4 col-form-label text-md-end">{{ __('Imagen') }}</label>

                <div class="col-md-6">
                    <input id="imagen" type="text" class="form-control @error('imagen') is-invalid @enderror" name="imagen" value="{{ $microcontingut->imagen }}"  autocomplete="imagen" autofocus>

                    @error('imagen')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mb-3">
                <label for="video" class="col-md-4 col-form-label text-md-end">{{ __('Vídeo') }}</label>

                <div class="col-md-6">
                    <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ $microcontingut->video }}" autocomplete="video" autofocus>

                    @error('video')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mb-3">
                <label for="pregunta" class="col-md-4 col-form-label text-md-end">{{ __('Pregunta') }}</label>

                <div class="col-md-6">
                    <input id="pregunta" type="text" class="form-control @error('pregunta') is-invalid @enderror" name="pregunta" value="{{ $microcontingut->pregunta }}" autocomplete="pregunta" autofocus>

                    @error('pregunta')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="microleccio_id" class="col-md-4 col-form-label text-md-end">{{ __('Microlección ID') }}</label>

                <div class="col-md-6">     
                    <select class="form-control" name="microleccio_id" id="microleccio_id" requiered>
                    <option value="{{ $microcontingut->microleccio_id }}" selected disabled hidden>{{ $microcontingut->microleccio_id }}</option>
                    @foreach ($microleccions as $microleccion)
                        <option value='{{ $microleccion->id }} '>{{ $microleccion->id }}</option>
                    @endforeach
                    </select>
                    @error('microleccio_id')
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