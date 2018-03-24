<div class="form-group {{ $errors->has('=Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="col-md-4 control-label">{{ 'nombre' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="=Nombre" type="text" id="Nombre" value="{{ $usuario->Nombre or ''}}" >
        {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Apellido') ? 'has-error' : ''}}">
    <label for="Apellido" class="col-md-4 control-label">{{ 'Apellido' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Apellido" type="text" id="Apellido" value="{{ $usuario->Apellido or ''}}" >
        {!! $errors->first('Apellido', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Email') ? 'has-error' : ''}}">
    <label for="Email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Email" type="text" id="Email" value="{{ $usuario->Email or ''}}" >
        {!! $errors->first('Email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    <label for="Telefono" class="col-md-4 control-label">{{ 'Telefono' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Telefono" type="text" id="Telefono" value="{{ $usuario->Telefono or ''}}" >
        {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
