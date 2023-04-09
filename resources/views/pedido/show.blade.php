@extends('layouts.app')

@section('template_title')
    {{ $pedido->name ?? "{{ __('Show') Pedido" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Pedido {{ $pedido->id }}</span>
                        </div>
                        <br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pedidos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id del producto:</strong>
                            {{ $pedido->productoId }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $pedido->cantidad }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Precio unitario:</strong>
                            {{ $pedido->producto->precio }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Precio total:</strong>
                            {{ $pedido->cantidad * $pedido->producto->precio }}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Estatus del pedido:</strong>
                            {{ $estados[$pedido->estatusDelPedido] }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
