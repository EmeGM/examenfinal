@extends('layouts.app')

@section('template_title')
    {{ $restaurante->name ?? __('Show') . " " . __('Restaurante') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Restaurante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('restaurantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Rest:</strong>
                                    {{ $restaurante->nombre_rest }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $restaurante->direccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $restaurante->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipos Id Plato:</strong>
                                    {{ $restaurante->tipos_id_plato }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
