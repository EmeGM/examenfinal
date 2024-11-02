<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_rest" class="form-label">{{ __('Nombre Rest') }}</label>
            <input type="text" name="nombre_rest" class="form-control @error('nombre_rest') is-invalid @enderror" value="{{ old('nombre_rest', $restaurante?->nombre_rest) }}" id="nombre_rest" placeholder="Nombre Rest">
            {!! $errors->first('nombre_rest', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $restaurante?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $restaurante?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipos_id_plato" class="form-label">{{ __('Tipos Id Plato') }}</label>
            <input type="text" name="tipos_id_plato" class="form-control @error('tipos_id_plato') is-invalid @enderror" value="{{ old('tipos_id_plato', $restaurante?->tipos_id_plato) }}" id="tipos_id_plato" placeholder="Tipos Id Plato">
            {!! $errors->first('tipos_id_plato', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>