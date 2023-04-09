@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ $producto->nombre }}</span>
                        </div>
                        <br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            <img src="{{ asset('storage').'/'.$producto->foto }}" width="100">
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Cantidad en almacen:</strong>
                            {{ $producto->cantidadEnAlmacen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
