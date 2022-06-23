<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <div class="row mb-3">
                <label for="niu" class="col-md-4 col-form-label text-md-end">{{ __('NIU') }}</label>

                <div class="col-md-6">
                    <input id="niu" type="text" class="form-control @error('niu') is-invalid @enderror" name="niu" value="{{ $usersadmin->niu }}" required autocomplete="niu" autofocus>

                    @error('niu')
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
                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ $usersadmin->nom }}" required autocomplete="nom" autofocus>

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
                <label for="cognoms" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos') }}</label>

                <div class="col-md-6">
                    <input id="cognoms" type="text" class="form-control @error('cognoms') is-invalid @enderror" name="cognoms" value="{{ $usersadmin->cognoms }}" required autocomplete="cognoms" autofocus>

                    @error('cognoms')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $usersadmin->email }}" required autocomplete="email">

                    @error('email')
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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="edit" name="password"  autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row mb-3">
                <label for="idioma" class="col-md-4 col-form-label text-md-end">{{ __('Idioma') }}</label>

                <div class="col-md-6">
                    <select class="form-control" name="idioma" id="idioma" >
                    <option value="{{ $usersadmin->idioma }}" selected disabled hidden>{{ $usersadmin->idioma }}</option>
                        <option value="Español">Español</option>
                        <option value="Català">Català</option>
                        <option value="English">English</option>
                    </select>
                    @error('idioma')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="tipus" class="col-md-4 col-form-label text-md-end">{{ ('Tipo de usuario') }}</label>

                <div class="col-md-6">
                    <select class="form-control" name="tipus" id="tipus" >
                    <option value="{{ $usersadmin->tipus }}" selected disabled hidden>{{ $usersadmin->tipus }}</option>
                        <option value="Alumno">Alumno</option>
                        <option value="Profesor">Profesor</option>
                    </select>
                    @error('tipus')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mb-3">
                <label for="admin" class="col-md-4 col-form-label text-md-end">{{ ('Admin') }}</label>

                <div class="col-md-6">
                    <select class="form-control" name="admin" id="admin" >
                    <option value="{{ $usersadmin->admin }}" selected disabled hidden>{{ $usersadmin->admin }}</option>
                        <option value="0">No</option>
                        <option value="1">Sí</option>
                    </select>
                    @error('admin')
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
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</div>