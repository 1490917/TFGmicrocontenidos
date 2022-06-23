<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nom') }}
            {{ Form::text('nom', $melon->nom, ['class' => 'form-control' . ($errors->has('nom') ? ' is-invalid' : ''), 'placeholder' => 'Nom']) }}
            {!! $errors->first('nom', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cognoms') }}
            {{ Form::text('cognoms', $melon->cognoms, ['class' => 'form-control' . ($errors->has('cognoms') ? ' is-invalid' : ''), 'placeholder' => 'Cognoms']) }}
            {!! $errors->first('cognoms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $melon->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idioma') }}
            {{ Form::text('idioma', $melon->idioma, ['class' => 'form-control' . ($errors->has('idioma') ? ' is-invalid' : ''), 'placeholder' => 'Idioma']) }}
            {!! $errors->first('idioma', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('niu') }}
            {{ Form::text('niu', $melon->niu, ['class' => 'form-control' . ($errors->has('niu') ? ' is-invalid' : ''), 'placeholder' => 'Niu']) }}
            {!! $errors->first('niu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipus') }}
            {{ Form::text('tipus', $melon->tipus, ['class' => 'form-control' . ($errors->has('tipus') ? ' is-invalid' : ''), 'placeholder' => 'Tipus']) }}
            {!! $errors->first('tipus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('admin') }}
            {{ Form::text('admin', $melon->admin, ['class' => 'form-control' . ($errors->has('admin') ? ' is-invalid' : ''), 'placeholder' => 'Admin']) }}
            {!! $errors->first('admin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>